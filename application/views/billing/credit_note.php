<br/>
<h2>Credit Note</h2>
<hr width="250px" align="left"/>

<?=form_open("")?>
<div class="body-content">
	<div class="meter-reading">
		<span class="span4label">Tenant/Owner</span>
		<?=form_dropdown('',array('','abc'))?>
		<?=form_input()?>
		<?=form_input()?>
		<br/>
		<span class="span4label">Date</span>
		<?=form_input()?>
		<span class="span4label">Amount</span>
		<?=form_input()?>
		<br/>
		<span class="span4label">Particulars</span>
		<?=form_textarea(array('name'=>'cc1','cols'=>'65','rows'=>'2'))?>
		<br/>
		<span class="span4label">Allocation against</span>
		<?=form_dropdown('',array('','abc'))?>
		<span class="span4label">Amount</span>
		<?=form_input()?>
		<br/>
		
	</div>
	<div>
		<br/>
		<table style="width:600px;" cellspacing="0" cellpadding="0" border="1">
			<tr>
				<td style="text-align:center">GL A/C</td>
				<td style="text-align:center">A/C Description</td>
				<td style="text-align:center">Date</td>
				<td style="text-align:center">Amount</td>
			</tr>
		<?php
		for ($i=1;$i<=3;$i++){
			echo"
			<tr>
				<td >$i-</td>
				<td ></td>
				<td ></td>
				<td ></td>
			</tr>
			";
		}
		?>
		</table>
		<span style="float:right;"><?=form_button('','New Row')?><?=form_button('','Delete Row')?></span>
		<br style="clear: both;"/>
		<span class="span4label">Balance = </span><span class="meter-reading"><?=form_input()?></span>
		<span class="span4label">Debits = </span><span class="meter-reading"><?=form_input()?></span><br/>
		<span class="span4label">Credits = </span><span class="meter-reading"><?=form_input()?></span>
	</div>

<br/><br/>
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		echo form_button('search','Search');
		echo form_button('enter','Enter');
		
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>
</div>
</form>

