<?php

class Utilities extends CI_Controller{

	var $username = '';
	var $utility = '';
	

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('utilities_class');
		$this->load->model('membership_model');
		
		$this->load->library('my_security_matrix');

		$this->username = $this->session->userdata('username');
		$this->utility = $this->membership_model->select_tenant_access('utility',$this->username);
	}

	function index(){
		//showing same content to tenancy controller. index 
		$this->load->view('inc/header');
		$this->load->view('tenancy');
		$this->load->view('inc/footer');
	}

//Load view file from utilities folder and follow inc/template.php
	function table_of_charges(){
	
		if($this->my_security_matrix->hasAccess($this->utility->utility[0]))
			$this->load->view('inc/template',array('body'=>'utilities/table_of_charges'));
		else{ 
			echo "No direct access here.";
			//print_r ($this->utility);
			//echo $this->utility->utility[0];
		}
	}
	/*		Meter type module		*/
	function meter_type(){
		if($this->my_security_matrix->hasAccess($this->utility->utility[1])){
			$result = $this->utilities_class->select_meter_type($b=-1);
			//print_r ($result);
			$canModify = $this->my_security_matrix->canModify($this->utility->utility[1]);
			$a = array ('meter_type'=>$result,'modifiable'=>$canModify);
			$this->load->view('inc/template',array('body'=>'utilities/meter_type','a'=>$a));
		}
		else echo "No direct access here.";
	}
	
	function get_meter_type(){
		$id = $_POST['id'];
		$type = $_POST['type'];
		switch($type){
			case 'retrieve':
				 $result = $this->utilities_class->select_meter_type($id);
				 $result = $result->row();
				 echo json_encode ($result);
				 break;
			case 'update':                
				 $this->utilities_class->update_mtr_type($id);                
				 break;
			case 'insert':
				 $data = array('mtr_type'=>  $this->input->post('mtr_type'),
							'desc'=>$this->input->post('desc'));
				 $this->utilities_class->insert_mtr_type($data);
				 //redirect('utilities/meter_type');
				 break;
			case 'delete':
				 //$id =1;
				 echo $this->utilities_class->delete($id);
				 break;
		}
	}
	/*		END Meter type module		*/


	function meter_particulars(){
		if($this->my_security_matrix->hasAccess($this->utility->utility[2])){
			
			$canModify = $this->my_security_matrix->canModify($this->utility->utility[2]);
			
			$this->load->view('inc/template',array('body'=>'utilities/meter_particulars'));
		}
		else echo "No direct access here.";
	}
	
	function meter_reading(){
		if($this->my_security_matrix->hasAccess($this->utility->utility[3]))
			$this->load->view('inc/template',array('body'=>'utilities/meter_reading'));
		else echo "No direct access here.";
	}
	
	function meter_reading_new(){
		if($this->mysecurity_matrix->hasAccess($this->utility->utility[4]))
			$this->load->view('inc/template',array('body'=>'utilities/meter_reading_new'));
		else echo "No direct access here.";
	}
	
	function rate_changing(){
		if($this->my_security_matrix->hasAccess($this->utility->utility[5]))
			$this->load->view('inc/template',array('body'=>'utilities/rate_changing'));
		else echo "No direct access here.";
	}

	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true){
			 $this->load->view('login');
		}
	}
    
    /* ************ ACTION ************/
    

}
?>
