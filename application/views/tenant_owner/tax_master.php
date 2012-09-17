<br/>
<h2>Tax Master</h2>
<hr width="250px" align="left"/>

<div class="body-content" id="schedule-meetings">
<?=form_open("")?>
	<div>
		<span class="span4label"><?=form_label('Tax Code','tax_code')?></span>
		<?=form_input()?>
		<hr/>
	</div>
	<div>
		<span class="span4label"><?=form_label('Tax Description','tax_description')?></span>
		<?=form_input('tax_description')?>
		<br/>
		<span class="span4label"><?=form_label('Tax Type','tax_type')?></span>
		<?=form_dropdown('tax_type',array('','taxtype'))?>
		<br/>
		<span class="span4label"><?=form_label('Tax Rate/Amount','tax_rate_amount')?></span>
		<?=form_input('tax_rate_amount')?>
		<br/>
		<span class="span4label"><?=form_label('Tax Type','tax_type')?></span>
		<?=form_dropdown('tax_type',array('','taxtype'))?>
		<?=form_input()?>
		<br/>
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
<?=form_close()?>
</div>
