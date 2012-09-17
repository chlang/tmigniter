<?php 
	$textfield90px = array('style'=>'width:120px');
	$textfield313px = array('style'=>'width:313px');
?>
<br/>
<h2>Tenant/Owner Lots Details</h2>
<hr width="250px" align="left"/>

<div class="body-content">
<?=form_open("")?>
	<div>
		Tenant/Owner
		<?=form_dropdown('',array('','A-10-11'))?>
		Agree No.
		<?=form_dropdown('',array('','A-10-11'))?>
		Lot No.
		<?=form_dropdown('',array('','A-10-11'))?>
		Area(sqft)
		<?=form_input($textfield90px)?>
		<hr/>
	</div>
	<div>
		<span>1. Rent</span><br/>
		<span class="span4label"><?=form_label('Free From','free_from')?></span>
		<?=form_input($textfield90px)?>
		<span class="span4label"><?=form_label('To','to')?></span>
		<?=form_input($textfield90px)?>
		<span style="text-align:right; width:150px;display: inline-block; float:right;">Inv. Group</span>
		<br style="clear:both;"/>
		<span class="span4label"><?=form_label('Rate:')?></span>
		<?=form_input($textfield90px)?>
		<span class="span4label"><?=form_label('Calc. Amt:')?></span>
		<?=form_input($textfield90px)?>
		<span style="display:inline-block; width:50px; text-align:right;">Amt:</span>
		<?=form_input($textfield90px)?> <?=form_dropdown('',array('','0'))?> <br/>
		
		<span>2. Service charge</span><br/>
		<span class="span4label"><?=form_label('Rate:')?></span>
		<?=form_input($textfield90px)?>
		<span class="span4label"><?=form_label('Calc. Amt:')?></span>
		<?=form_input($textfield90px)?>
		<span style="display:inline-block; width:50px; text-align:right;">Amt:</span>
		<?=form_input($textfield90px)?> <?=form_dropdown('',array('','0'))?><br/>
		
		<span style="display:inline-block;width:90px;padding:5px 7px 5px 1px; ">3. Invoice type </span>
		<?=form_dropdown('',array('','0'))?><?=form_input($textfield313px)?>
		<span style="display:inline-block; width:50px; text-align:right;">Every</span>
		<?=form_dropdown('',array('','0'))?>Mth.
		<br/>
		
		<span class="span4label"><?=form_label('Rate:')?></span>
		<?=form_input($textfield90px)?>
		<span class="span4label"><?=form_label('Calc. Amt:')?></span>
		<?=form_input($textfield90px)?>
		<span style="display:inline-block; width:50px; text-align:right;">Amt:</span>
		<?=form_input($textfield90px)?> <?=form_dropdown('',array('','0'))?><br/>
		
		<span style="display:inline-block;width:90px;padding:5px 7px 5px 1px; ">4. Invoice type </span>
		<?=form_dropdown('',array('','0'))?><?=form_input($textfield313px)?>
		<span style="display:inline-block; width:50px; text-align:right;">Every</span>
		<?=form_dropdown('',array('','0'))?>Mth.
		<br/>
		
		<span class="span4label"><?=form_label('Rate:')?></span>
		<?=form_input($textfield90px)?>
		<span class="span4label"><?=form_label('Calc. Amt:')?></span>
		<?=form_input($textfield90px)?>
		<span style="display:inline-block; width:50px; text-align:right;">Amt:</span>
		<?=form_input($textfield90px)?> <?=form_dropdown('',array('','0'))?><br/>
		
		<span style="display:inline-block;width:90px;padding:5px 7px 5px 1px; ">5. Invoice type </span>
		<?=form_dropdown('',array('','0'))?><?=form_input($textfield313px)?>
		<span style="display:inline-block; width:50px; text-align:right;">Every</span>
		<?=form_dropdown('',array('','0'))?>Mth.
		<br/>
		
		<span class="span4label"><?=form_label('Rate:')?></span>
		<?=form_input($textfield90px)?>
		<span class="span4label"><?=form_label('Calc. Amt:')?></span>
		<?=form_input($textfield90px)?>
		<span style="display:inline-block; width:50px; text-align:right;">Amt:</span>
		<?=form_input($textfield90px)?> <?=form_dropdown('',array('','0'))?><br/>
		
	</div>
	<div class="group-button-here" style="text-align: right;">
		<span style="float:right;"><hr style="width:250px;"/></span>
		<br style="clear:both;"/>
	<?php 
		echo form_button('enter','Enter'); 
		echo form_button('amend','Amend');
		echo form_button('delete','Delete');
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
	</div>
<?=form_close();?>
</div>

