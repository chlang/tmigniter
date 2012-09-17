<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="<?=base_url()?>css/table.css" type="text/css" media="screen" />
<script type="text/javascript">
    $(function(){
        //Prepare dialog for grouping matrix (T/O)
        $('#cr-grouping-matrix-dialog').dialog({
            autoOpen: false,
            height:450,
            width: 500,
            modal: true,
            buttons: {
                    Update: function() {
                        //$(this).dialog('close');

                       //Post this access_level together with the id to update
                       var userID = $('input[name=id]').val();
                       var billing='';
                       var utility='';
                       var TO='';
                       var cc_letter='';
                       $('.billing_dialog').each(function(index,value){
                           if($(this).is(":checked")){
										if($('.m_billing_dialog').eq(index).is(':checked'))
											billing += '3';
										else
											billing += '1';
                           }
                           else{
                               billing +='0';
                           }
                       });
                       $('.cc_letter_dialog').each(function(index,value){
                           if($(this).is(":checked")){
										if($('.m_cc_letter_dialog').eq(index).is(':checked'))
											cc_letter +='3';
										else
											cc_letter += '1';
                           }
                           else{
                               cc_letter +='0';
                           }
                       });
                       $('.tenant_owner_dialog').each(function(index,value){
                           if($(this).is(":checked")){
										if($('.m_tenant_owner_dialog').eq(index).is(':checked'))
											TO += '3';
										else
											TO = TO+'1';
                           }
                           else{
										TO = TO+'0';
                           }
                       });
                       $('.utility_dialog').each(function(index,value){
                           if($(this).is(':checked')){
										if($('.m_utility_dialog').eq(index).is(':checked'))
											utility += '3';
										else 
											utility += '1';
                           }
                           else{
                               utility +='0';
                           }
                       });
                        $.ajax({
                            url:"<?php echo base_url()."index.php/homepage/";?>process_grouping_matrix",
                            type:"post",
                            dataType: "json",
                            data: ({'cc_letter':cc_letter,'utility':utility,'TO':TO,'billing':billing,'task':'update','id':userID}),
                            success:function(data){
                                //better request that div to reload. ???
                                $("#cr-grouping-matrix-display").load(location.href+" #cr-grouping-matrix-display>*","");
                                $('#cr-grouping-matrix-dialog').dialog('close');
                            }//end success
                        });

                    },
                    Cancel: function() {
                          $( this ).dialog( "close" );
                    }
                },
                close: function() {

                }
        });//grouping matrix dialog

        $('.cr-edit-group-tm').live('click',function(){
            //$('#cr-grouping-matrix-dialog h3').html("hello")
            var userID = $(this).find('p').html();
            $.ajax({
					 url:"<?php echo base_url().'index.php/homepage/process_grouping_matrix';?>",
					 type:"post",
					 dataType: "json",
					 data: ({'task':'retrieve','id':userID}),
					 success:function(data){
						//utility_dialog
						//$('.utility_dialog').attr('checked',true);
						$.each(data.utility, function(index,value){
							if(value=='1' || value=='3'){
								$('.utility_dialog').eq(index).val(value).attr('checked',true);
								if(value=='3'){
									$('.m_utility_dialog').eq(index).val(value).attr('checked',true);
								}
								else{
									$('.m_utility_dialog').eq(index).val(value).attr('checked',false);
								}
							}
							else{
								$('.utility_dialog').eq(index).val(value).attr('checked',false);
							}
						});
							$.each(data.TO, function(index,value){
								if(value=='1' || value=='3'){
									$('.tenant_owner_dialog').eq(index).val(value).attr('checked',true);
									if(value=='3')
										$('.m_tenant_owner_dialog').eq(index).val(value).attr('checked',true);
									else
										$('.m_tenant_owner_dialog').eq(index).val(value).attr('checked',false);
								}
								else{
									$('.tenant_owner_dialog').eq(index).val(value).attr('checked',false);
								}
							});
						$.each(data.billing, function(index,value){
							if(value=='1'||value=='3'){
								$('.billing_dialog').eq(index).val(value).attr('checked',true);
								if(value=='3')
									$('.m_billing_dialog').eq(index).val(value).attr('checked',true);
								else
									$('.m_billing_dialog').eq(index).val(value).attr('checked',false);
							}
							else{
								 $('.billing_dialog').eq(index).val(value).attr('checked',false);
							}
						});
						$.each(data.cc_letter, function(index,value){
							if(value=='1' || value=='3'){
								$('.cc_letter_dialog').eq(index).val(value).attr('checked',true);
								if(value='3')
									$('.m_cc_letter_dialog').eq(index).val(value).attr('checked',true);
								else
									$('.m_cc_letter_dialog').eq(index).val(value).attr('checked',false);
							}
							else{
								$('.cc_letter_dialog').eq(index).val(value).attr('checked',false);
							}
						});
                    //write the id to hidden field
                    $('input[name=id]').val(data.id);
                    $('#cr-grouping-matrix-dialog').dialog('open');
                    
                }

            });//ajax
            
        });//cr-edit-group-tm

        $('#billing_dialog').hide();
        $('#cc_letter_dialog').hide();
        $('#utility_dialog').show();
        $('#tenant_owner_dialog').hide();

//        ($('#util').is(':checked'))?$('#utility_dialog').show():$('#utility_dialog').hide();
//        ($('#TO').is(':checked'))?$('#tenant_owner_dialog').show():$('#tenant_owner_dialog').hide();
//        ($('#cc_let').is(':checked'))?$('#cc_letter_dialog').show():$('#cc_letter_dialog').hide();
//        ($('#billing').is(':checked'))?$('#billing_dialog').show():$('#billing_dialog').hide();
        

        $('#TO').live('click',function(){
            $('#utility_dialog').hide();
            $('#billing_dialog').hide();
            $('#cc_letter_dialog').hide();
            $('#tenant_owner_dialog').show();
            //alert('helo');
        });
        $('#cc_let').live('click',function(){
            $('#utility_dialog').hide();
            $('#billing_dialog').hide();
            $('#cc_letter_dialog').show();
            $('#tenant_owner_dialog').hide();
            //alert('helo');
        });
        $('#billing').live('click',function(){
            $('#utility_dialog').hide();
            $('#billing_dialog').show();
            $('#cc_letter_dialog').hide();
            $('#tenant_owner_dialog').hide();
            //alert('helo');
        });
        $('#util').live('click',function(){
            $('#utility_dialog').show();
            $('#billing_dialog').hide();
            $('#cc_letter_dialog').hide();
            $('#tenant_owner_dialog').hide();
            //alert('helo');
        });

    });//main function
