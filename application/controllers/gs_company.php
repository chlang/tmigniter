<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gs_company extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		$this->company();
	}
	
	function company(){
		$this->load->view('general_setup/gs_company',array('title'=>"Company - General Setup"));
	}
	
	function handle_submit(){
		echo "submit";
	}
	
}//main class
?>
