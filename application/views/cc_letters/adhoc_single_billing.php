<br/>
<h2>Adhoc Billing</h2>
<hr width="250px" align="left"/>

<?=form_open("")?>
<div class="body-content">
	<div class="meter-reading">
		<span class="span4label">Tenant/Owner</span>
		<?=form_dropdown('',array('','abc'))?>
		<?=form_input(array('name'=>'TO','style'=>'width:350px'))?>
		<br/>
		<span class="span4label">Invoice</span>
		<?=form_dropdown('',array('','abc'))?>
		<span style='float:right;'>Total Amount <?=form_input()?></span>
		<br/>
		
		<span class="span4label">Agreement</span>
		<?=form_dropdown('',array('','abc'))?>
		<br/>
		
		<span class="span4label">Lot No From</span>
		<?=form_dropdown('',array('','abc'))?>
		<span class="span4label">To</span>
		<?=form_dropdown('',array('','abc'))?>
		
		<br/>
		
		<hr/>
	</div>
	<div>
		<br/>
		<span class="span4label">Invoice Date</span>
		<?=form_input()?>
		<span class="span4label">Manual Inv. No</span>
		<?=form_input()?>
		<table style="width:600px;" cellspacing="0" cellpadding="0" border="1">
			<tr>
				<td style="text-align:center" >Bill</td>
				<td style="text-align:center">Type</td>
				<td style="text-align:center">From</td>
				<td style="text-align:center">&nbsp;To</td>
				<td style="text-align:center">Rate</td>
				<td style="text-align:center">&nbsp;</td>
				<td style="text-align:center">Amount</td>
				<td style="text-align:center">Tax Rate</td>
			</tr>
		<?php
		for ($i=1;$i<=3;$i++){
			echo"
			<tr>
				<td >&nbsp;</td>
				<td ></td>
				<td ></td>
				<td ></td>
				<td ></td>
				<td ></td>
				<td ></td>
				<td></td>
			</tr>
			";
		}
		?>
		</table>
		<span style="float:left;">
			<? $textArea = array ("cols"=>"54","rows"=>"3",'name'=>'adhocBilling');?>
			<?=form_textarea($textArea);?>
		</span>
		<span style="float:right;"><?=form_button('','New Row')?><?=form_button('','Delete Row')?></span>
	</div>

<br/><br/>
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		echo form_button('search','Search');
		echo form_button('print','Print');
		echo form_button('enter','Enter');
		echo form_button('amend','Amend');
		echo form_button('delete','Delete'); 
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>
</div>
</form>

