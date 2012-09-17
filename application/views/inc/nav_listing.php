<div class = "cr-navigation">
	<div  style='margin-left:200px; padding-top: 25px; float:left;'>
		<h3><?=$title?></h3>
	</div>

	<div style='margin-left:200px; padding-top: 25px; float:right;'>
		<a href='<?php echo base_url()?>index.php/<?php echo $this->uri->segment(1)?>' title='Back home'>Home</a>
		<a class='cr-nav-edit' style='cursor:pointer;'>Edit</a>
		<a class='cr-nav-delete' style='cursor:pointer;'>Delete</a>
		<a class='cr-nav-new' style='cursor:pointer;'>New</a>
	</div>
</div>

