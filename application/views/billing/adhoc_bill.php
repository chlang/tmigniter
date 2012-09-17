<br/>
<h2>Ad-Hoc Billing</h2>
<hr width="250px" align="left"/>
<?=form_open("")?>
<div class="body-content">
	<div class="meter-reading">
		<h3>Agreement Details</h3>
		
		<span class="span4label">Building - From</span>
		<?=form_dropdown('',array('','27'))?>
		<span class="span4label">To</span>
		<?=form_dropdown('',array('','BlockA'))?>
		<br/>
		<span class="span4label">Tenant - From</span>
		<?=form_dropdown('',array('','27'))?>
		<span class="span4label">To</span>
		<?=form_dropdown('',array('','BlockA'))?>
		<br/>
		<span class="span4label">Agreement - From</span>
		<?=form_dropdown('',array('','27'))?>
		<span class="span4label">To</span>
		<?=form_dropdown('',array('','BlockA'))?>
		<br/>
		<span class="span4label">Lot No. - From</span>
		<?=form_dropdown('',array('','27'))?>
		<span class="span4label">To</span>
		<?=form_dropdown('',array('','BlockA'))?>
		<br/>
		<span class="span4label">Tenant/Owner?</span>
		<?=form_dropdown('',array('','Yes'))?>
		<br/>
		<span class="span4label">Agreement Validity - From</span>
		<?=form_input()?>
		<span class="span4label">To</span>
		<?=form_input()?>
		<br/>
		<span class="span4label">Bill 1st lot only?</span>
		<?=form_dropdown('',array('','Yes'))?>
		<span class="span4label">Billing advice?</span>
		<?=form_dropdown('',array('','Yes'))?>
		<br/>
		<span class="span4label">Invoice date</span>
		<?=form_input()?>
		<span class="span4label">To</span>
		<?=form_input()?>
		
		
	</div>
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		echo form_button('print','Print');
		echo form_button('enter','Enter');
		echo form_button(array('name'=>'selectAll','content'=>'Select all','style'=>'width:90px;'));
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>

</div>
<div style="display:none;" class="right-widget">
</div>
<?=form_close()?>
