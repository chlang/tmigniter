<br/>
<h2>C.N Allocation (Multiple)</h2>
<hr width="250px" align="left"/>

<?=form_open("")?>
<div class="body-content">
	<div class="meter-reading">
		<span class="span4label">Tenant/Owner</span>
		<?=form_dropdown('',array('','abc'))?>
		<?=form_input()?>
		<?=form_input()?>
		<br/>
		<span class="span4label">C.N. No.</span>
		<?=form_dropdown('',array('','abc'))?>
		<br/>
		<span class="span4label">Amount allocated</span>
		<?=form_input()?>
		<br/>
		<span class="span4label">Date of allocation</span>
		<?=form_input()?>
		<span class="span4label">C.N. Balance:</span>
		<?=form_input()?>
	</div>
	<div>
		<br/>
		<h3>Allocation Details</h3>
		<table style="width:600px;" cellspacing="0" cellpadding="0" border="1">
			<tr>
				<td style="text-align:center" colspan="2">Document</td>
				<td style="text-align:center">Amount Allocation</td>
				<td style="text-align:center">&nbsp;</td>
			</tr>
		<?php
		for ($i=1;$i<=3;$i++){
			echo"
			<tr>
				<td style='width:5px;text-align:center'>$i-</td>
				<td style='width:80px;'></td>
				<td style='width:80px;'></td>
				<td style='width:160px;'></td>
			</tr>
			";
		}
		?>
		</table>
		<span style="float:right;"><?=form_button('','New Row')?><?=form_button('','Delete Row')?></span>
	</div>

<br/><br/>
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		echo form_button('search','Search');
		echo form_button('enter','Enter');
		echo form_button('delete','Delete'); 
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>
</div>
</form>
