<br/>
<h2>Table of Charges</h2>
<hr width="250px" align="left"/>

<div class="body-content">
<?=form_open("")?>
	
	<div class="meter-reading">
		<span class="span4label">Table Code</span>
		<?=form_dropdown('',array('','code'))?>
		<span class="span4label">Description</span>
		<?=form_input(array('style'=>'width:200px'))?>
		<hr/>
	</div>
	<div class="meter-reading">
		<span class="span4label">Minimum</span>
		<?=form_input()?>
		<span class="span4label">Maximum</span>
		<?=form_input()?>
		<br/>

		<span class="span4table">
			<span class="span4thead">
				<span class="span4td">Usage</span><span class="span4td">Amount</span><span class="span4td">Rate</span>
			</span>
		<br/>
			<span class="span4tr">
				<span class="span4td"></span><span class="span4td"></span><span class="span4td"></span>
			</span>
		<br/>
			<span class="span4tr">
				<span class="span4td"></span><span class="span4td"></span><span class="span4td"></span>
			</span>
		<br/>
			<span class="span4tr">
				<span class="span4td"></span><span class="span4td"></span><span class="span4td"></span>
			</span>
		<br/>
			<span class="span4tr">
				<span class="span4td"></span><span class="span4td"></span><span class="span4td"></span>
			</span>
		<br/>
			<span>
				<?php echo form_button('new_row','New Row'),
				form_button('Delete Row','Delete Row')?>
			</span>
		</span>

	</div>
	<br/><br/>
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		echo form_button('print','Print'); 
		echo form_button('search','Search');
		echo form_button('enter','Enter');
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>
</form>
</div>
