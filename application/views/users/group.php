

<meta content="" charset="utf-8">


<style type="text/css">
    body { font-size: 82.5%; }
    label, input { display:block; }
    input.text { margin-bottom:12px; width:95%; padding: .4em; }
    fieldset { padding:0; border:0; margin-top:25px; }
    h2 { font-size: 1.2em; margin: .6em 0; }
    div#groups-contain { width: 550px; margin: 20px 0; }
    div#groups-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
    div#groups-contain table td, div#groups-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
    .ui-dialog .ui-state-error { padding: .3em; }
    .validateTips { border: 1px solid transparent; padding: 0.3em; }
</style>

<script type="text/javascript">
$(function() {
    
    var group_id = $( "#group-id" ),
        group_name = $( "#group-name" ),
        group_desc = $( "#group-desc" ),
        allFields = $( [] ).add( group_id).add( group_name ).add( group_desc ),
        tips = $( ".validateTips" );

    function updateTips( t ) {
        tips
            .text( t )
            .addClass( "ui-state-highlight" );
        setTimeout(function() {
            tips.removeClass( "ui-state-highlight", 1500 );
        }, 500 );
    }

    function checkLength( o, n, min, max ) {
        if ( o.val().length > max || o.val().length < min ) {
            o.addClass( "ui-state-error" );
            updateTips( "Length of " + n + " must be between " +
                    min + " and " + max + "." );
            return false;
        } else {
            return true;
        }
    }

    function checkRegexp( o, regexp, n ) {
        if ( !( regexp.test( o.val() ) ) ) {
            o.addClass( "ui-state-error" );
            updateTips( n );
            return false;
        } else {
            return true;
        }
    }

    $( "#group-dialog-form" ).dialog({
        autoOpen: false,
        height: 390,
        width: 350,
        modal: true,
        buttons: {
            "Create a group": function() {
                var bValid = true;
                allFields.removeClass( "ui-state-error" );

                //bValid = bValid && checkLength( group_id, "group-id", 3, 16 );
                bValid = bValid && checkLength( group_name, "group-name", 6, 80 );
                bValid = bValid && checkLength( group_desc, "group-desc", 5, 16 );

                //bValid = bValid && checkRegexp( group_id, /^[a-z]([0-9a-z_])+$/i, "Username may consist of a-z, 0-9, underscores, begin with a letter." );
                // From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
                bValid = bValid && checkRegexp( group_name, /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i, "eg. ui@jquery.com" );
                bValid = bValid && checkRegexp( group_desc, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );

                    if ( bValid ) {
                        $( "#groups tbody" ).append( "<tr>" +
                            "<td>" + group_id.val() + "</td>" +
                            "<td>" + group_name.val() + "</td>" +
                            "<td>" + group_desc.val() + "</td>" +
                        "</tr>" );
                        $( this ).dialog( "close" );
                    }
                },
            Cancel: function() {
                $( this ).dialog( "close" );
            }
            },
            close: function() {
                    allFields.val( "" ).removeClass( "ui-state-error" );
            }
    });
    
    //for Create group
    $( "#create-group" )
        .button()
        .click(function() {
                $( "#group-dialog-form" ).dialog( "open" );
    });

    $("#security-access-matrix").button();
    $( "#grouping-matrix" ).button();
    
});
</script>


<script type="text/javascript">
    // increase the default animation speed to exaggerate the effect
    $.fx.speeds._default = 300;
    $(function() {
        $( "#security-access-matrix-dialog-form" ).dialog({
            autoOpen: false,
            show: "bounce",
            height: 390,
            width: 550,
            hide: "explode",
            resizable: false,
            modal:true
        });

        $( "#security-access-matrix" ).click(function() {
            $( "#security-access-matrix-dialog-form" ).dialog( "open" );
            return false;
        });
   
       $("#grouping-matrix-dialog-form") .dialog({
           autoOpen: false,
           show: "bounce",
           height: 190,
           width: 350,
           hide: "explode",
           modal: true
       });
       
       $("#grouping-matrix").click(function(){
           $("#grouping-matrix-dialog-form").dialog("open");
           return false;
       });
       
       



    $("#select-group").click(function(){
        //alert ("yo");
        //value of selected : $("#combobox").val()
       // $( "#security-access-matrix-dialog-form" ).find();
        
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
            
            

        $("#sam-module-table").html(htmlStr);   
     
    }); //End onclick #select-group

    $("#btn-cancel").live('click',function(){
        $( "#security-access-matrix-dialog-form" ).dialog( "close" );
        //alert("want to cancel?");
    });//end of button cancel

    $("#btn-submit").live('click',function(){
        $( "#security-access-matrix-dialog-form" ).dialog( "close" );
    });//end of button submit

});//function for the two buttons

</script>






<div id="group-dialog-form" title="Create new group">
    <p class="validateTips">All form fields are required.</p>

    <form>
    <fieldset>
        <label for="group-id">Group ID</label>
        <input type="text" name="group-id" disabled="disabled" id="group-id" class="text ui-widget-content ui-corner-all" />
        <label for="group-name">Group name</label>
        <input type="text" name="group-name" id="group-name" value="" class="text ui-widget-content ui-corner-all" />
        <label for="group-desc">Group Description</label>
        <input type="text" name="group-desc" id="group-desc" value="" class="text ui-widget-content ui-corner-all" />
    </fieldset>
    </form>
</div>


<div id="security-access-matrix-dialog-form" title="Define Access Matrix to groups">
 Select Group:
 <button id="select-group">Go</button>

    <div id="sam-module-table" style="max-height: 200px; overflow: scroll">
       sss

    </div><!-- End Fake Secrity access matrix -->
    <div>
        <p align="right"> <input type="submit" value="Submit" id="btn-submit" /></p>
    </div>


</div><!--security-access-matrix-dialog-form-->





<div id="grouping-matrix-dialog-form" title="Assign users into a group">
    <p>Tab 3</p>
</div><!--grouping-matrix-dialog-form-->



<div id="groups-contain" class="ui-widget">
    <h2>Existing Groups:</h2>
    <table id="groups" class="ui-widget ui-widget-content">
        <thead>
            <tr class="ui-widget-header ">
                <th>#</th>
                <th>Group name</th>
                <th>Group Description</th>
                <th>Building</th>
                <th>Rooms</th>
                <th>Users</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Administrator</td>
                <td>Admin person who has all access to modules</td>
                <td>1111</td>
                <td>1111</td>
                <td>1111</td>

            </tr>
        </tbody>
    </table>
</div>


    
<button id="create-group">Create new group</button>
<button id="security-access-matrix">Security Access Matrix</button>
<button id="grouping-matrix">Grouping Matrix</button>

