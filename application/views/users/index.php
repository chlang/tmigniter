<!--Load header file, included with css and jquery-->
<?php $this->load->view('includes/header'); ?>


<div id="userbody">

    <div>
        <button id="btn-username" style="margin: 5px 5px 5px 5px">Username</button>
        <button id="btn-grp-ma" style="margin: 5px 5px 5px 5px" >Grouping Matrix</button>
        <button id="btn-sec-acc-ma" style="margin: 5px 5px 5px 5px"> Security Access Matrix</button>
    </div>
    <div id="username">
        username here
    </div>

    <div id="groupingMatrix">
        grouping Matrix here
    </div>
    <div>
        <div>
            <select name="combobox" id="combobox">
                <option>Admin</option>
                <option>Supervisor</option>
            </select><button id="go">GO</button>
        </div>
        <div id="securityAccessMatrix" style="overflow: scroll; max-height: 300px">Security Access matrix here.</div>
        <div id="grp-btn">
            <input type="submit" value="Submit"/>
            <input type="reset" value="Cancel"/>
        </div>
    </div>
    


    


</div>

<script type="text/javascript">
$(document).ready(function(){
	$('#username').hide();
        $('#groupingMatrix').hide();
        $('#securityAccessMatrix').hide();
        $('#grp-btn').hide();
        $('#go').hide();
        $('#combobox').hide();

        $('#btn-username').click(function(){
           $('#username').show();
           //$(this).hide();
           $('#groupingMatrix').hide();
           $('#securityAccessMatrix').hide();
        });

        $('#btn-grp-ma').click(function(){
            $('#groupingMatrix').show();
            $('#securityAccessMatrix').hide();
            //$(this).hide();
            $('#username').hide();
        });

        $('#btn-sec-acc-ma').click(function(){
            $('#go').show();
            $('#combobox').show();
            $('#groupingMatrix').hide();
            $('#username').hide();
        });

        $('#go').click(function(){
            $('#combobox').hide()
            $('#groupingMatrix').hide();
            $('#securityAccessMatrix').show();
            $('#grp-btn').show();
            $(this).hide();
            $('#username').hide();

            var myModules = new Array(
            "AD Additional - Update Client A/C Code" ,
            "AD Additional - initialise Interest charge",
            "AD Additional - Ad-hoc billings",
            "AD Additional - Temporary Meter Reading",
            "AD Additional - Post Temporary Meter Read",
            "AD Additional - Temporary OR entry",
            "AD Additional - Post Temporary OR",
            "GS Company - Company Particulars",
            "GS Building - Building Type",
            "GS Building - Building Particulars",
            "GS Building - Floor Particulars",
            "GS Building - Lot Particulars",
            "GS Building - Lot particulars",
            "GS Building - Chart of Accounts",
            "GS Building - Predefined Chart of Accounts",
            "GS Building - Company Settings",
            "READ Debtors - Statement of Account",
            "READ Debtors - Official Receipt",
            "READ Debtors - O R / Credit Note Listing",
            "READ Debtors -  Reminder Letter",
            "READ Debtors - Insurance",
            "READ Debtors - Debtors Transaction Details",
            "READ Debtors - Reprint Interest Advice (10)",
            "READ Analysis -  Account Receivable Ageing",
            "READ Analysis - Temporary Meter Reading List",
            "READ Analysis - Temporary OR Listing",
            "READ Analysis - Reprint Interest Advice",
            "RETM Analysis - List of Lots",
            "RETM Analysis - Occupancy Analysis",
            "RETM Analysis - Tenant/Owner List",
            "RETM Analysis - Lot history",
            "RETM Analysis - Accounts Receivable Ageing",
            "RETM Analysis - Overdue Account Listing",
            "RETM Analysis - Tenant/Owner Ledger",
            "RETM Analysis - Debtors Transaction",
            "RETM Analysis - Billing Analysis",
            "RETM Analysis - Register of C/C Letters",
            "RETM Analysis - Tenant outstanding List",
            "RETM Schedule - Deposit Schedule",
            "RETM Schedule - Billing and Collection Sched",
            "RETM Schedule -  Schedule of Interest Advices",
            "RETM Schedule - Debtors Transaction Summ. (old)",
            "RETM Schedule - Billing and Coll. Sched (Inv)",
            "RETM Listing - Company Listing",
            "RETM Listing - Building Listing",
            "RETM Listing - Floor Listing",
            "RETM Listing - Invoice/Debit Document Listing",
            "RETM Listing - O.R/C.N Listing",
            "RETM Listing - Cancelled O.R. Listing",
            "RETM Listing - Refund Listing",
            "RETM Listing - Allocation Details",
            "RETM Listing - Deposit Allocation",
            "RETM Listing - Meter Reading",
            "RETM Listing - Tenant/Owner Labels",
            "RETM Listing - Tenant/Owner List",
            "RETM Document - Reprint Invoice",
            "RETM Document - Reprint Billing Advice",
            "RETM Document - Reprint Official Receipt",
            "RETM Document - Reprint Credit Note",
            "RETM Document - Reprint  Statement of Account",
            "RETM Document - Reprint Interest Advice",
            "RETM Document - Reprint C/C Letters",
            "RETM Document - Reprint Debit Note",
            "TM Tenancy - Tenant/owner Type",
            "TM Tenancy - Tenant/Owner Particulars",
            "TM Tenancy - Tenant/Owner Agreement",
            "TM Tenancy - Tenant/Owner (Lot) Details",
            "TM Tenancy - End of Tenant/Owner ship",
            "TM Tenancy - Scheduled Mettings",
            "TM Tenancy - G/L Interface",
            "TM Tenancy - Invoice Type",
            "TM Tenancy - Deposit Type",
            "TM Tenancy - Tenant/Owner Status",
            "TM Tenancy - Tax Master",
            "TM Tenancy - BLR Interest",
            "TM Billing - Ad-Hoc Billing (single)",
            "TM Billing - Ad-Hoc Billing",
            "TM Billing - Ad-Hoc Autobilling",
            "TM Billing - Official Receipt",
            "TM Billing - O.R Allocation ",
            "TM Billing - Deposit Allocation ",
            "TM Billing - Refund",
            "TM Billing - Cancelled O.R",
            "TM Billing -  Monthend/Statement of Account",
            "TM Billing - Interest charging",
            "TM Billing - Debit Note",
            "TM Billing - Credit Note",
            "TM Billing - C.N Allocation ",
            "TM Utilities - Table of charges",
            "TM Utilities - Meter Type",
            "TM Utilities - Meter Particulars",
            "TM Utilities - Meter Reading",
            "TM Utilities - Meter Reading (new)",
            "TM Utilities - Rate Changing",
            "TM C/C Letters - Credit control Settings",
            "TM C/C Letters - Generate C/C Letters",
            "TM C/C Letters - C.N Allocation (Multiple)",
            "TM C/C Letters - Credit Note (New)",
            "TM C/C Letters -  Adhoc Single Billing",
            "TM C/C Letters - Reminder Letter Setting",
            "UT Utilities - Backup",
            "UT Utilities - Reindex"
        );//end array myModules
            var htmlStr = "<table border='1'><tr><td>Code</td>"+
                "<td align='center'>Module</td>"+
                "<td align='center'>Insert</td>"+
                "<td align='center'>Edit</td>"+
                "<td align='center'>Delete</td>"+
                "<td align='center'>Hide</td>"+
                "</tr>";
            var i=0;
            var j = myModules.length;
            for (i=0;i<j;i++)
            {
                htmlStr += "<tr><td>"+(i+1)+"</td><td>"+myModules[i] +"</td>"+
                    "<td align='center'><input type='checkbox' checked='checked'/></td>"+
                    "<td align='center'><input type='checkbox' checked='checked'/></td>"+
                    "<td align='center'><input type='checkbox' checked='checked'/></td>"+
                    "<td align='center'><input type='checkbox' checked='checked'/></td>"+
                    "</tr>";

            }//end for
            htmlStr += "</table>";

            $('#securityAccessMatrix').html(htmlStr);




        });

});

</script>

<style type="text/css">
    input[type=submit], form a, input[type=reset] {
	border: none;
	margin-right: 1em;
	padding: 6px;
	text-decoration: none;
	font-size: 12px;
	-moz-border-radius: 4px;
	background: #348075;
	color: white;
	box-shadow: 0 1px 0 white;
	-moz-box-shadow: 0 1px 0 white;
	-webkit-box-shadow: 0 1px 0 white;

    }

    input[type=submit]:hover,input[type=reset]:hover, form a:hover {
	background: #287368;
	cursor: pointer;
    }

</style>



</body>
</html>