</script>
<script type="text/javascript">
	$(function() {
		//cr-username-manipulate
		//cr-grouping-matrix
		//cr-tab-module-display
		//cr-edit-access
		//cr-grouping-matrix-dialog            

		//Prepare the dialog for user-access
		$('#cr-dialog-user-access').dialog({
			 autoOpen: false,
			 height: 200,
			 width: 600,
			 modal: true,
			 buttons: {
				  Update: function() {
						//$(this).dialog('close');
						var userID = $('input[name=id]').val();
						var access_level='',retm='',read='',ad='',tm='',gs='',ut='';
						retm =$('input[name=RETM]').is(':checked')?'1':'0';
						read = $('input[name=READ]').is(':checked')?'1':'0';
						ad = $('input[name=AD]').is(':checked')?'1':'0';
						tm = $('input[name=TM]').is(':checked')?'1':'0';
						gs = $('input[name=GS]').is(':checked')?'1':'0';
						ut = $('input[name=UT]').is(':checked')?'1':'0';
						access_level = retm+read+ad+tm+gs+ut;                        
					  //Post this access_level together with the id to update
						$.ajax({
							 url:"<?php echo base_url()."index.php/homepage/";?>process_security_matrix",
							 type:"post",
							 dataType: "json",
							 data: ({'task':'update','id':userID,'access_level':access_level}),
							 success:function(data){
								  //cr-username-manipulate-display
									$("#cr-username-manipulate-display").load(location.href+" #cr-username-manipulate-display>*","");
									$("#cr-dialog-user-access").dialog( "close" );
							 }
						});

				  },
				  Cancel: function() {
						  $( this ).dialog( "close" );
				  }
			 },
			 close: function() {

			 }

		});//dialog end 
		
		$(".cr-edit-access").live('click',function(){
			 //alert($(this).find('p').html());
			 var userID = $(this).find('p').html();
			 //$('#cr-dialog-user-access').dialog('open');
			 //post userID and retrieve information about that user
			 $.ajax({
				  url:"<?php echo base_url()."index.php/homepage/";?>process_security_matrix",
				  type:"post",
				  dataType: "json",
				  data: ({'task':'retrieve','id': userID }),
				  success:function(data){
						//alert(data);
					  //data > id,fullname,RETM,READ,AD,TM,GS,UT
						$('#cr-username').html(data.fullname);
						if(data.RETM=='1'){
							 $('input[name=RETM]').attr('checked',true);
							 $('input[name=RETM]').val('1');
						}
						else{
							 $('input[name=RETM]').attr('checked',false);
							 $('input[name=RETM]').val('0');
						}
						if(data.READ=='1'){
							 $('input[name=READ]').attr('checked',true);
							 $('input[name=READ]').val('1');
						}
						else{
							 $('input[name=READ]').attr('checked',false);
							 $('input[name=READ]').val('0');
						}
						if(data.AD=='1'){
							 $('input[name=AD]').attr('checked',true);
							 $('input[name=AD]').val('1');
						}
						else{
							 $('input[name=AD]').attr('checked',false);
							 $('input[name=AD]').val('0');
						}
						if(data.TM=='1'){
							 $('input[name=TM]').attr('checked',true);
							 $('input[name=TM]').val('1');
						}
						else{
							 $('input[name=TM]').attr('checked',false);
							 $('input[name=TM]').val('0');
						}
						if(data.GS=='1'){
							 $('input[name=GS]').attr('checked',true);
							 $('input[name=GS]').val('1');
						}
						else{
							 $('input[name=GS]').attr('checked',false);
							 $('input[name=GS]').val('0');
						}
						if(data.UT=='1'){
							 $('input[name=UT]').attr('checked',true);
							 $('input[name=UT]').val('1');
						}
						else{
							 $('input[name=UT]').attr('checked',false);
							 $('input[name=UT]').val('0');
						}
						$('input[name=id]').val(data.id);                        
						$("#cr-dialog-user-access").dialog("open");
				  }
			 });//end .ajax                
		});
	  //comment this when finished coding
	  //$("#cr-username-manipulate-display").show();
	  $("#cr-grouping-matrix-display").show();
		
	  //show and hide the user matrix when endUser click on icons
		$("#cr-username-manipulate").click(function(){
			$("#cr-grouping-matrix-display").hide();
			$("#cr-username-manipulate-display").show();
		});
		
		$("#cr-grouping-matrix").click(function(){
			$("#cr-grouping-matrix-display").show();
			$("#cr-username-manipulate-display").hide();
		});

	});
