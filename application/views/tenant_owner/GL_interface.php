<br/>
<h2>G/L Interface</h2>
<hr width="250px" align="left"/>

<div class="body-content" id="schedule-meetings">
<div style="min-height:200px">
<?=form_open("")?>
	<div>
		<span class="span4label"><?=form_label('A.R. Control', 'a_r_control')?></span>
		<?=form_dropdown('a_r_control',array('T1'=>'a_r_control','T2'=>'a_r_control2'))?>
		
		<span style="width:150px; display:inline-block; text-align:right;"><?=form_label('Interest income', 'interest_income')?></span>
		<?=form_dropdown('interest_income',array('T1'=>'interest_income','T2'=>'interest_income2'))?>
		<br style="clear:both;"/>
		
		<span class="span4label"><?=form_label('Deposit','deposit')?></span>
		<?=form_dropdown('deposit',array('D1'=>'deposit','D2'=>'deposit2'))?>
		
		<span style="width:180px; display:inline-block; text-align:right;"><?=form_label('Advance/Over payment','a_o_payment')?></span>
		<?=form_dropdown('a_o_payment',array('D1'=>'a_o_payment','D2'=>'a_o_payment2'))?>
		<hr/>
	</div>

	<div>
		<span style="display:inline-block; width:180px; text-align:right;"><?=form_label('Bank commission income','bci')?></span>
		<?=form_dropdown('bci',array('D1'=>'BC Income','D2'=>'BC Income'))?>
		<br/>
		<span style="display:inline-block; width:180px; text-align:right;"><?=form_label('Bank commission expense','bce')?></span>
		<?=form_dropdown('bce',array('D1'=>'BC Expense','D2'=>'BC Expense'))?>
	</div>
</div>
	<div class="group-button-here" style="text-align:right; position:relative; bottom:1px;">
	<?php 
		echo form_button('amend','Amend');
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>
<?=form_close();?>
</div>
