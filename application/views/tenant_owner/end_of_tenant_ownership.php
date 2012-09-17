<br/>
<h2> End of Tenancy / Ownership</h2>
<hr style="width:250px; text-align: left; float: left;" />
<br style="clear:both;"/>
<div id="end-of-tenancy-ownership">
	<?=form_open("")?>
	<div>
		<span class="span4label">Type</span>
		<select name="type">
			<option value="Cancellation">Cancellation</option>
		</select>
		<br style="clear:both;" />
		<span class="span4label">Tenant/Owner </span>
		<span>
			<select name="tenantOwner">
				<option>Te.Owner</option>
			</select>
		</span>
	</div>
	<div>
		<hr style="clear:both;" />
		<span style="padding-left: 350px;">(Old) Agreement</span>
		<br style="clear:both;"/>
		
		<span class="span4label">Agreement No. </span>
		<select name="agreementNo">
			<option>Agreement No</option>
		</select>
		
		<br style="clear:both;"/>
		<span class="span4label">Lease period</span>
		<span><input type="text" /> - <input type="text"/></span>
		<br style="clear:both;"/>
		<span class="span4label">Cancellation</span>
		<span><input type="text"/></span>
	</div>
	
	<div>
		<hr style="clear:both;" />
		<span style="padding-left: 350px;">(New) Agreement</span>
		<br style="clear:both;" />
		<span class="span4label">Agreement No </span>
		<span><input type="text"/></span>
		<br style="clear:both;" />
		<span class="span4label">Agreement date </span>
		<span><input type="text"/></span>
		<br style="clear:both;" />
		<span class="span4label">Commences</span>
		<span><input type="text"/></span>
		<br style="clear:both;"/>
		<span class="span4label">Expires</span>
		<span><input type="text"/></span>
	</div>
	
	<div class="group-button-here" style="padding-left: 200px; margin-top:20px;">
	<?php 
		echo form_button('enter','Enter'); 
		echo form_button('ok','OK');
		echo form_button('quit','Quit');
	?>
		<?php echo form_label('&nbsp;'),
		form_submit('submit', 'Submit')?>
	</div>
	
	<!--form close -->
	
	<?=form_close();?>
</div>
