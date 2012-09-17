<style>
   
    label, input { display:block; }
    input.text { margin-bottom:12px; width:95%; padding: .4em; }
    fieldset { padding:0; border:0; margin-top:25px; }
    

    div.users-contain { width: 550px; margin: 20px 0; }
    div.users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
    div.users-contain table td, div.users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
    .ui-dialog .ui-state-error { padding: .3em; }
    .validateTips { border: 1px solid transparent; padding: 0.3em; }
</style>
<script type="text/javascript" charset="utf-8" src="<?=base_url()?>/js/cr-function.js"></script>
<script>
$(function() {
        

        var code = $( "#mtr_type" ),
                
                description = $( "#mtr_type_desc" ),
                allFields = $( [] ).add( code ).add(description),
                tips = $( ".validateTips" );

        function updateTips( t ) {
                 tips
                                        .text( t )
                                        .addClass( "ui-state-highlight" );
                 setTimeout(function() {
                                        tips.removeClass( "ui-state-highlight", 1500 );
                 }, 500 );
        }

        function checkLength( o, n, min, max ) {
                 if ( o.val().length > max || o.val().length < min ) {
                                        o.addClass( "ui-state-error" );
                                        updateTips( "Length of " + n + " must be between " +
                                                          min + " and " + max + "." );
                                        return false;
                 } else {
                                        return true;
                 }
        }

        function checkRegexp( o, regexp, n ) {
             if ( !( regexp.test( o.val() ) ) ) {
                o.addClass( "ui-state-error" );
                updateTips( n );
                return false;
             } else {
                return true;
             }
        }

        //Prepare params for editing
        var edit_code = $( "#edit_mtr_type" ),
            edit_description = $( "#edit_mtr_type_desc" );

        $("#dialog-form-edit-mtr_type").dialog({
            autoOpen: false,
            height: 330,
            width: 380,
            modal: true,
            buttons: {
                "Update": function() {
                    var bValid = true;
                    allFields.removeClass( "ui-state-error" );
                    

                    bValid = bValid && checkLength( edit_code, "Code", 3, 4 );

                    bValid = bValid && checkLength( edit_description, "Description", 5, 35 );

                    bValid = bValid && checkRegexp( edit_code, /^[a-z]([0-9a-z_])+$/i, "Code may consist of a-z, 0-9, underscores, begin with a letter." );

                    bValid = bValid && checkRegexp( edit_description, /^([0-9 a-zA-Z])+$/, "Description field only allow : a-z 0-9" );

                    if ( bValid ) {
                        //data submit to the server.

                        $.ajax({
                            url:"get_meter_type",
                            type:"post",
                            //dataType: "json",
                            data:({'type':'update',
                                'id':$("#edit-id_mtr_type").val(),
                                'mtr_type_edit':$('#edit_mtr_type').val(),
                                'desc_edit':$('#edit_mtr_type_desc').val()}),
                            success: function(){
                                self.location='meter_type';
                            },
                            error: function(){
                                alert("It's painful");
                            }
                        });

                        $( this ).dialog( "close" );
                        
                    }
                },
                Cancel: function() {
                        $( this ).dialog( "close" );
                }
            },
            close: function() {
                    allFields.val( "" ).removeClass( "ui-state-error" );
                    edit_code.removeClass("ui-state-error");
                    edit_description.removeClass("ui-state-error");
            }
        });//dialog edit
        
        $(".btn-edit-mtr_type").live('click',function(){                
            $.ajax({
                url:"get_meter_type",
                type:"post",
                dataType: "json",
                data: ({'type':'retrieve','id': $(this).find('p').html() }),
                success:function(data){
                    //alert(data);
                    $('#edit_mtr_type').val(data.mtr_type);
                    $('#edit_mtr_type_desc').val(data.desc);
                    $("#edit-id_mtr_type").val(data.id);
                    $("#dialog-form-edit-mtr_type").dialog("open");

                    
                }
            });
        });//When user click on edit btn

        $( "#dialog-form" ).dialog({
                autoOpen: false,
                height: 330,
                width: 380,
                modal: true,
                buttons: {
                    "Submit": function() {
                            var bValid = true;
                            allFields.removeClass( "ui-state-error" );

                            bValid = bValid && checkLength( code, "Code", 3, 4 );

                            bValid = bValid && checkLength( description, "Description", 5, 35 );

                            bValid = bValid && checkRegexp( code, /^[a-z]([0-9a-z_])+$/i, "Code may consist of a-z, 0-9, underscores, begin with a letter." );

                            bValid = bValid && checkRegexp( description, /^([0-9 a-zA-Z])+$/, "Description field only allow : a-z 0-9" );

                            if ( bValid ) {
                                //need to update database on success.
                                //Append the table only when the database updated.
                                //It's working, but need to add error message when insert duplicated code.
                                $.ajax({
                                    url:"get_meter_type",
                                    type:"post",
                                    //dataType: "json",
                                    data:({'type':'insert','mtr_type':code.val(),'desc':description.val()}),
                                    success: function(){
                                        $("#dialog-form").dialog( "close" );
                                        self.location='meter_type';
                                    },
                                    error: function(){
                                        alert("It's painful");
                                    }
                                });
                            }
                        },
                    Cancel: function() {
                            $( this ).dialog( "close" );
                    }
                },
                close: function() {
                        allFields.val( "" ).removeClass( "ui-state-error" );
                }
        });//dialog

        $( "#btn-create-meter-type" )
            .button()
            .click(function() {
                    $( "#dialog-form" ).dialog( "open" );
            });

//btn Delete *********************************************************

    //mx-deleted-mtr_type
    var delete_id;
    $('.btn-delete-mtr_type').live('click',function(){
        delete_id = $(this).find('p').html();
        $('#mx-deleted-mtr_type').dialog("open");
    });
    //setup dialog box to confirm whilst deleted
    $("#mx-deleted-mtr_type").dialog({
        autoOpen: false,
        height: 154,
        width: 275,
        resizable: false,
        modal: true,
        buttons:{
            "Yes":function(){
                $.ajax({
                    url:"get_meter_type",
                    type:"post",
                    //dataType: "json",
                    data: ({'type':'delete','id': delete_id }),
                    success:function(){ self.location='meter_type';}
                });//ajax
                $(this).dialog("close");
            },
            "No":function(){$(this).dialog("close")}
        }

    });
    
});//main function
</script>

