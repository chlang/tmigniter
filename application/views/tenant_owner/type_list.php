<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Tenant/ Owner Type</title>
    <style type="text/css" title="currentStyle">
            @import "<?=base_url()?>media/css/demo_page.css";
            @import "<?=base_url()?>media/css/demo_table.css";
            @import "<?=base_url()?>media/css/TableTools_JUI.css";
/*            @import "<?=base_url()?>media/css/TableTools.css";*/
            @import "<?=base_url()?>media/css/demo_table_jui.css";
    </style>
    <script type="text/javascript" src="<?=base_url()?>media/js/jquery.js"></script>
    <script type="text/javascript" src="<?=base_url()?>media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery-ui-1.8.11.custom.min.js"></script>
    
    <script type="text/javascript" charset="utf-8">
        var oTable;

        $(document).ready(function() { 
            oTable = $('#example1').dataTable({
//                "sDom": '<"H"Tfr>t<"F"ip>',
                "sPaginationType": "full_numbers",
                //"bProcessing": true,
                //"bServerSide": true,
                //"sAjaxSource": "<?php echo base_url()?>scripts/t-o_type_processing.php",
                "bJQueryUI": true
            });
            
            $('#cr-new-t_type').click(function(){
                //alert("add_type_form");
                self.location='<?=base_url()?>index.php/tenancy/add_type_form';
            });

            /*
             * Action when users Click on Edit button
             * type = 2 > Edit
             * */
            var editID;
            $('.btn-edit-t_type').live('click',function(){
               //alert($(this).find('p').html());
               editID = $(this).find('p').html();
               self.location='<?=base_url()?>index.php/tenancy/add_type_form?abac='+editID;
            });

            /*
            * Action when users click on Delete button
            *  type = 1 > Delete
            * */
           var deleteID ;
            $('.btn-delete-t-type').live('click',function(){
                deleteID = $(this).find('p').html();
                $("#message-box-deleted").dialog("open");
            }); //Delete button


/* Add a click handler for the delete row */
    $("#message-box-deleted").dialog({
    autoOpen: false,
    height: 154,
    width: 275,
    resizable: false,
    modal: true,
    buttons:{
            "Yes":function(){
                 $.ajax({
                    url:"edit_t_type",
                    type:"post",
                    dataType: "json",
                    data: ({'type':'1','t_type':  deleteID }),
                    success:function(){
                        //tenancy/tenant_owner_type                   
                        self.location='<?=base_url()?>index.php/tenancy/tenant_owner_type';
                    }
                });//ajax
                $(this).dialog("close");
            },
            "No":function(){$(this).dialog("close")}
        }

    });
    //end msbox confirm deleted

    });//main function
            function gohomebaby(){
                location.href="<?=base_url()?>index.php/tenancy";
                //alert ("Go home baby");
            }
    </script>
    </head>
<body>
<h2>Tenant/Owner Type</h2>

<div class = "cr-navigation" style="min-height:20px;">
    <div style="text-align:right; margin-left:20px;margin-right:0px;">
        <!--<span><img onclick="gohomebaby();" style="cursor:pointer;" src="<?=base_url()?>img/icons/home.png" title="Back Home" alt="Home"/></span>-->
        <span onclick="javascript:gohomebaby();" style="cursor:pointer;margin-right:20px;">Home</span>
        <span id="cr-new-t_type" style="cursor:pointer;">Add New</span>
    </div>
</div>

<?php               
	/* 		Add me to see param			*/
		//print_r($t_type_list);
?>
    <div id="demo">
        <form id="form">
            
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Code</th>
            <th>Type</th>
            <th>Description</th>
            <th>CC Letter</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No.</th>
            <th>Code</th>
            <th>Type</th>
            <th>Description</th>
            <th>CC Letter</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
<?php
	$i=0;
	foreach ($t_type_list->result() as $row){
            $i++;
            echo "<tr class='odd_gradeA'>";
                echo "<td>".$i."</td>";
                echo "<td>".$row->t_type."</td>";
                echo "<td class='center'>".$row->ten_own."</td>";
                echo "<td>".$row->descriptin."</td>";
                echo "<td>".$row->ccl_rep."</td>";
                echo "<td>
                        <div style='cursor:pointer; float: left; padding: 5px 5px 5px 5px' class='ui-corner-all ui-state-active btn-edit-t_type'>
                            <span style='float:left' class='ui-icon ui-icon-pencil'></span><span><p style='display:none;'>$row->t_type</p>Edit</span>
                        </div>

                        <div style='cursor:pointer; margin-left: 5px; float: left; padding: 5px 5px 5px 5px' class='ui-corner-all ui-state-active btn-delete-t-type'>
                            <span style='float:left; ' class='ui-icon ui-icon-trash'></span><span><p style='display:none;'>$row->t_type</p>Delete</span>
                        </div>
                    </td>";

            echo"</tr>";
	}
?>
	

	</tbody>
</table>
            </form>
	</div> <!--Demo end -->

<div id="message-box-deleted" title="Message box">
	<div style="float:left" class="ui-icon ui-icon-alert">

	</div>
	<div>  Are you sure to delete this?</div>				
</div>






</body>
</html>
