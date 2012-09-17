<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');

class TestController extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('my_security_matrix');
	}
	function index(){
		$this->my_security_matrix->hasAccess($a=2);
		
	}
	
	
	
}
?>
