<script type="text/javascript">
	$(function() {
		$( "#deposit-allocation" ).tabs();
	});
</script>
<br/>
<h2>Deposit Refund Allocation</h2>
<hr width="250px" align="left"/>
<?=form_open("")?>
<div class="body-content" id='deposit-allocation'>
	<ul>
		<li><a href="#refund-detail-zz">Refund Details</a></li>
		<li><a href="#deposit-details-zz">Deposit Details</a></li>
		
	</ul>

	<div class='meter-reading' id='refund-detail-zz'>
		<span class="span4label">Tenant/Owner</span>
		<?=form_dropdown('',array('','TO'))?>
		<?=form_input(array('name'=>'TO','style'=>'width:220px;'))?>
		<?=form_input()?>
		<br/>
	
		<span class="span4label">O.R. No.</span>
		<?=form_dropdown('',array('','ORNO'))?>
		<br/>
	
		<span class="span4label">Debit document</span>
		<?=form_dropdown('',array('','Debit'))?>
		<br/>
	
		<span class="span4label">Amount allocated</span>
		<?=form_input()?>
		<br/>
		
		<span class="span4label">Date of allocation</span>
		<?=form_input()?>
		<br/>
		<span class="span4label">Credit A/C</span>
		<?=form_dropdown('',array('','CreditA/C'))?>
		<span class="span4label">A/C Name</span>
		<?=form_input(array('name'=>'acname','style'=>'width:250px;'))?>
	</div>

	<div id="deposit-details-zz" style='min-height:150px;'>
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
