<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datatable extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		//$this->is_logged_in();
		$this->load->model('report_analysis');
	}
	
	public function index()
	{
		$list_of_lots = array('list_of_lots'=> $this->report_analysis->list_of_lots());
		$this->load->view('demo',$list_of_lots);
		//print_r($list_of_lots->row());
	}
}
