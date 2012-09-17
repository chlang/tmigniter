<br/>
<h2>Invoice Type</h2>
<hr width="250px" align="left"/>

<div class="body-content">
<?=form_open("")?>
<div>
	<span class="span4label"><?=form_label('Code', 'code')?></span>
	<?=form_dropdown('tenant',array('code'=>'C001'))?>
	<hr style="clear:both;"/>
</div>
<div style="min-height:100px;">
	<span class="span4label"><?=form_label('Description','description')?></span>
	<?=form_input('description','')?>
	<br/>
	<span class="span4label"><?=form_label('Charge interest?','charge_interest')?></span>
	<?=form_dropdown('charge_interest',array('NO','YES'))?>
	<br/>
	<span class="span4label"><?=form_label('Charge tax?','charge_tax')?></span>
	<?=form_dropdown('charge_tax',array('NO','YES'))?>
	<?=form_dropdown('charge_tax',array('','CT002'))?>
	<?=form_input()?>
	<br/>
	<span class="span4label"><b>G/L Account</b></span><br/>
	<span class="span4label"><?=form_label('a. Income','income')?></span>
	<?=form_dropdown('income',array('','700200'))?><br/>
	<span class="span4label"><?=form_label('b. Advance income','advance_income')?></span>
	<?=form_dropdown('adnvace_income',array('','700200'))?>
</div>
<div class="group-button-here" style="text-align: right;">
	<?php 
		echo form_button('enter','Enter'); 
		echo form_button('amend','Amend');
		echo form_button('delete','Delete');
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
</div>
<?=form_close();?>
</div>
