<?php

class Billing extends CI_Controller{
	
	var $username = '';
	var $billingz = '';
	
	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('membership_model');
		$this->username = $this->session->userdata('username');
		$this->billingz = $this->membership_model->select_tenant_access('billing',$this->username);
	}

	function index(){
		$this->load->view('inc/header');
		$this->load->view('tenancy');
		$this->load->view('inc/footer');
	}
	
	function adhoc_bill_single(){
		//print_r($this->billingz);
		if($this->billingz->billing[0])
			$this->load->view('inc/template',array('body'=>'billing/adhoc_bill_single'));
		else echo "No direct access here.";
	}
	
	function adhoc_bill(){
		if($this->billingz->billing[1])
			$this->load->view('inc/template',array('body'=>'billing/adhoc_bill'));
		else echo "No direct access here.";
	}
	
	function adhoc_autobill(){
		if($this->billingz->billing[2])
			$this->load->view('inc/template',array('body'=>'billing/adhoc_autobill'));
		else echo "No direct access here.";
	}
	
	function official_receipt(){
		if($this->billingz->billing[3])
			$this->load->view('inc/template',array('body'=>'billing/official_receipt'));
		else echo "No direct access here.";
	}
	
	function or_allocation(){
		if($this->billingz->billing[4])
			$this->load->view('inc/template',array('body'=>'billing/or_allocation'));
		else echo "No direct access here.";
	}
	
	function deposit_allocation(){
		if($this->billingz->billing[5])
			$this->load->view('inc/template',array('body'=>'billing/deposit_allocation'));
		else echo "No direct access here.";
	}
	
	function refund(){
		if($this->billingz->billing[6])
			$this->load->view('inc/template',array('body'=>'billing/refund'));
		else echo "No direct access here.";
	}
	
	function cancelled_or(){
		if($this->billingz->billing[7])
			$this->load->view('inc/template',array('body'=>'billing/cancelled_or'));
		else echo "No direct access here.";
	}
	function monthend_statement_acc(){
		if($this->billingz->billing[8])
			$this->load->view('inc/template',array('body'=>'billing/monthend_statement_acc'));
		else echo "No direct access here.";
	}
	
	function interest_charging(){
		if($this->billingz->billing[9])
			$this->load->view('inc/template',array('body'=>'billing/interest_charging'));
		else echo "No direct access here.";
	}
	
	function debit_note(){
		if($this->billingz->billing[10])
			$this->load->view('inc/template',array('body'=>'billing/debit_note'));
		else echo "No direct access here.";
	}
	
	function credit_note(){
		if($this->billingz->billing[11])
			$this->load->view('inc/template',array('body'=>'billing/credit_note'));
		else echo "No direct access here.";
	}
	
	function c_n_allocation(){
		if($this->billingz->billing[12])
			$this->load->view('inc/template',array('body'=>'billing/c_n_allocation'));
		else echo "No direct access here.";
	}
	
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true){
			$this->load->view('login');
		}
	}
}
