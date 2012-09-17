<?php
	//***** Debug ******
	//print_r($tenant);
	//print_r ($tenant->row());
	//foreach ($tenant->result() as $row){
		//print_r($row);
	//}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<!--
		<link rel="shortcut icon" type="image/ico" href="http://www.sprymedia.co.uk/media/images/favicon.ico">
		-->
		
		<title>Tenant/ Owner Listing</title>
		
		<style type="text/css" title="currentStyle">
			@import "<?=base_url()?>media/css/demo_page.css";
			@import "<?=base_url()?>media/css/demo_table.css";
			@import "<?=base_url()?>media/css/TableTools.css";
			@import "<?=base_url()?>media/css/style.css";
		</style>
		<script type="text/javascript" charset="utf-8" src="<?=base_url()?>media/js/jquery.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?=base_url()?>media/js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?=base_url()?>media/js/ZeroClipboard.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?=base_url()?>media/js/TableTools.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready( function () {
				$('#example').dataTable( {
					"sDom": 'T<"clear">lfrtip'
				});
				
			});
		</script>
	</head>
	<body id="dt_example">
		<div id="container">
			<div class="full_width big">
				Reporting - Tenant/ Owner Listing
			</div>

			<h1>Customize your report</h1>
			<div title="Select report that you want to process">
			</div>

			<h1>Live Report</h1>
			<div id="demo">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead>
		<tr>
			<th>No.</th>
			<th>Tenant/ Owner</th>
			<th>Address</th>
			<th>Unit/ Lot</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>No.</th>
			<th>Tenant/ Owner</th>
			<th>Address</th>
			<th>Unit/ Lot</th>
		</tr>
	</tfoot>
	<tbody>
<?php
	$i=0;
	foreach ($tenant->result() as $row){
		$i++;
		echo "<tr class='odd_gradeA'>";
			echo "<td>".$i."</td>";
			echo "<td>".$row->name."<br/>Code: ".$row->t_code."<br/>Fax: ".$row->fax1."</td>";
			echo "<td>".$row->address1.
			"<br/>Tel: ".$row->phone1."<br/>Contact: ".$row->contact1."</td>";
			echo "<td class='center'>".$row->t_code."</td>";
			
		echo"</tr>";
	}
?>
	

	</tbody>
</table>
			</div>
			<div class="spacer"></div>

		</div>
	</body>
</html>

