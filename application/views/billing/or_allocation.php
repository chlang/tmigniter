<br/>
<h2>O.R. Allocation</h2>
<hr width="250px" align="left"/>
<?=form_open("")?>
<div class="body-content">
	<div class='meter-reading'>
		<span class="span4label">Tenant/Owner</span>
		<?=form_dropdown('',array('','TO'))?>
		<?=form_input(array('name'=>'TO','style'=>'width:220px;'))?>
		<?=form_input()?>
		<br/>
	
		<span class="span4label">Date of allocation</span>
		<?=form_input()?>
		<br/>
	
		<span class="span4label">O.R. No.</span>
		<?=form_dropdown('',array('','ORNO'))?>
		<br/>
	
		<span class="span4label">Debit document</span>
		<?=form_dropdown('',array('','Debit'))?>
		<br/>
	
		<span class="span4label">Amount allocated</span>
		<?=form_input()?>
		<br/>
		
		<span class="span4label">Credit A/C</span>
		<?=form_dropdown('',array('','CreditA/C'))?>
		<span class="span4label">A/C Name</span>
		<?=form_input(array('name'=>'acname','style'=>'width:250px;'))?>
	</div>
	
	<br style='clear:both;'/>
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		
		echo form_button('search','Search');
		echo form_button('enter','Enter');
		echo form_button('delete','Delete');
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>
</div>
<?=form_close()?>
