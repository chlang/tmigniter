<br/>
<h2>Rate Changing</h2>
<hr width="250px" align="left"/>

<div class="body-content">
<?=form_open("")?>
	<div class="meter-reading">
		<?=form_radio()?><span class="span4label" style="text-align:left;">Tenants</span>
		<?=form_radio()?><span class="span4label" style="text-align:left;">Owners</span
		<?=form_radio()?><span class="span4label" style="text-align:left;">Boths</span>
		<br/>
		<span class="span4label">Tenant/Owner</span>
		<?=form_input()?>
		<?=form_button('','...')?>
		<span class="span4label">Invoice Type</span>
		<?=form_dropdown('',array('','invoicetype'))?>
		<br/>
		<span class="span4label">Default Rate</span>
		<?=form_input()?><br/>
		<span class="span4label">Default Amount</span>
		<?=form_input()?>
	</div>
	<div class="meter-reading">
		<table style="width:600px;" cellspacing="0" cellpadding="0" border="1">
			<tr>
				<td style="text-align:center" colspan="2">Tenant Code</td>
				<td style="text-align:center">Tenant Name</td>
				<td style="text-align:center">Unit</td>
				<td style="text-align:center">New Rate</td>
				<td style="text-align:center">Old Rate</td>
				<td style="text-align:center">New A</td>
			</tr>
		<?php
		for ($i=1;$i<=3;$i++){
			echo"
			<tr>
				<td style='width:5px;text-align:center'>$i-</td>
				<td style='width:120px;'></td>
				<td style='width:180px;'></td>
				<td style='width:50px;'></td>
				<td style='width:50px;'></td>
				<td style='width:50px;'></td>
				<td style='width:50px;'></td>
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
		echo form_button('enter','Enter');
		echo form_button('amend','Amend'); 
		echo form_button('delete','Delete');
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>
</form>
</div>
