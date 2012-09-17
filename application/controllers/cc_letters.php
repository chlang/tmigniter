<?php

class Cc_letters extends CI_Controller{
	
	var $username = '';
	var $cc_letter = '';
	
	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		$this->load->library('table');
		$this->load->model('membership_model');
		$this->username = $this->session->userdata('username');
		$this->cc_letter = $this->membership_model->select_tenant_access('cc_letter',$this->username);
	}

	function index(){
		$this->load->view('inc/header');
		$this->load->view('tenancy');
		$this->load->view('inc/footer');
	}

	function credit_control_settings(){
		//print_r($this->cc_letter);
		if ($this->cc_letter->cc_letter[0])
			$this->load->view('inc/template',array('body'=>'cc_letters/credit_control_settings'));
		else $this->membership_model->no_direct_access();
	}
	function gen_cc_letters(){
		if ($this->cc_letter->cc_letter[1])
			$this->load->view('inc/template',array('body'=>'cc_letters/gen_cc_letters'));
		else $this->membership_model->no_direct_access();
	}
	
	function cn_allocation_multi(){
		if ($this->cc_letter->cc_letter[2])
			$this->load->view('inc/template',array('body'=>'cc_letters/cn_allocation_multi'));
		else $this->membership_model->no_direct_access();
	}
	function credit_note_new(){
		if ($this->cc_letter->cc_letter[3])
			$this->load->view('inc/template',array('body'=>'cc_letters/credit_note_new'));
		else $this->membership_model->no_direct_access();
	}
	
	function adhoc_single_billing(){
		if ($this->cc_letter->cc_letter[4])
			$this->load->view('inc/template',array('body'=>'cc_letters/adhoc_single_billing'));
		else $this->membership_model->no_direct_access();
	}
	
	function reminder_letter_setting(){
		if ($this->cc_letter->cc_letter[5])
			$this->load->view('inc/template',array('body'=>'cc_letters/reminder_letter_setting'));
		else $this->membership_model->no_direct_access();
	}

	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true){
			$this->load->view('login');
		}
	}
}
