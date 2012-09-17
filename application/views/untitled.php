<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
	.left-panel{
		border: 0px solid black;
		display: block;
		float: left;
		width: 25%;
		min-height: 200px;
		
		
	}
	
	.content-panel{
		border: 0px solid black;
		width: 75%;
		min-height: 200px;
		float: left;
		
	}
	
	.bottom-panel{
		
		border: 0px solid black;
		width:100%;
	}
	.main-container{
		display: block;
		border: 0px solid blue;
		width: 750px;
		margin: 15px 5px 15px 5px;
	}
	.widget li{
		margin-bottom:5px;
		list-style-type: none;
	}
	.widget ul{
		padding-left:10px;
		margin:5px;
	}
</style>
</head>
<body>
<div class="main-container">
	<div class='left-panel'>
		<div class="widget">
			<h3>Tenancy Management</h3>
			<ul>
				<li><?=anchor('tenancy',"Setup / Data Entry")?></li>
				<li><?=anchor('#',"Reporting")?></li>
			</ul>
		</div>
	</div>
	<div class='content-panel'>
		<span style="display:inline-block; text-align:center; width:100%">
			<h3>CONTENT DISPLAY</h3>
		</span>
		
		<!--Module Group Display-->
		<div>
			<div style="float:left;">
				<h4>Tenant/Owner</h4>
				<ol><?php
					if($m1->tenant_owner[0])	echo "<li>".anchor('tenancy/tenant_owner_type',"Tenant/Owner Type")."</li>";
					if($m1->tenant_owner[1]) 	echo "<li>".anchor('tenancy/tenant_owner_particulars',"Tenant/Owner Particulars")."</li>";					
					if($m1->tenant_owner[2]) 	echo "<li>".anchor('tenancy/tenant_owner_agreement',"Tenant/Owner Agreement")."</li>";					
					if($m1->tenant_owner[3]) 	echo "<li>".anchor('tenancy/tenant_owner_lot_details',"Tenant/Owner (Lot) Details")."</li>";					
					if($m1->tenant_owner[4]) 	echo "<li>".anchor('tenancy/end_of_tenant_ownership',"End of Tenant/Ownership")."</li>";					
					if($m1->tenant_owner[5]) 	echo "<li>".anchor('tenancy/scheduled_meetings',"Scheduled Mettings")."</li>";					
					if($m1->tenant_owner[6]) 	echo "<li>".anchor('tenancy/g_l_interface',"G/L Interface")."</li>";					
					if($m1->tenant_owner[7]) 	echo "<li>".anchor('tenancy/invoice_type',"Invoice Type")."</li>";					
					if($m1->tenant_owner[8]) 	echo "<li>".anchor('tenancy/deposit_type',"Deposit Type")."</li>";					
					if($m1->tenant_owner[9]) 	echo "<li>".anchor('tenancy/tenant_owner_status',"Tenant/Owner Status")."</li>";					
					if($m1->tenant_owner[10])	echo "<li>".anchor('tenancy/tax_master',"Tax Master")."</li>";
					if($m1->tenant_owner[11]) 	echo "<li>".anchor('tenancy/blr_interest',"BLR Interest")."</li>";
				?></ol>
			</div>


		<div style="float:left;">
			<h4>Utilities</h4>
			<ol>
				<?php 
				//confirmed this is in order.
					if($m2->utility[0])
						echo "<li>".anchor('utilities/table_of_charges',"Table of charges")."</li>";
					if($m2->utility[1])
						echo "<li>".anchor('utilities/meter_type',"Meter Type")."</li>";
					if($m2->utility[2])
						echo "<li>".anchor('utilities/meter_particulars',"Meter Particulars")."</li>";
					if($m2->utility[3])
						echo "<li>".anchor('utilities/meter_reading',"Meter Reading")."</li>";
					if($m2->utility[4])
						echo "<li>".anchor('utilities/meter_reading_new',"Meter Reading (new)")."</li>";
					if($m2->utility[5])
						echo "<li>".anchor('utilities/rate_changing',"Rate Changing")."</li>";
				?>
			</ol>
		</div>

		<fieldset class="module" id="billing">
			<legend>Billing</legend>
			<ol>
				<?php
					if($m3->billing[0])
						echo "<li>".anchor('billing/adhoc_bill_single',"Ad-Hoc Billing (single)")."</li>";
					if($m3->billing[1])
						echo "<li>".anchor('billing/adhoc_bill',"Ad-Hoc Billing")."</li>";
					if($m3->billing[2])
						echo "<li>".anchor('billing/adhoc_autobill',"Autobilling")."</li>";
					if($m3->billing[3])
						echo "<li>".anchor('billing/official_receipt',"Official Receipt")."</li>";
					if($m3->billing[4])
						echo "<li>".anchor('billing/or_allocation',"O.R Allocation ")."</li>";
					if($m3->billing[5])
						echo "<li>".anchor('billing/deposit_allocation',"Deposit Allocation ")."</li>";
					if($m3->billing[6])
						echo "<li>".anchor('billing/refund',"Refund")."</li>";
					if($m3->billing[7])
						echo "<li>".anchor('billing/cancelled_or',"Cancelled O.R")."</li>";
					if($m3->billing[8])
						echo "<li>".anchor('billing/monthend_statement_acc',"Monthend/Statement of Account")."</li>";
					if($m3->billing[9])
						echo "<li>".anchor('billing/interest_charging',"Interest charging")."</li>";
					if($m3->billing[10])
						echo "<li>".anchor('billing/debit_note',"Debit Note")."</li>";
					if($m3->billing[11])
						echo "<li>".anchor('billing/credit_note',"Credit Note")."</li>";
					if($m3->billing[12])
						echo "<li>".anchor('billing/c_n_allocation',"C.N Allocation")."</li>";
				?>
			</ol>
		</fieldset>
		
		<fieldset class="module" id="cc_letters">
			<legend>C/C Letters</legend>
			<ol>
		<?php
		//confirmed it is in order.
			if($m4->cc_letter[0])
				echo "<li>".anchor('cc_letters/credit_control_settings',"Credit control Settings")."</li>";
			if($m4->cc_letter[1])
				echo "<li>".anchor('cc_letters/gen_cc_letters',"Generate C/C Letters")."</li>";
			if($m4->cc_letter[2])
				echo "<li>".anchor('cc_letters/cn_allocation_multi',"C.N Allocation (Multiple)")."</li>";
			if($m4->cc_letter[3])
				echo "<li>".anchor('cc_letters/credit_note_new',"Credit Note (New)")."</li>";
			if($m4->cc_letter[4])
				echo "<li>".anchor('cc_letters/adhoc_single_billing',"Adhoc Single Billing")."</li>";
			if($m4->cc_letter[5])
				echo "<li>".anchor('cc_letters/reminder_letter_setting',"Reminder Letter Setting")."</li>";
		?>

		</ol>
		</fieldset>
			
		</div><!--End Display Module Group-->
	</div>
	<br style="clear:both;"/>
	<div class='bottom-panel'>
		
	</div>
	
</div>
</body>
</html> 
