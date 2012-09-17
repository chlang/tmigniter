<?php

class Reporting extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('report_analysis');
		$this->load->model('report_listing');
		
		
		//$this->load->model('membership_model');
		//$this->username = $this->session->userdata('username');
	}

	function index(){
		$this->load->view('inc/template',array('body'=>'reports/main'));
	}
	
//*******************    ANALYSIS      ****************************

	function company_list(){
		$this->load->view('inc/template',array('body'=>'reports/com_listing'));
	}
	
	function list_of_lots(){
		$list_of_lots = array('list_of_lots'=> $this->report_analysis->list_of_lots());
		$this->load->view('reports/analysis/list_of_lot',$list_of_lots);
		//$this->load->view('inc/template',array('body'=>'reports/analysis/list_of_lot'));
	}
	
	function occu_analysis(){
		$this->load->view('inc/template',array('body'=>'reports/analysis/occupancy_analysis'));
	}
	
	function tenant_owner_list(){
		$this->load->view('testing/select_single_row');
	}
	
	//************************** LISTING ***********************
	function tenant_listing(){
		$tenant = array('tenant'=> $this->report_listing->tenant_listing());
		$this->load->view('reports/listing/tenant_listing',$tenant);
		//tenant_listing()
		//print_r($tenant);
	}
	
}

?>
