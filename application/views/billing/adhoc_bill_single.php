<br/>
<h2>Ad - Hoc Billing (single)</h2>
<hr width="250px" align="left"/>
<?=form_open("")?>
<div class="body-content">
	<div class='meter-reading'>
		<span class='span4label'>Tenant / Owner</span>
		<?=form_dropdown('',array('',''))?>
		<?=form_input()?>
		<br/>
		<span class='span4label'>Agreement</span>
		<?=form_dropdown('',array('','27'))?>
		<br/>
		<span class="span4label">Lot No. - From</span>
		<?=form_dropdown('',array('','27'))?>
		<span class="span4label">To</span>
		<?=form_dropdown('',array('','BlockA'))?>
	</div>
	<hr/>
	<div class='meter-reading'>
		<span class="span4label">Invoice Date</span>
		<?=form_input()?>
		<span class="span4label">Manual Inv. No</span>
		<?=form_input()?>
	</div>
	<hr/>

	<div class='meter-reading'>
		<span class='span4label'>Bill Type</span>
		<?=form_dropdown('',array('','27'))?>
		<?=form_input()?>
		<br/>

		<span class='span4label'>Duration</span>
		<?=form_input()?>
		<?=form_input()?>
		<br/>
		
		<span class='span4label'>Rate</span>
		<?=form_input()?>
		<?=form_dropdown('',array('','27'))?>
		<span class='span4label'>Amount</span>
		<?=form_input()?>
		
		<br/>
		<span class='span4label'>Recoverable Reference</span>
		<?=form_input()?>
		<br/>
		<span class='span4label'>Tax Rate</span>
		<?=form_input()?>
		<?=form_dropdown('',array('','27'))?>
		<span class='span4label'>Amount</span>
		<?=form_input()?>
		<br/>
		Details<br/>
		<?=form_textarea(array('name'=>'detailsz','rows'=>'3','cols'=>'49'))?>
		
		<span class='span4label'>Total Amount</span>
		<?=form_input()?>
	</div>
	
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		echo form_button('search','Search');
		echo form_button('enter','Enter');
		
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>

</div>

<?=form_close()?>
