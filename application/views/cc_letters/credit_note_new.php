<script type="text/javascript">
	$(function() {
		$( "#tabs-credit-note" ).tabs();
	});
</script>

<br/>
<h2>Credit Note (New)</h2>
<hr width="250px" align="left"/>

<?=form_open("")?>
<div class="body-content">
	<div id="tabs-credit-note">
		<ul>
			<li><a href="#creditNoteDetails">Credit Note Details</a></li>
			<li><a href="#allocationDetails">Allocation Details</a></li>
			<li><a href="#doubleEntryDetails">Double Entry Details</a></li>
		</ul>
		<div id="creditNoteDetails" class="meter-reading">
			<span class="span4label">Tenant/Owner</span>
			<?=form_dropdown('',array('','tenant'))?>
			<?=form_input(array('name'=>'towner','style'=>'width:295px;'))?>
			<br/>
			<span class="span4label">C.N. Date</span>
			<?=form_input()?>
			<span class="span4label">Amount</span>
			<?=form_input(array('name'=>'towner','style'=>'width:192px;'))?>
			<br/>
			<span class="span4label">Credit Note for</span>
			<?=form_textarea(array('name'=>'cc1','cols'=>'50','rows'=>'2'))?>
			<br style="clear:both;"/>
			<span class="span4label">Debit A/C</span>
			<?=form_dropdown('',array('','debit AC'))?>
			<?=form_input(array('name'=>'towner','style'=>'width:295px;'))?>
		</div>

		<div id="allocationDetails" class='meter-reading'>
			<span class="span4label">C.N. Amount:</span>
			<?=form_input()?>
			<span style="float: right;">C.N. Balance: <?=form_input()?></span>
			<br/><br style="clear: both;"/>
			<span style="display:inline-block; text-align:center; width:99%">
				Allocation Details <br/>
				<table border='1' cellpadding="0" cellspacing='0' style='display: inline-block;'>
					<tr>
						<td style="width:150px">Document</td>
						<td style="width:170px">Amount Allocation</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				</table>
				<br style="clear:both;"/>
				<?=form_button('','New Row')?>
				<?=form_button('','Delete Row')?>
			</span><br style="clear:both;"/>
			<span class="span4label">Credit Account</span>
			<?=form_dropdown('',array('','credit_account'))?>
			<?=form_input()?>
			<br style="clear:both;"/>
		</div>
		<div id="doubleEntryDetails">
		<span style="width:100%; display:inline-block; text-align:center;"
			<table border="1" cellpadding="0" cellspacing="0" style="display: inline-block;">
				<tr>
					<td>GL A/C</td>
					<td>A/C Description</td>
					<td>Date</td>
					<td>Amount</td>
					<td>R</td>
					<td>Recoverable</td>
					<td>Tenant</td>
					<td>Owner's Share</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</table><br style="clear:both;"/>
			<?=form_button('','New Row')?>
			<?=form_button('','Delete Row')?>
		</span>
		<span class="span4label">Balance =</span><br/>
		<span class="span4label">Debits =</span><br/>
		<span class="span4label">Credits =</span>
		</div>
		<br style="clear:both;"/>
	</div>
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
<div style="display:none;" class="right-widget">
	
</div>
<?=form_close()?>

