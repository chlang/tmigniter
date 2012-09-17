<script type="text/javascript">
	$(function() {
		$( "#tabs" ).tabs();
	});
</script>

<br/>
<h2>Reminder Letter Settings</h2>
<hr width="250px" align="left"/>

<?=form_open("")?>
<div class="body-content">
	<div id="tabs">
		<ul>
			<li><a href="#firstReminder">First Reminder</a></li>
			<li><a href="#secondReminder">Second Reminder</a></li>
			<li><a href="#thirdReminder">Third Reminder</a></li>
		</ul>
		<div id="firstReminder">
			<h3>First Reminder Letter Details!</h3>
			<span>Credit control letters Matter above Outstanding Details</span>
			<br/>
			<?=form_textarea(array('name'=>'cc1','cols'=>'70','rows'=>'2'))?>
			<br/><br/>
			<span>Credit control letter Matter below Oustanding Details</span>
			<br/>
			<?=form_textarea(array('name'=>'cc1','cols'=>'70','rows'=>'2'))?>
		</div>
		<div id="secondReminder">
			<h3>Second Reminder Letter Details!</h3>
			<span>Credit control letters Matter above Outstanding Details</span>
			<br/>
			<?=form_textarea(array('name'=>'cc1','cols'=>'70','rows'=>'2'))?>
			<br/><br/>
			<span>Credit control letter Matter below Oustanding Details</span>
			<br/>
			<?=form_textarea(array('name'=>'cc1','cols'=>'70','rows'=>'2'))?>
		</div>
		<div id="thirdReminder">
			<h3>Third Reminder Letter Details!</h3>
			<span>Credit control letters Matter above Outstanding Details</span>
			<br/>
			<?=form_textarea(array('name'=>'cc1','cols'=>'70','rows'=>'2'))?>
			<br/><br/>
			<span>Credit control letter Matter below Oustanding Details</span>
			<br/>
			<?=form_textarea(array('name'=>'cc1','cols'=>'70','rows'=>'2'))?>
		</div>
		<br/><br/>
	</div>
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
<div style="display:none;" class="right-widget">
	
</div>
<?=form_close()?>