</script>

</head>
<body>
<div class="cr-navigation">
	<div style="text-align:right;margin-left:20px;margin-right:0px;">
		<!--This portion should be available to only Admin user.-->		
<!--		<span><img id="" style="cursor:pointer;" src="<?=base_url()?>img/icons/generalsetup1.png" title="General Setup" alt="setup.png"/></span>-->
<!--		<span><img id="" style="cursor:pointer;" src="<?=base_url()?>img/icons/1306913374_companies.png" title="Company"/></span>-->
		<span><img id="cr-grouping-matrix" style="cursor:pointer;" src="<?=base_url()?>img/icons/grouping.png" title="Grouping Matrix"/></span>
		<span><img id="cr-username-manipulate" style="cursor:pointer;" src="<?=base_url()?>img/icons/security_policies.png" title="Edit/Update User"/></span>
	</div>
</div>


<div class="main-container">
<div class='left-panel'>
	<div class="widget">
		<span style="margin-right:5px; height:25px; text-align:center;" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">Tenancy Management</span>
		<ul>
			<li><?=anchor('tenancy',"Setup / Data Entry")?></li>
			<li><?=anchor('reporting',"Reporting")?></li>
		</ul>
	</div>
	<br/>
	<div class="widget">
		<span style="margin-right:5px; height:25px; text-align:center;" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
			General Setup 
		</span>
		<ul>
			<li><?=anchor('gs_company',"Company")?></li>
			<li><?=anchor('#',"Building")?></li>
		</ul>
	</div>
	
	
