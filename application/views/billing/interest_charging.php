<br/>
<h2>Interest Charging</h2>
<hr width="250px" align="left"/>
<?=form_open()?>
<div class="body-content">
	<div class='meter-reading'>
		<span class="span4label">Building - From</span>
		<?=form_dropdown('',array('',''))?>
		<span class="span4label">To</span>
		<?=form_dropdown('',array('',''))?>
		<br/>
		<span class="span4label">Tenant / Owner- From</span>
		<?=form_dropdown('',array('',''))?>
		<span class="span4label">To</span>
		<?=form_dropdown('',array('',''))?>
		<br/>
		<span class="span4label">Agreement - From</span>
		<?=form_dropdown('',array('',''))?>
		<span class="span4label">To</span>
		<?=form_dropdown('',array('',''))?>
		<br/>
		
		<span class="span4label">Interest Advice - From</span>
		<?=form_dropdown('',array('',''))?>
		<span class="span4label">To</span>
		<?=form_dropdown('',array('',''))?>
		
	</div>
	<hr/>
	<div>
		<br/>
	<span style="width:150px;display:inline-block; margin-left:22px;">Interest charged until</span>
	<?=form_input()?>
	
	<br/>
	<span style="display:inline-block; width: 150px; margin-left:22px;">Date of interest advice</span>
	<?=form_input()?>
	</div>
	
	<br style='clear:both;'/>
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		echo form_button('enter','Enter');
		echo form_button('delete','Delete');
		echo form_button(array('name'=>'selectAll','content'=>'Select all','style'=>'width:90px;'));
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>
</div>
<?=form_close()?>
