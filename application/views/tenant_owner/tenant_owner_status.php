<br/>
<h2>Tenant / Owner Status Form</h2>
<hr width="250px" align="left"/>

<div class="body-content">
<?=form_open("")?>
<div>
	<span class="span4label"><?=form_label('Prefix', 'prefix')?></span>
	<?=form_dropdown('prefix',array('','T'))?>
	<hr style="clear:both;"/>
</div>
<div style="min-height:100px;">
	<span class="span4label"><?=form_label('Description','description')?></span>
	<?=form_input('description','TENANT')?>
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
<?=form_close();?>
</div>
