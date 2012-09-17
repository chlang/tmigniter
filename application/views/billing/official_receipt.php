<script type="text/javascript">
	$(function() {
		$( "#official-receipt" ).tabs();
	});
</script>
<br/>
<h2>Official Receipt</h2>
<hr width="250px" align="left"/>
<?=form_open("")?>
<div class="body-content" id='official-receipt'>
	<ul>
		<li><a href="#official-receipt-details">Official Receipt Details</a></li>
		<li><a href="#allocation-details">Allocation Details</a></li>
		<li><a href="#">Deposit Allocation Details</a></li>
	</ul>
	
	<div id='official-receipt-details'>
		<div class='meter-reading' style="float:left; display:block;">
			<span class='span4label'>Tenant/Owner</span>
			<?=form_dropdown('',array('','tenant/owner'))?>
			<br/>
			<span class='span4label'>O.R. No.</span>
			<?=form_dropdown('',array('','OR No'))?>
			<br/>
			
			<span class='span4label'>Temp. O.R. No.</span>
			<?=form_input()?>
			<br/>
			
			<span class='span4label'>O.R. Date</span>
			<?=form_input()?>
			<br/>
			
			<span class='span4label'>Date received</span>
			<?=form_input()?>
			<br/>
			
			<span class='span4label'>Amount</span>
			<?=form_input()?>
			<br/>
			
			<span class='span4label'>Bank commission</span>
			<?=form_input()?>
			<br/>
			
			<span class='span4label'>O.R. Amount</span>
			<?=form_input()?>
			<br/>
			
			<span class='span4label'>Cheque no.</span>
			<?=form_input()?>
			<br/>
			
			<span class='span4label'>Bank</span>
			<?=form_input()?>
			<br/>
			
			<span class='span4label'>Date cleared</span>
			<?=form_input()?>
			<br/>
			
			<span class='span4label'>GL Account</span>
			<?=form_dropdown('',array('','GLAccount'))?>
		</div>

		<div style='float:left;'>
			<span class='span4label'>Name</span>
			<?=form_input(array('style'=>'width:337px;'))?>
			<br/>
			<span class='span4label'>Payment for</span>
			<?=form_textarea(array('name'=>'paymentfor','cols'=>'39','rows'=>'3'))?>
			<br/>
			<span class='span4label'>Other Details</span>
			<?=form_input()?>
			<?=form_input(array('style'=>'width:157px;'))?>
						<br/>
			<span class='span4label'></span>
			<?=form_input()?>
			<?=form_input(array('style'=>'width:157px;'))?>
						<br/>
			<span class='span4label'></span>
			<?=form_input()?>
			<?=form_input(array('style'=>'width:157px;'))?>
						<br/>
			<span class='span4label'></span>
			<?=form_input()?>
			<?=form_input(array('style'=>'width:157px;'))?>
			<br/>
			<span class='span4label'>In words</span>
			<?=form_textarea(array('name'=>'paymentfor','cols'=>'39','rows'=>'3'))?>
			<br/>
			<span class='span4label'>A/C Name</span>
			<?=form_input()?>
			
			<span class='span4label'>Is this a payment for Deposit?</span>
			<?=form_dropdown('',array('','YES'))?>
		</div>
		<div style='clear:both;'></div>
		<span class='span4label'>Remark</span>
		<?=form_input(array('style'=>'width:567px;'))?>
		
	</div>
	<div id='allocation-details'>
		<span style='float:left;'>
			<span class='span4label'>O.R. Amount:</span>
			<?=form_input()?>
		</span>
		<span style='float:right;'>
			<span>O.R. Balance:</span>
			<?=form_input()?>
		</span>
		<br style='clear:both;'/>
		<span style='text-align:center; display:inline-block; width:100%; '>
			
			<span><b>Allocation Details</b></span><br/>
			<table style='display:inline-block;' border='1' cellpadding='0' cellspacing='0'>
				<tr>
					<td style='width:150px;'>Document</td>
					<td>Amount Allocation</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
				</tr>
			</table><br/>
			<?=form_button('','New Row')?>
			<?=form_button('','Delete Row')?>
		</span>
		<span class='span4label'>Credit A/C</span>
		<?=form_dropdown('cAC',array('201100'))?>
		<br/>
		<span class='span4label'>
			A/C Name</span>
			<?=form_input(array('name'=>'hello','style'=>'width:350px;'))?>
		</span>
		<br style='clear:both;'/>
	</div>
	<div id='deposit-allocation-details'>
		
	</div>
	
	
<br style='clear:both;'/>
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		echo form_button('search','Search');
		echo form_button('print','Print');
		echo form_button(array('name'=>'printerSetup','content'=>'Printer Setup','style'=>'width:100px'));
		echo form_button('enter','Enter');
		echo form_button('amend','Amend');
		echo form_button('delete','Delete');
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	<br/>
	</div>
</div>
<?=form_close()?>
