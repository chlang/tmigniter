<br/>
<h2>Occupancy Analysis</h2>
<hr width="250px" align="left"/>
<?=form_open("")?>
<div class="body-content">
	<div class="meter-reading">
		<span class="span4label">Company</span>
		<?=form_input()?>
		<br/>
		
		<span class="span4label">Building</span>
		<?=form_input()?>
		<br/>
		<span class="span4label">Tenants</span><?=form_radio('re-tenants');?>
		<span class="span4label">Owners</span><?=form_radio('re-tenants');?>
		<span class="span4label">Both</span><?=form_radio('re-tenants');?>
		<br/>
		
		<span class="span4label">Tenant/Owner</span>
		<?=form_input()?>
		<br/>
		
		<span class="span4label">Analysis at</span>
		<?=form_input()?>
		
		<br/>
		<br/>
		<span>Lettable / Ocupancy For</span>
		<br/>
		<span class="span4label">Rental</span><?=form_radio('lettable');?>
		<span class="span4label">Not Rental</span><?=form_radio('lettable');?>
		<span class="span4label">Both</span><?=form_radio('lettable');?>
	</div>
	<hr/>
	<div style="width:100%; text-align:center;">
		<span class="span4label">Analysis mode</span><?=form_dropdown('name',array('By floor'))?>
	</div>
	
	
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		echo form_button('view','View');
		echo form_button('print','Print');
		//echo form_button('print_setup','Printer Setup');
		echo form_button('quit','Quit');
	?>
	</div>
</div>
</form>
