<?php
/* 
 *  SITA Software Sdn Bhd
 */

    $this->load->view('inc/header');
    $this->load->view('inc/nav_listing');
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
<script type="text/javascript">
    var oTools;
    var aSelectedTrs ;
    $(document).ready(function() {

        oTools = $('#t-o_agreement').dataTable({
            "sDom": 'T<"H"fl>t<"F"rip>',
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": "<?php echo base_url()?>scripts/t-o_agreement_processing.php",
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",

            "oTableTools": {
                  "sRowSelect": "multi",
                  "aButtons": [/*"select_all", "select_none"*/]
            } // oTableTools end here.
        });  //Initialization dataTable end here.
        
        //When they click on the new option
        $(".cr-nav-new").live('click',function(){
            self.location = "new_agreement";
        });

        //when they click on the edit
        $(".cr-nav-edit").live('click',function(){
            alert('edit');
        });

        //when they click on the delete
        $(".cr-nav-delete").live('click',function(){
           alert('Delete');
        });

    });
</script>
<br/>
<form style="display:none;" action="" method="POST" id="form_agreement">
    <input type="text" value=""/>
</form>
<table id="t-o_agreement" cellpadding="0" cellspacing="0" border="0" class="display" width="850px">
    <thead>
        <tr>
            <th>Tenant/Owner</th>
            <th>Agreement No</th>
            <th>Agreement Date</th>
            <th>Commences</th>
            <th>Expires</th>
            <th>No. Lots</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Tenant/Owner</th>
            <th>Agreement No</th>
            <th>Agreement Date</th>
            <th>Commences</th>
            <th>Expires</th>
            <th>No. Lots</th>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td colspan="5" class="dataTables_empty"><h3>Loading data from server</h3></td>
        </tr>
    </tbody>
</table>
<?php $this->load->view('inc/footer')?>
