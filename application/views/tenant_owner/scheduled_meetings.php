<br/>
<h2>Scheduled Meetings</h2>
<hr width="250px" align="left"/>

<div class="body-content" id="schedule-meetings">
<?=form_open("")?>
	<div>
		<span class="span4label"><?=form_label('Tenant', 'tenant')?></span>
		<?=form_dropdown('tenant',array('T1'=>'Tenant'))?>
		<br style="clear:both;"/>
		<span class="span4label"><?=form_label('Date','date')?></span>
		<?=form_dropdown('date',array('D1'=>'2011-05-24'))?>
		<span ><?=form_label('Time','time')?></span>
		<?=form_input('time','')?>
		<hr/>
	</div>

	<div>
		<span class="span4label"><?=form_label('Purpose','purpose')?></span>
		<? $textArea = array ("cols"=>"54","rows"=>"3","name"=>'purpose',"id"=>"purposezzz");?>
		<?=form_textarea($textArea);?>
		<br/>
		<span class="span4label"><?=form_label('Out Come','out_come')?></span>
		<? $outcome = array ("cols"=>"54","rows"=>"3","name"=>'out_come');?>
		<?=form_textarea($outcome);?>
	</div>

	<div class="group-button-here">
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