</div>
	


	<div class='content-panel'>
		<span style="text-align:center; width:100%">
			<h3>Administration Panel </h3>
			<h3><?=Date("l F d, Y"); ?></h3>
                  <hr style="width:200px;"/>
                  <br/>
                  
		</span>
 
<?php
	//******************DEBUG AREA***********************
	//print_r($param);
	//echo "<br/>";
	//print_r ($param['a']);
	//echo strlen($param['a']->access_level);
	//foreach ($param['b']->result() as $row){
		//echo $row->username;
		//echo $row->id;
	//}
	//****************************************************//
?>

		<!--Module Group Display-->
		<div id="cr-grouping-matrix-display" style="display:none;margin-left:20px;margin-right:20px;">
			<h3>Grouping Matrix Security</h3>
			<table class="hor-minimalist-b" summary="Grouping Matrix Security" class="skinned-form-controls skinned-form-controls-mac">
                    <thead>
                      <tr>
                        <th scope="col">Employee</th>
                        <th scope="col" >Tenant/Owner</th>
                        <th scope="col" >Utility</th>
                        <th scope="col" >Billing</th>
                        <th scope="col" >CC Letter</th>
                        <th scope="col" style="width:60px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($param['b']->result() as $row){
                          echo "<tr class='cr-tr-access'>";
                            echo "<td>".$row->fullname."</td>";
                            echo "<td>".$row->tenant_owner."</td>";
                            echo "<td>".$row->utility."</td>";
                            echo "<td>".$row->billing."</td>";
                            echo "<td>".$row->cc_letter."</td>";
                            echo "<td>".
                                    '<div class="cr-edit-group-tm" style="text-align:center;"> <img style="cursor:pointer;"
                                    src="'.base_url().'img/icons/network_write.png"
                                    title="Edit"/>'."<p style='display:none;'>$row->id</p></div>
                                </td>";
                          echo "</tr>";
                        }
                    ?>
                    </tbody>
                </table>

		</div><!--Grouping matrix security-->
		
		<div id="cr-username-manipulate-display" style="display:none;margin-left:20px;margin-right:20px;">
			<h3>Employee Access Matrix Table</h3>
			<table id="hor-minimalist-b" summary="Employee Access Matrix">
                    <thead>
                      <tr>
                        <th scope="col">Employee</th>
                        <th scope="col" style="width:50px;">RETM</th>
                        <th scope="col" style="width:50px;">READ</th>
                        <th scope="col" style="width:50px;">AD</th>
                        <th scope="col" style="width:50px;">TM</th>
                        <th scope="col" style="width:50px;">GS</th>
                        <th scope="col" style="width:50px;">UT</th>
                        <th scope="col" style="width:60px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($param['b']->result() as $row){
                          echo "<tr class='cr-tr-access'>";
                          echo "<td>".$row->fullname."</td>";
                          for ($i=0; $i<strlen($param['a']->access_level); $i++){
                                echo '<td>'.$row->access_level[$i].'</td>';
                          }
                          echo "<td>".
                            '<div class="cr-edit-access" style="text-align:center;"> <img style="cursor:pointer;"
                                src="'.base_url().'img/icons/network_write.png"
                                title="Edit"/>'."<p style='display:none;'>$row->id</p></div></td>";
                          echo "</tr>";
                        }
                    ?>
                    </tbody>
                </table>
		</div><!--End Display Module Group-->
	</div>
	<br style="clear:both;"/>
	<div class='bottom-panel'>
		
	</div>

<!-- * * * * * * * * * * * * * * * * * *   
    this dialog box is for user access
* * * * * * * * * * * * * * * * * * * * *  -->

      <div style="display:none;" id="cr-dialog-user-access" title="Access Matrix">
          <table id="hor-minimalist-b" class="skinned-form-controls skinned-form-controls-mac">
            <thead>
                <tr>
                    <th scope="col" >Employee</th>
                    <th scope="col" style="width:40px;">RETM</th>
                    <th scope="col" style="width:40px;">READ</th>
                    <th scope="col" style="width:40px;">AD</th>
                    <th scope="col" style="width:40px;">TM</th>
                    <th scope="col" style="width:40px;">GS</th>
                    <th scope="col" style="width:40px;">UT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="cr-username">Username</td>
                    <td><label><input type="checkbox" name="RETM" /><span></span></label></td>
                    <td><label><input type="checkbox" name="READ" /><span></span></label></td>
                    <td><label><input type="checkbox" name="AD" /><span></span></label></td>
                    <td><label><input type="checkbox" name="TM" /><span></span></label></td>
                    <td><label><input type="checkbox" name="GS" /><span></span></label></td>
                    <td><label><input type="checkbox" name="UT" /><span></span></label></td>
                </tr>
            </tbody>
          </table>
          <input type="hidden" name="id" />
      </div>

