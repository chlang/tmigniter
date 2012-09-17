<br/>
<h2>Deposit Type</h2>
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
</div>
<div class="group-button-here" style="text-align: right;">
	<span style="float:right;"><hr style="width:250px;"/></span>
	<br style="clear:both;"/>
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
