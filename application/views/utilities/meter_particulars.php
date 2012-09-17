<br/>
<h2>Table of Charges</h2>
<hr width="250px" align="left"/>

<div class="body-content">
<?=form_open("")?>
	<div class="meter-reading">
		<span class="span4label">Meter type:</span>
		<?=form_dropdown('',array('','code'))?>
		<br/>
		<span class="span4label">Lot no:</span>
		<?=form_dropdown('',array('','lotno'))?>
	</div>
	<div class="meter-reading">
		<table style="width:600px;" cellspacing="0" cellpadding="0" border="1">
			<tr>
				<td style="text-align:center" colspan="2">Invoice type</td>
				<td style="text-align:center">Usage Table</td>
				<td style="text-align:center">Charge to T/O</td>
			</tr>
		<?php
		for ($i=1;$i<=3;$i++){
			echo"
			<tr>
				<td style='width:5px;text-align:center'>$i-</td>
				<td style='width:120px;'></td>
				<td style='width:120px;'></td>
				<td style='width:120px;'></td>
			</tr>
			";
		}
		?>
		</table>
		<?=form_button('new_row',"New Row")?>
		<?=form_button('delete_row',"Delete Row")?>
	</div>
	<br/><br/>
	
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		echo form_button('enter','Enter');
		echo form_button('amend','Amend'); 
		echo form_button('delete','Delete');
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>
</form>
</div>
