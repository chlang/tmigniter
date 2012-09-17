<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="<?=base_url()?>css/table.css" type="text/css" media="screen" />
</head>
<body>

<div class="cr-navigation"></div>

		
<fieldset class="module">
	<legend>Analysis</legend>
	<ul>
		<li><?=anchor('reporting/list_of_lots',"List of Lots")?></li>
		<li><?=anchor('reporting/occu_analysis',"Occupancy Analysis")?></li>
		<li><?=anchor('reporting/tenant_owner_list',"Tenant/Owner List")?></li>
		<li><?=anchor('reporting/',"Lot History")?></li>
		
		<li><?php //echo anchor('reporting/',"Accounts Receivable Ageing")
				echo "Accounts Receivable Ageing";
			?></li>
		<li><?php //echo anchor('reporting/',"Overdue Account Listing")
				echo "Overdue Account Listing";
			?></li>
		<li><?php //echo anchor('reporting/',"Tenant/Owner Ledge")
				echo "Tenant/Owner Ledge";
			?></li>
		<li><?php //echo anchor('reporting/',"Debtors Transaction")
				echo "Debtors Transaction ";
			?></li>
		<li><?php //echo anchor('reporting/',"Billing analysis")
				echo "Billing analysis";
			?></li>
		<li><?php //echo anchor('reporting/',"Register of C/C Letters")
				echo "Register of C/C Letters";
			?></li>
		<li><?php //echo anchor('reporting/',"Tenant Outstanding List")
				echo "Tenant Outstanding List";
			?></li>
	</ul>
</fieldset>

<fieldset class="module">
	<legend>Schedule</legend>
	<ul>
		<li><?php //echo anchor('#',"Deposit Schedule")
				echo "Deposit Schedule";
			?></li>
		<li><?php //echo anchor('#',"Billing and Collection Sched")
				echo "Billing and Collection Sched";
			?></li>
		<li><?php //echo anchor('#',"Schedule of Interest Advices")
				echo "Schedule of Interest Advices";
			?></li>
		<li><?php //ehco anchor('#',"Debtors Transaction Summary (odl)")
				echo "Debtors Transaction Summary (odl)";
			?></li>
		<li><?php //echo anchor('#',"Billing and Collection Sched (Inv)")
				echo "Billing and Collection Sched (Inv)";
			?></li>
	</ul>
</fieldset>

<fieldset class="module">
	<legend>Listing</legend>
	<ul>
				<li><?php //echo anchor('#',"Company Listing")
						echo "Company Listing";
					?></li>
				<li><?php //echo anchor('#',"Building Listing")
						echo "Building Listing";
					?></li>
				<li><?php //ehoc anchor('#',"Floor Listing")
						echo "Floor Listing";
					?></li>
				<li><?php //echo anchor('#',"Invoice/Debit Document Listing")
						echo "Invoice/Debit Document Listing";
					?></li>
				<li><?php //echo anchor('#',"O.R./C.N. Listing")
						echo "O.R./C.N. Listing";
					?></li>
				<li><?php //echo anchor('#',"Cancelled O.R. Listing")
						echo "Cancelled O.R. Listing";
					?></li>
				<li><?php //echo anchor('#',"Refund Listing")
						echo "Refund Listing";
					?></li>
				<li><?php //echo anchor('#',"Allocation Details")
						echo "Allocation Details";
					?></li>
				<li><?php //echo anchor('#',"Deposit Allocation")
						echo "Deposit Allocation";
					?></li>
				<li><?php //echo anchor('#',"Meter Reading")
						echo "Meter Reading";
					?></li>
				<li><?php //echo anchor('#',"Tenant/Owner Labels");
						echo "Tenant/Owner Labels";
						?></li>
				<li><?=anchor('reporting/tenant_listing',"Tenant/Owner List")?></li>
			</ul>
</fieldset>

<fieldset class="module">
	<legend>Document</legend>
	<ul>
		<li><?php //echo anchor('#',"Reprint Invoice");
				echo "Reprint Invoice";
			?></li>
		<li><?php //echo anchor('#',"Reprint Billing Advice");
				echo "Reprint Billing Advice";
			?></li>
		<li><?php //echo anchor('#',"Reprint Official Receipt");
				echo "Reprint Official Receipt";
			?></li>
		<li><?php //echo anchor('#',"Reprint Credit Note");
				echo "Reprint Credit Note";
			?></li>
		<li><?php //echo anchor('#',"Reprint Statement of Account");
				echo "Reprint Statement of Account";
			?></li>
		<li><?php //echo anchor('#',"Reprint Interest Advice");
				echo "Reprint Interest Advice";
			?></li>
		<li><?php //echo anchor('#',"Reprint C/C Letters")
				echo "Reprint C/C Letters";
			?></li>
		<li><?php //echo anchor('#',"Reprint Debit note")
				echo "Reprint Debit note";
			?></li>
	</ul>
</fieldset>


</body>
</html>
