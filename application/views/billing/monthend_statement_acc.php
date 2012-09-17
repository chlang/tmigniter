<br/>
<h2>Month End / Statement of Account</h2>
<hr width="250px" align="left"/>
<?=form_open("")?>
<div class="body-content">
	<br/>
	<span style="display:inline-block; margin-left:120px;margin-right:22px;">Last month end</span>
	<?=form_input()?>
	
	<br/>
	<span style="display:inline-block; margin-left:120px;margin-right:22px;">This month end</span>
	<?=form_input()?>
	
	<br/><br/>
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
</form>
