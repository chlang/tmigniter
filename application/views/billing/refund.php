<script type="text/javascript">
	$(function() {
		$( "#refunds" ).tabs();
	});
</script>
<br/>
<h2>Deposit Refund</h2>
<hr width="250px" align="left"/>
<?=form_open("")?>
<div class="body-content" id='refunds'>
	<ul>
		<li><a href="#refund-detail-z">Refund Details</a></li>
		<li><a href="#deposit-details-z">Deposit Details</a></li>
		
	</ul>

	<div class='meter-reading' id='refund-detail-z'>
		<span class="span4label">Tenant/Owner</span>
		<?=form_dropdown('',array('','TO'))?>
		<br/>

		<span class="span4label">Refund O.R.</span>
		<?=form_dropdown('',array('','refund'))?>
		<span style='float:right; display:inline-block; text-align:right;'>
			Amount
			<?=form_input()?>
		</span>
		<br/>

		<span class="span4label">Date</span>
		<?=form_input(array('style'=>'margin-right:12px;'))?>
		<span style='float:right; display:inline-block; text-align:right;'>
			Cheque No
			<?=form_input()?>
			Bank
			<?=form_input(array('style'=>'width:50px;'))?>
		</span>
		<br/>

		<span class="span4label">GL Account</span>
		<?=form_dropdown('',array('','GL'))?>
		<br/>

		<span class="span4label">Reason</span>
		<?=form_textarea(array('name'=>'reason4refund','cols'=>'50','rows'=>'3'))?>
	</div>

	<div id="deposit-details-z" style='min-height:150px;'>
		<table style='display:inline-block;width:525px;' class='normal-table-border-1' border='1' cellspacing='0' cellpadding='0'>
			<tr>
				<td style="width:60px; text-align:center;">Inv.Type</td>
				<td style="width:240px; text-align:center;">Description</td>
				<td style="width:110px; text-align:center;">Refundable Amt.</td>
				<td style="width:89px; text-align:center;">Refund Amt.</td>
			</tr>
		<?php 
			for($i=0;$i<6;$i++){
				echo "
					<tr>
						<td>&nbsp;</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				";
			}
		?>
		</table>
		<br/>
		<span style='float:right;'>
			Refund amount
			<?=form_input()?>
		</span>
		<br style="clear:both;"/>
	</div>

	<br style='clear:both;'/>
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		echo form_button('enter','Enter');
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>
</div>
<?=form_close()?>
