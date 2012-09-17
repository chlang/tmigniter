<style type="text/css">
	.span4label220px{
		display: inline-block; width:220px; text-align:right; margin-right:12px;
	}
	.cr-legend-with-border{
		
	}
</style>

<br/>
<h2>Auto Billing</h2>
<hr width="250px" align="left"/>
<?=form_open("")?>
<div class="body-content">
	<div style="min-height:200px;">
		<span class='span4label220px'>Last auto - bill:</span>
		<?=form_input()?>
		<br/>
		<br/>
		<div class='cr-div-with-border'>
			<span class='span4label220px'>Auto - bill to be carried out for:</span>
			<?=form_input()?>
			<br/>
			<span class='span4label220px'>Invoices will be dated from:</span>
			<?=form_input()?>
		</div>
	</div>
	
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		echo form_button('enter','Enter');
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>
</div>
<?=form_close()?>