<br/>

<hr width="550px" align="left"/>

<div id="dialog-form" title="Create new meter type">
	<p class="validateTips">All form fields are required.</p>

	<form>
	<fieldset>
            <label for="mtr_type">Code</label>
            <input type="text" name="mtr_type" id="mtr_type" class="text ui-widget-content ui-corner-all" />

            <label for="mtr_type_desc">Description</label>
            <input type="text" name="mtr_type_desc" id="mtr_type_desc" value="" class="text ui-widget-content ui-corner-all" />
	</fieldset>
	</form>
</div>

<div id="dialog-form-edit-mtr_type" title="Edit meter type">
	<p class="validateTips">All form fields are required.</p>

	<form>
	<fieldset>
            <input type="hidden" id="edit-id_mtr_type" />
            <label for="edit_mtr_type">Code</label>
            <input type="text" name="edit_mtr_type" id="edit_mtr_type" class="text ui-widget-content ui-corner-all" />

            <label for="edit_mtr_type_desc">Description</label>
            <input type="text" name="edit_mtr_type_desc" id="edit_mtr_type_desc" value="" class="text ui-widget-content ui-corner-all" />
	</fieldset>
	</form>
</div>


<div class="users-contain ui-widget">
	<h2>Existing meter type:</h2>
	<table id="users" class="ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header ">
<!--				<th>No</th>-->
				<th>Meter Type</th>
				<th>Description</th>
				<?php if ($a['modifiable']): ?>
					<th>Option</th>
				<?php endif;?>
			</tr>
		</thead>
		<tbody>
	<?php
            $i = 0;
            foreach ($a['meter_type']->result() as $row){
					$i++;
					echo "<tr>";
                    //echo "<td>".$i."</td>";
						echo "<td>".$row->mtr_type."</td>";
						echo "<td>".$row->desc."</td>";
						if($a['modifiable']){
							echo "<td>
								 <div style='cursor:pointer; float: left; padding: 5px 5px 5px 5px' class='ui-corner-all ui-state-active btn-edit-mtr_type'>
									  <span style='float:left' class='ui-icon ui-icon-pencil'></span><span><p style='display:none;'>$row->id</p>Edit</span>
								 </div>

								 <div style='cursor:pointer; margin-left: 5px; float: left; padding: 5px 5px 5px 5px' class='ui-corner-all ui-state-active btn-delete-mtr_type'>
									  <span style='float:left; ' class='ui-icon ui-icon-trash'></span><span><p style='display:none;'>$row->id</p>Delete</span>
								 </div>
							</td>";
						}
					echo "</tr>";

            }
        ?>
		</tbody>
	</table>
</div>

<?php if ($a['modifiable']): ?>
	<button id="btn-create-meter-type">Create new meter type</button>
<?php endif;?>

<div id="mx-deleted-mtr_type" title="Message box">
    <div style="float:left" class="ui-icon ui-icon-alert"></div>
    <div>  Are you sure to delete this Type?</div>
</div>

<?php
    //print_r($a['meter_type']->result());
    //foreach ($a['meter_type']->result() as $row) {
        //echo $row->desc . "<br/>" ;
//}
?>



</div>


