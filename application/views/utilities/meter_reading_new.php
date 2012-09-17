<br/>
<h2>Meter Reading (New)</h2>
<hr width="250px" align="left"/>

<div class="body-content">
<?=form_open("")?>
	
	<div class="meter-reading">
		<span class="span4label">Meter Type</span>
		<?=form_dropdown('',array('','Meter Type'))?>
		
		<span class="span4label">Lot No.</span>
		<?=form_input(array(
			'disabled'=>'disabled',
			'name'=>'lotNumber'
		))?>
		<?=form_button('Name','...')?>
		<br/>
		
		<span class="span4label">This Reading</span>
		<?=form_input()?>
		<span class="span4label">Invoice Date</span>
		<?=form_input()?>
		<hr/>
	</div>
	<div class="meter-reading">
		<table cellspacing="0" cellpadding="0" border="1">
			<thead>
				<td style="text-align:center">Lot No.</td>
				<td style="text-align:center">Tenant Name</td>
				<td style="text-align:center">Invoice 1</td>
				<td style="text-align:center">This Read</td>
				<td style="text-align:center">Last Read</td>
			</thead>
		<?php
		for ($i=1;$i<=3;$i++){
			echo"
			<tr>
				<td style='width:20px;text-align:center'>.</td>
				<td style='width:240px;'></td>
				<td style='width:120px;'></td>
				<td style='width:120px;'></td>
				<td style='width:120px;'></td>
			</tr>
			";
		}
		?>
		</table>
		<span class="span4label">No. of Lots</span>
		<?=form_input(array('disabled'=>'disabled'))?>
		<span class="span4label">Total Units Consumed</span>
		<?=form_input(array('disabled'=>'disabled'))?>
		<span class="span4label">Total Amount</span>
		<?=form_input(array('disabled'=>'disabled'))?>
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
<?=form_close()?>
<br/><br/>
</div>
