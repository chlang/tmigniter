<br/>
<h2>Credit Control Letter Settings</h2>
<hr width="250px" align="left"/>

<?=form_open("")?>
<div class="body-content">
	<h3>CC Letter Details</h3>
	<span style="margin:5px 15px 5px 15px;">A. Send letters on (overdue) amount of more than</span>
	<?=form_input()?>
	<br/>
	<span style="margin:5px 15px 5px 15px;">B. Credit control letters</span>
	<br/>
	<span style="float:left;display:inline-block;margin:5px 15px 5px 15px">
		<span style="padding-left:25px;">Description</span><br/>
		<span>1- <?=form_input()?></span><br/>
		<span>2- <?=form_input()?></span><br/>
		<span>3- <?=form_input()?></span><br/>
		<span>4- <?=form_input()?></span><br/>
		<span>5- <?=form_input()?></span>
	</span>
	<span class='span4text35px' style="float:right;display:inline-block;margin:5px 15px 5px 15px">
		<span>To send when outstanding by</span><br/>
		<span> <?=form_input()?>Days</span><br/>
		<span> <?=form_input()?>Days</span><br/>
		<span> <?=form_input()?>Days</span><br/>
		<span> <?=form_input()?>Days</span><br/>
		<span> <?=form_input()?>Days</span>
	</span>
	<br style="clear:both;"/>
	<span>
		C- Generate letters on accummulated basis? <?=form_dropdown('',array('No','Yes'))?>
	</span>
	<br/><br/>
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		echo form_button('amend','Amend');
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>
</div>
<?=form_close()?>
