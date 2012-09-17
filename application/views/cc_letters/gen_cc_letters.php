<br/>
<h2>Generate Credit Control Letters</h2>
<hr width="250px" align="left"/>

<?=form_open("")?>
<div class="body-content">
	<div class="meter-reading" style="margin-top:25px;">
		<span class="span4label">Last generated</span>
		<?=form_input()?>
		<br/>
		<span class="span4label">Generate From</span>
		<?=form_input()?>
		<span class="span4label">To</span>
		<?=form_input()?>
	</div>
	
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right; margin-top:100px;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>

</div>
</form>
