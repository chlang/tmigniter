
<br/>
<?php 
	//print_r ($listing->row());
//ten_own_particular
	
?>
<style type="text/css" title="currentStyle">
    @import "<?=base_url()?>media/css/demo_page.css";
    @import "<?=base_url()?>media/css/demo_table.css";
    @import "<?=base_url()?>media/css/TableTools_JUI.css";
    @import "<?=base_url()?>media/css/TableTools.css";
    @import "<?=base_url()?>media/css/demo_table_jui.css";

</style>
<script type="text/javascript" src="<?=base_url()?>media/js/jquery.dataTables.js"></script>

<script type="text/javascript" src="<?=base_url()?>media/js/TableTools.min.js"></script>
<script type="text/javascript" charset="utf-8">
    var oTools;
	var aSelectedTrs ;
    $(document).ready(function() {        
        
        oTools = $('#ten_own_particular').dataTable({
            "sDom": 'T<"clear">lfrtip',
            //"sDom": '<"H"Tfr>t<"F"ip>',
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": "<?php echo base_url()?>scripts/t-o_particular_processing.php",
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",            
            		
		"oTableTools": {
			"sRowSelect": "multi",
			"aButtons": [ "select_all", "select_none" ]
		} // oTableTools end here.
        });  //Initialization dataTable end here.


        var oTT = TableTools.fnGetInstance( 'ten_own_particular' );
		aSelectedTrs = oTT.fnGetSelected();
        


    //when they click on delete <<<<<<<
        //href='".$this->uri->segment(2)."/delete'
        $('.cr-nav-delete').live('click',function(){
            if(aSelectedTrs.length!=0){
                $(aSelectedTrs).each(function(a,i){
                    var row = i.cells;
                    $(row).each(function(e,r){
                       if(e==1){
/* * * * * * * * * * * * * * * * * * * * * *
 *delete record where t_type = r.innerHTML and reload the page on success
 */
                            $.ajax({
                                url:"process_particular",
                                type:"POST",
//                                dataType:"json",
                                data:({t_code:r.innerHTML,type:'delete'}),
                                success: function(msg){
                                    alert(msg);
                                    self.location ='<?=current_url()?>';
                                }
                            });
                       }//end if e==1
                    });
                });
            }
            else alert('Please select any row to delete');

        });

    //when they click on edit <<<<<<<
        $(".cr-nav-edit").live('click',function(){           
           if(aSelectedTrs.length==1){
                $(aSelectedTrs).each(function(a,i){
                    var row = i.cells;
                    $(row).each (function (e , r ){
                        if(e==1)
                            self.location ='<?php echo $this->uri->segment(2)?>/edit/'+r.innerHTML;
                    });
                });//aSelected Loop
           }
           else
               alert('To edit, please select only one row');
        });

        //Check how many row they selected.
        //alert (aSelectedTrs.length);


        $("#fortesting").click(function(){          
            $(aSelectedTrs).each(function(a,i){                
                var row = i.cells;
                $(row).each (function (e , r ){
                    if(e==1)                    
                        alert (r.innerHTML);
                });

            });//aSelected Loop
        });

    }); //document ready end here.

</script>


<br/>
<table id="ten_own_particular" cellpadding="0" cellspacing="0" border="0" class="display" width="850px">
    <thead>
        <tr>
            <th>Name</th>
            <th>Code</th>
            <th>Type</th>
            <th>Phone</th>
            <th>Contact</th>
            <th>Position</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Code</th>
            <th>Type</th>
            <th>Phone</th>
            <th>Contact</th>
            <th>Position</th>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td colspan="5" class="dataTables_empty"><h2>Loading data from server</h2></td>
        </tr>
</tbody>
</table>

        