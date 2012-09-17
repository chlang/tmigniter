<br/>
<h2>Meter Reading</h2>
<hr width="250px" align="left"/>

<div class="body-content">
<?=form_open("")?>
	
	<div class="meter-reading">
		<span class="span4label">Meter Type</span>
		<?=form_dropdown('',array('','W002'))?>
		<span class="span4label">Lot No</span>
		<?=form_dropdown('',array('','Lot NO'))?>
		<?=form_input()?>
		<br/>
		<span class="span4label">This Reading</span>
		<?=form_input()?>
		<span class="span4label">Meter</span>
		<?=form_input()?>
		<?=form_input()?>
		<br/>
		
		<span class="span4label">Last Reading</span>
		<?=form_input()?>
		<span class="span4label">Meter</span>
		<?=form_input()?><br/>
		
		<span class="span4label">No. Months</span>
		<?=form_input()?>
		<span class="span4label">Unit Consumed</span>
		<?=form_input()?><br/>
		
		<span class="span4label">Invoice date</span>
		<?=form_input()?>
		<span class="span4label">Tenant</span>
		<?=form_input()?>
		<hr/>
	</div>
	<div>
		<table style="width:600px;" cellspacing="0" cellpadding="0" border="1">
			<tr>
				<td style="text-align:center" colspan="2">Invoice type</td>
				<td style="text-align:center">Amount Charges</td>
				<td style="text-align:center">Recoverable Reference</td>
				<td style="text-align:center">Manual Invoice no.</td>
			</tr>
		<?php
		for ($i=1;$i<=3;$i++){
			echo"
			<tr>
				<td style='width:5px;text-align:center'>$i-</td>
				<td style='width:150px;'></td>
				<td style='width:60px;'></td>
				<td style='width:60px;'></td>
				<td style='width:60px;'></td>
			</tr>
			";
		}
		?>
		</table>
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
