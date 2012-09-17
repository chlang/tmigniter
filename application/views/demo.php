<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<!--
		<link rel="shortcut icon" type="image/ico" href="http://www.sprymedia.co.uk/media/images/favicon.ico">
		-->
		
		<title>TM Reporting</title>
		
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
		<script type="text/javascript" src="<?=base_url()?>media/js/radio-demo.js"></script>
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
				Tenant or Owner Management Report
			</div>
			
			<h1>Select report to proceed</h1>
			<div id="options">
				<ul id="list">
				<li class="active"><a href="#" class="option1 active" id="link1"><span>Option</span></a></li>
				<li><a href="#" class="option2" id="link2"><span>Option</span></a></li>
				<li><a href="#" class="option3" id="link3"><span>Option</span></a></li>
				<li><a href="#" class="option4" id="link4"><span>Option</span></a></li>
				</ul>
			</div>
			<!--
			<p><a href="#" class="toggleform">Show Hidden Form Radion Buttons</a></p>
			-->

			<form action="" method="post" id="radioform">
				Option 1: <input name="option1" type="radio" value="option1" id="option1" checked="checked" /><br />
				Option 2: <input name="option1" type="radio" value="option2" id="option2" /><br />  
				Option 3: <input name="option1" type="radio" value="option3" id="option3" /><br />
				Option 4: <input name="option1" type="radio" value="option5" id="option4" /><br />
			</form>
			
			<div title="Select report that you want to process">
		<?php 
				//A- List of Lots
				//B- Ocuupancy Analysis
				//C- Tenant/Owner List
				//D- Lot History
		?>
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
			echo "<td class='center'>".$row->floor." Level</td>";
			echo "<td class='center'>".$row->area_ft."</td>";
			echo "<td>".$row->name."</td>";
			
		echo"</tr>";
		//echo $row->lot_no;
		//echo $row->t_code;
		//echo $row->floor;
		//echo $row->area_ft;
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

 print_r($list_of_lots->row());
 //foreach ($list_of_lots->result() as $row)
	{
		//print_r($row);
		//echo "<br/>";
		//echo $row->lot_no;
		//echo $row->t_code;
		//echo $row->floor;
		//echo $row->area_ft;
	}
 


?>