<!-- * * * * * * * * * * * * * * * * * *
    this dialog box is for Grouping Matrix
* * * * * * * * * * * * * * * * * * * * *  -->

    <div id="cr-grouping-matrix-dialog" title="Grouping matrix for Tenant/Owner" class="skinned-form-controls skinned-form-controls-mac" style="display:none;"  >
        <h3>Please select module below</h3>
        <input type="hidden" name="id"/>
        <table class="hor-minimalist-b">
            <thead>
                <tr>
                    <th scope="col"><label><input id="TO" type="radio" name="Grouping" value="TO"/><span>Tenant/Owner</span></label></th>
                    <th scope="col"><label><input checked id="util" type="radio" name="Grouping" value="util"/><span>Utility</span></label></th>
                    <th scope="col"><label><input id="billing" type="radio" name="Grouping" value="billing"/><span>Billing</span></label></th>
                    <th scope="col"><label><input id="cc_let" type="radio" name="Grouping" value="cc_let"/><span>CC Letter</span></label></th>
                </tr>
            </thead>
        </table>

        
		<div id="tenant_owner_dialog">
		<table style="width:85%;" class="hor-minimalist-b">
		<thead>
			<tr>
				<th>Sub modules name</th>
				<th>Show?</th>
				<th>Modify?</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tenant/owner Type</td>
				<td><label><input type="checkbox" name="" class="tenant_owner_dialog"/><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_tenant_owner_dialog"/><span></span></label></td>
			</tr>
			<tr>
				<td>Tenant/Owner Particulars</td>
				<td><label><input type="checkbox" name="" class="tenant_owner_dialog"/><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_tenant_owner_dialog"/><span></span></label></td>
			</tr>			
			<tr>
				<td>Tenant/Owner Agreement</td>
				<td><label><input type="checkbox" name="" class="tenant_owner_dialog"/><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_tenant_owner_dialog"/><span></span></label></td>
			</tr>
			<tr>
				<td>Tenant/Owner Lot Details</td>
				<td><label><input type="checkbox" name="" class="tenant_owner_dialog"/><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_tenant_owner_dialog"/><span></span></label></td>
			</tr>
			<tr>
				<td>End of Tenant/Ownership</td>
				<td><label><input type="checkbox" name="" class="tenant_owner_dialog"/><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_tenant_owner_dialog"/><span></span></label></td>
			</tr>
			<tr>
				<td>Scheduled Meeting</td>
				<td><label><input type="checkbox" name="" class="tenant_owner_dialog"/><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_tenant_owner_dialog"/><span></span></label></td>
			</tr>
			<tr>
				<td>G/L Interface</td>
				<td><label><input type="checkbox" name="" class="tenant_owner_dialog"/><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_tenant_owner_dialog"/><span></span></label></td>
			</tr>
			<tr>
				<td>Invoice Type</td>
				<td><label><input type="checkbox" name="" class="tenant_owner_dialog"/><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_tenant_owner_dialog"/><span></span></label></td>
			</tr>
			<tr>
				<td>Deposit Type</td>
				<td><label><input type="checkbox" name="" class="tenant_owner_dialog"/><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_tenant_owner_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>Tenant/Owner Status</td>
				 <td><label><input type="checkbox" name="" class="tenant_owner_dialog"/><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_tenant_owner_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>Tax Master</td>
				 <td><label><input type="checkbox" name="" class="tenant_owner_dialog"/><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_tenant_owner_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>BLR Interest</td>
				 <td><label><input type="checkbox" name="" class="tenant_owner_dialog"/><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_tenant_owner_dialog"/><span></span></label></td>
			</tr>
		</tbody>
		</table>
		</div>

		<div id="utility_dialog">
		<table style="width:85%;" class="hor-minimalist-b">
		<thead>
			<tr>
				<th>Sub modules</th>
				<th>Show?</th>
				<th>Modify?</th>
			</tr>
		</thead>
			<tr>
				<td>Table of Charges</td>
				<td><label><input type="checkbox" name="" class="utility_dialog" /><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_utility_dialog" /><span></span></label></td>
			</tr>
			<tr>
				<td>Meter Type</td>
				<td><label><input type="checkbox" name="" class="utility_dialog" /><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_utility_dialog" /><span></span></label></td>
			</tr>
			<tr>
				<td>Meter Particulars</td>
				<td><label><input type="checkbox" name="" class="utility_dialog" /><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_utility_dialog" /><span></span></label></td>
			</tr>
			<tr>
				<td>Meter reading</td>
				<td><label><input type="checkbox" name="" class="utility_dialog" /><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_utility_dialog" /><span></span></label></td>
			</tr>
			<tr>
				<td>Meter reading (new)</td>
				<td><label><input type="checkbox" name="" class="utility_dialog" /><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_utility_dialog" /><span></span></label></td>
			</tr>
			<tr>
				<td>Rate Changing</td>
				<td><label><input type="checkbox" name="" class="utility_dialog" /><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_utility_dialog" /><span></span></label></td>
			</tr>
		</table>
		</div>
        
		<div id="billing_dialog">
		<table style="width:85%;" class="hor-minimalist-b">
		<thead>
			<tr>
				<th>Sub modules</th>
				<th>Show?</th>
				<th>Modify?</th>
			</tr>
		</thead>
			<tr>
				 <td>Ad Hoc Billing (single)</td>
				 <td><label><input type="checkbox" name="" class="billing_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_billing_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>Ad Hoc Billing</td>
				 <td><label><input type="checkbox" name="" class="billing_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_billing_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>Auto billing</td>
				 <td><label><input type="checkbox" name="" class="billing_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_billing_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>Official Receipt</td>
				 <td><label><input type="checkbox" name="" class="billing_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_billing_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>O.R Allocation</td>
				 <td><label><input type="checkbox" name="" class="billing_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_billing_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>Deposit Allocation</td>
				 <td><label><input type="checkbox" name="" class="billing_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_billing_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>Refund</td>
				 <td><label><input type="checkbox" name="" class="billing_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_billing_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>Canceled O.R</td>
				 <td><label><input type="checkbox" name="" class="billing_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_billing_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>Monthend/Statement of Account</td>
				 <td><label><input type="checkbox" name="" class="billing_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_billing_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>Interest Charging</td>
				 <td><label><input type="checkbox" name="" class="billing_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_billing_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>Debit Note</td>
				 <td><label><input type="checkbox" name="" class="billing_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_billing_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>Credit note</td>
				 <td><label><input type="checkbox" name="" class="billing_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_billing_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>C.N Allocation</td>
				 <td><label><input type="checkbox" name="" class="billing_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_billing_dialog"/><span></span></label></td>
			</tr>
		</table>
		</div>
        
		<div id="cc_letter_dialog">
		<table style="width:85%;" class="hor-minimalist-b">
		<thead>
			<tr>
				<th>Sub modules</th>
				<th>Show?</th>
				<th>Modify?</th>
			</tr>
		</thead>
			<tr>
				<td>Credit Control Setting</td>
				<td><label><input type="checkbox" name="" class="cc_letter_dialog"/><span></span></label></td>
				<td><label><input type="checkbox" name="" class="m_cc_letter_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>Generate C/C Letters</td>
				 <td><label><input type="checkbox" name="" class="cc_letter_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_cc_letter_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>C.N Allocation (Multiple)</td>
				 <td><label><input type="checkbox" name="" class="cc_letter_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_cc_letter_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>Credit Note (New)</td>
				 <td><label><input type="checkbox" name="" class="cc_letter_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_cc_letter_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>Credit Note</td>
				 <td><label><input type="checkbox" name="" class="cc_letter_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_cc_letter_dialog"/><span></span></label></td>
			</tr>
			<tr>
				 <td>C.N Allocation</td>
				 <td><label><input type="checkbox" name="" class="cc_letter_dialog"/><span></span></label></td>
				 <td><label><input type="checkbox" name="" class="m_cc_letter_dialog"/><span></span></label></td>
			</tr>
		</table>    
		</div>

 
        
	</div>
</div>
</body>
</html> 
