<br/>
<h2>Cancelled O.R.</h2>
<hr width="250px" align="left"/>
<?=form_open("")?>
<div class="body-content">
	<div class='meter-reading'>
		<span class="span4label">Tenant/Owner</span>
		<?=form_dropdown('',array('','TO'))?>
		<br/>
		<span class="span4label">Cancelled O.R.</span>
		<?=form_dropdown('',array('','TO'))?>
		
	</div>
	<br style="clear:both;"/>
	<hr/>
	
	<div class='meter-reading' style="float:left; min-height:120px; margin-top:36px;">
		<span class="span4label">O.R. Amount</span>
		<?=form_input()?>
		<br/>
		<span class="span4label">Cheque no.</span>
		<?=form_input()?>
		<br/>
		<span class="span4label">Bank</span>
		<?=form_input()?>
		<br/>
		<span class="span4label">Date of cancellation</span>
		<?=form_input()?>
	</div>
	<div style='float:right;min-height:170px;'>
		OR Description<br/>
		<?=form_textarea(array('name'=>'OR.Desc','cols'=>'40','rows'=>'3'))?>
		<br/>
		Reason for cancellation<br/>
		<?=form_textarea(array('name'=>'OR.cancel_reason','cols'=>'40','rows'=>'3'))?>
		
	</div>
	<br/><br style='clear:both;'/>
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		echo form_button('enter','Enter');
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>
</div>
<?=form_close("")?>
