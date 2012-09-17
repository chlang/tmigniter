<!DOCTYPE HTML>
<html>
<head>
	<style type="text/css" title="currentStyle">
			@import "<?=base_url()?>media/css/demo_page.css";
			@import "<?=base_url()?>media/css/demo_table.css";
			@import "<?=base_url()?>media/css/TableTools.css";
			@import "<?=base_url()?>media/css/style.css";
	</style>
	<script type="text/javascript" charset="utf-8" src="<?=base_url()?>media/js/jquery.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?=base_url()?>media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?=base_url()?>media/js/ZeroClipboard.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?=base_url()?>media/js/TableTools.js"></script>
        <script type="text/javascript">
		$(document).ready(function() {
			$('#example').dataTable( {
				"aaSorting": [[ 0, "desc" ]]
			});
		});
		function gohomebaby(){
			location.href="<?=base_url()?>index.php/tenancy";
			//alert ("Go home baby");
		}
	</script>
</head>
<body>
<h2>Tenant/Owner Type</h2>

<div class = "cr-navigation">
	<div style="text-align:right; margin-left:20px;margin-right:0px;">
		<span><img onclick="gohomebaby();" style="cursor:pointer;" src="<?=base_url()?>img/icons/home.png" title="Back Home" alt="Home"/></span>
		<!--
		<span><img style="cursor:pointer;" src="<?=base_url()?>img/icons/close_box_red.png" title="Close" alt="Close"/></span>
		<span><img style="cursor:pointer;" src="<?=base_url()?>img/icons/hourglass" title="Save" alt="Save"/></span>
		<span><img style="cursor:pointer;" src="<?=base_url()?>img/icons/edit.png" title="Edit" alt="Edit"/></span>
		<span><img style="cursor:pointer;" src="<?=base_url()?>img/icons/checked_shield_green" title="Insert"alt="Insert"/></span>
		-->
	</div>
</div>

<div class="main-container">
	<div class="content-panel">

		<?php echo validation_errors();
                    if(!isset($a['t_type_edit'])){

                        $code = set_value('code');
                        $desc = set_value('Description');
                        $cc_letter = set_value('CC_Letter');
                        $o_checked = '';
                        $t_checked = '';

                        $action = "tenancy/addType";
                        $disable_code = "";

                    }
                    else {
						
                        $disable_code = "disabled='disabled'";
                        $action = "tenancy/editType";

                        $code = $a['t_type_edit']->t_type;
                        $desc = $a['t_type_edit']->descriptin;
                        $cc_letter = $a['t_type_edit']->ccl_rep;
                        $ten_owner = $a['t_type_edit']->ten_own;
                        if($ten_owner=='O')
                            $o_checked = "checked";
                        else $o_checked="";
                        
                        if($ten_owner=='T')
                            $t_checked = "checked";
                        else $t_checked="";
                    }
                ?>
		<?php 
			$form_attr = array('class'=>'tenant-owner');
			echo form_open($action,$form_attr);
			//$options = array('C001' => 'Condominium Owner');
			
			echo form_label('Code', 'code')//,
			//form_input('code');
		?>
                    <input type="text" name="code" <?php echo $disable_code?> value="<?php echo $code?>"/>
                    <input type="hidden" name="code_edit" value="<?php echo $code?>"/>
		<br style='clear:both'>
		<?=form_label('Tenant/Owner?', 'tenant_owner')?>
		<div class="radio-container">
			<?=form_radio(array('name'=>'tenant_owner','value'=>'Tenant','checked'=>$t_checked))?> Tenant<br>
			<?=form_radio(array('name'=>'tenant_owner','value'=>'Owner','checked'=>$o_checked))?> Owner
		</div>
		<br style="clear:both">
			<?php echo form_label('Description', 'Description')//,
				//form_input('Description', '')?>
                    <input type="text" name="Description" value="<?php echo $desc ?>"/>
		<br style="clear:both">
			<?php echo form_label('Credit Control Letter', 'CC_Letter')
				//form_input(array('name'=>'CC_Letter','value'=>''))?>
                        <input type="text" name="CC_Letter" value="<?php echo $cc_letter; ?>" />
		<br style="clear:both">
		
			<?php echo form_label('&nbsp;'),
				form_submit('submit', 'Submit')?>
		<?=form_close();?>
	</div><!--Content Panel-->
</div>

<?php
	/* 		Add me to see param			*/
		//print_r($t_type_list);
                //
                //From EDIT page
                //print_r($a['t_type_edit']);
?>
	
</body>
</html>
