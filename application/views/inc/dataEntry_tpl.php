<?php
	$this->load->view('inc/header');
	$this->load->view('inc/nav_inc');//it's list or form.
	//$this->load->view($body);
?>
<div style="margin:10px;">
<?php
    $this->load->view($body);
?>
</div>	
	
<?php
	$this->load->view('inc/footer');
?>
