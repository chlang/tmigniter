

<?php $this->load->view('inc/header');?>
<script type="text/javascript">
	$(function(){
		//$('#cr-div_dep_type').hide();
		/*
		//when user click on the add button
		$('#btn_add_dep_type').live('click',function(){
			$('#div_table_dep_type').hide();
			$('#cr-div_dep_type').show();
		});
		
		//When user click on the cancel button on form
		$('#btn_cancel_dep_type').live('click',function(){
			$('#div_table_dep_type').show();
			$('#cr-div_dep_type').hide();
		});
		
		//When user click on the edit button 
		$('#sub_btn_edit').live('click',function(){
			$('#div_table_dep_type').hide();
			$('#cr-div_dep_type').show();
		});
		
		*/
		//make the edit button disabled if the user didnt select anything
		$('#sub_btn_edit').attr('disabled',true);
		$('#sub_btn_delete').attr('disabled',true);
		$('.dt_radio').click(function(){
			$('#sub_btn_edit').attr('disabled',false);
			$('#sub_btn_delete').attr('disabled',false);
		});
		
	});
</script>
<h1> Deposit Management</h1>
<hr>
<div style="float: left; margin-right:20px;" id="cr-div_dep_type" style='display:none;'>
<table>
<form action="add_new_dept_type" method="POST" >
<!-- for edit to see it in the view when we click the edit and also for delete but
we do not echo anything/-->
	<input type="hidden" name='id' value="<?php if(isset($one_dep))echo $one_dep->id;?>"/>
	<p>
		Code :
		<input type="text" name="dep_code" value="<?php if(isset($one_dep)) echo $one_dep->dep_type; ?>"/>
	<p>
	<p>Description :</p>
	<p>
	<textarea  name="dep_description" rows="6" cols="60"><?php if(isset($one_dep)) echo $one_dep->desc; ?></textarea>
	</p>
	<?php
		if(isset($one_dep)){
			$disabled = "disabled='true'";
		}
		else $disabled = '';
	?>
	
	<?php if($modifiable): ?>
	<input <?php echo $disabled; ?> type="submit" name="sub_btn" value="Add"/>
	<input type="submit" name="sub_btn" value="Update"/>
	<input type='reset' id='btn_cancel_dep_type' value='Reset'/>
	<?php endif; ?>

</form>
</table>
</div>
<br style='clear:both;'/>
<div id='div_table_dep_type'>
	 <table class='hor-minimalist-b'>
		<form action="add_new_dept_type" method="POST">
			<thead>
				<tr>
					<th >ID</th>
					<th >Deposite Type</th>
					<th >Description</th>
					<th >Options</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			foreach($a as $row){
				echo "<tr>";
					echo "<td>".$row->id."</td>";
					echo "<td>".$row->dep_type."</td>";
					echo "<td>".$row->desc."</td>";
					echo "<td>"."<input type='radio' name='dt_radio' class='dt_radio' value='$row->id'/>"."</td>";
				echo "</tr>";
			}
			?>
			</tbody>
			<?php if($modifiable): ?>
			<div style='float: right;'>
				<input id="sub_btn_edit" type="submit" name="sub_btn" value="Edit"/>
				<input id='sub_btn_delete' type="submit" name="sub_btn" value="Delete"/>
			</div>
			<?php endif; ?>
			<br style='clear:both;'/>
		</form>
	 </table>
</div>

<br style="clear: both;"/>


<?php $this->load->view('inc/footer');
//print_r ($deposi);
//print_r($one_dep);

?>
