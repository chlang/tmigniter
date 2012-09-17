<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<!--
		<link rel="shortcut icon" type="image/ico" href="http://www.sprymedia.co.uk/media/images/favicon.ico">
		-->
		
		<title>List of lots</title>
		
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
				Reporting - List of lots
			</div>

			<h1>Customize your report</h1>
			<div title="Select report that you want to process">
			</div>

			<h1>Live Report</h1>
			<div id="demo">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead>
		<tr>
			<th>Lot Number</th>
			<th>Floor</th>
			<th>Area (sqft)</th>
			<th>Owner's Name</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>Lot Number</th>
			<th>Floor</th>
			<th>Area (sqft)</th>
			<th>Owner's Name</th>
		</tr>
	</tfoot>
	<tbody>
<?php
	foreach ($list_of_lots->result() as $row){
		echo "<tr class='odd_gradeA'>";
			echo "<td>".$row->lot_no."</td>";
			echo "<td class='center'>".$row->floor."  Level</td>";
			echo "<td class='center'>".$row->area_ft."</td>";
			echo "<td>".$row->name."</td>";
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
<?php
//************************DEBUG*********************

?>
