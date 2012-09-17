<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tenancy extends CI_Controller{
	var $username = '';
	var $domach = '';
	
	function __construct(){
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('membership_model');
		$this->load->model('tenant_owner_class');
		$this->load->model('tenant_model');
		$this->load->model('dep_type_model');

		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$this->load->library('my_security_matrix');
		
		$this->username = $this->session->userdata('username');
		$this->domach = $this->membership_model->select_tenant_access('tenant_owner',$this->username);
	}

	function prepare_param(){
		//Prepare column
		$tenant_owner = "tenant_owner";
		$utility = "utility";
		$billing = "billing";
		$cc_letter = "cc_letter";

		$this->load->model('membership_model');
		$username=$this->session->userdata('username');

	//Prepare access for each modules
	//Utility, Tenant/Owner, Billing and CC_Letter
		$tenant_owner_access = $this->membership_model->select_tenant_access($tenant_owner,$username);
		$utility_access = $this->membership_model->select_tenant_access($utility,$username);
		$billing_access = $this->membership_model->select_tenant_access($billing,$username);
		$cc_letter_access = $this->membership_model->select_tenant_access($cc_letter,$username);
		
	//Prepare array of access
		$security_matrix = array('m1'=>$tenant_owner_access,
										  'm2'=>$utility_access,
										  'm3'=>$billing_access,
										  'm4'=>$cc_letter_access);
		return $security_matrix;
	}

	function index(){
		$sx = $this->prepare_param();
		$this->load->view('inc/header');
		$this->load->view('tenancy',$sx);
		$this->load->view('inc/footer');
	}
        

        //DONE!!!
	function tenant_owner_type(){
		//***** Test param ******
		//print_r ($this->tenant_owner_class->select_t_type());
		$a = array ('t_type_list'=>$this->tenant_owner_class->select_t_type());
		$this ->load->view('inc/header');
		if($this->domach->tenant_owner[0])
			//$this->load->view('inc/template',array('body'=>'tenant_owner/type'));
			$this->load->view('tenant_owner/type_list',$a);
		else $this->membership_model->no_direct_access();
		$this->load->view('inc/footer');
	}

	function add_type_form(){
		if($this->domach->tenant_owner[0]){

			 if(!isset($_GET['abac']))
				  $this->load->view('inc/template',array('body'=>'tenant_owner/type'));
			 else {
				  $result = $this->tenant_owner_class->select_one_t_type($_GET['abac']);
				  $result = $result->row();
				  //print_r($result);
				  $a = array('type'=>'2','t_type_edit'=>$result);
				  $this->load->view('inc/template',array('body'=>'tenant_owner/type','a'=>$a));
			 }
		}
		else $this->membership_model->no_direct_access();
	}

/* Start >>> B. Tenant/Owner Particulars */
	function tenant_owner_particulars(){

        if($this->domach->tenant_owner[1]){   //check if user has access
             $title = "Tenant/ Owner Particulars";             
             //$this->load->view('tenant_owner/particulars')
            $this->load->view('tenant_owner/listing/particular_list',array('title'=>$title));
            
        }//end if user has access


//  ************ Phase 1 ********************
//		if($this->domach->tenant_owner[1])
//			$this->load->view('inc/template',array('body'=>'tenant_owner/particulars'));
        else $this->membership_model->no_direct_access();
	}

      function process_particular(){
          if(isset($_POST['type'])){ $type = $_POST['type'];}
          
          switch($type){
              
            case 'delete':
                if($this->tenant_model->delete($_POST['t_code']))
                    echo "Tenants Deleted";
                else echo "Delete failed!";
                break;                                      

          }//end switch
      }//end process_particular

    function new_particular(){
    /* Need to add more rule to form validation application/config/form_validation.php */
        if ($this->form_validation->run() == FALSE){
            $params = array('title'=>"Tenant/ Owner Particulars"
                ,'type'=>$this->tenant_owner_class->select_t_type());
            $this->load->view('tenant_owner/particular/particular_new',$params);
        }
        else{         
            $data = array('address1'=>$this->input->post('Address'),
                        't_code'=>$this->input->post('Code'),
                        't_type'=>$this->input->post('Type'),
                        'phone1'=>$this->input->post('Phone'),
                        'name'=>$this->input->post('Name'),
                        'fax1'=>$this->input->post('Fax'),
                        'contact1'=>$this->input->post('Contact'),
                        'cont1_posn'=>$this->input->post('Position')
                    );
            $this->tenant_model->insert($data);
            redirect('tenancy/tenant_owner_particulars');
        }
    }//end new_particular()

    function edit_particular(){
        if(isset($_POST['tenant_code']))
            $t_code = $_POST['tenant_code'];
        else {
            $t_code = $_POST['Code'];
        }
        if($this->form_validation->run()==FALSE){
            
            $tenant = $this->tenant_model->select_particular($t_code);
            $params = array('title'=>"Tenant/Owner particulars",
                'type'=>$this->tenant_owner_class->select_t_type(),
                't_particu'=>$tenant);
            $this->load->view('tenant_owner/particular/particular_edit',$params);
        }
        else {
            
            $data = array('address1'=>$this->input->post('Address'),
                        't_type'=>$this->input->post('Type'),
                        'phone1'=>$this->input->post('Phone'),
                        'name'=>$this->input->post('Name'),
                        'fax1'=>$this->input->post('Fax'),
                        'contact1'=>$this->input->post('Contact'),
                        'cont1_posn'=>$this->input->post('Position')
                    );
            $this->tenant_model->update($data,$this->input->post('Code'));
            redirect('tenancy/tenant_owner_particulars');
            exit ();
        }
        
    }//end edit_particular

     
/* End >>> B. Tenant/Owner Particulars */

 /* Start >>> C. Tenant/Owner Agreement */
    function tenant_owner_agreement(){
        if($this->domach->tenant_owner[2]){
            $title = "Tenant/ Owner Agreement";
            $this->load->view('tenant_owner/listing/agreement_list',array('title'=>$title));
        }
        //Phase 1
            //$this->load->view('inc/template',array('body'=>'tenant_owner/agreement'));
        else $this->membership_model->no_direct_access();
    }

    function new_agreement(){
        if($this->domach->tenant_owner[2]){
			
            if ($this->form_validation->run() == FALSE){
                $data = array('title'=>"Tenant/ Owner Agreement",
                            't_o'=>$this->tenant_model->select_all()
                        );
                $this->load->view('tenant_owner/agreement/agreement_new',$data);
            }
            else{
                
            }
        }
        else $this->membership_model->no_direct_access();
    }
/* End >>> C Tenant/Owner Agreement */
	function tenant_owner_lot_details(){
		if($this->domach->tenant_owner[3])
			$this->load->view('inc/template', array('body'=>'tenant_owner/lot_details'));	
		else $this->membership_model->no_direct_access();
	}
	
	function end_of_tenant_ownership(){
		if($this->domach->tenant_owner[4])
			$this->load->view('inc/template',array('body'=>'tenant_owner/end_of_tenant_ownership'));
		else $this->membership_model->no_direct_access();
	}
	
	function scheduled_meetings(){
		if($this->domach->tenant_owner[5])
			$this->load->view('inc/template',array('body'=>'tenant_owner/scheduled_meetings'));
		else $this->membership_model->no_direct_access();
	}
	
	function g_l_interface(){
		if($this->domach->tenant_owner[6])
			$this->load->view('inc/template',array('body'=>'tenant_owner/GL_interface'));
		else $this->membership_model->no_direct_access();
	}
	
	function invoice_type(){
		if($this->domach->tenant_owner[7])
			$this->load->view('inc/template',array('body'=>'tenant_owner/invoice_type'));
		else $this->membership_model->no_direct_access();
	}
	
	/*		Mohammad Begin			*/
	function deposit_type($id=-1){
		if($this->domach->tenant_owner[8]){
			if($id==-1){
				$a = array ('a'=> $this ->dep_type_model->select_all_dep()->result(),
					'modifiable'=>$this->my_security_matrix->canModify($this->domach->tenant_owner[8])
				);
			//print_r ($a);
			$this-> load-> view ('tenant_owner/dep_type/Mdata_view',$a);
			}
			else{
				$a = array('a'=>$this ->dep_type_model->select_all_dep()->result(),
					'one_dep'=>$this->dep_type_model->select_dep_id($id)->row(),
					'modifiable'=>$this->my_security_matrix->canModify($this->domach->tenant_owner[8])
					);
				$this->load->view('tenant_owner/dep_type/Mdata_view',$a);
			}
		}
		else $this->membership_model->no_direct_access();
	}

	function add_new_dept_type(){
		switch($_POST['sub_btn']){
			case 'Add':
				$dep_type = $this-> input -> post('dep_code');
				$desc = $this-> input -> post('dep_description');
				//change for test: desc to des
				/*Unknown column 'des' in 'field list'

				INSERT INTO `dep_type` (`dep_type`, `des`) VALUES ('qqw', 'qwew')

				Filename: /var/www/tmigniter/models/dep_type_model.php

				Line Number: 30*/
				// 'dep_type' and 'des' are the field name in the database
				$data = array('dep_type'=>$dep_type, 'desc'=>$desc);
				
				if($this-> dep_type_model -> insert_new_dep($data))
					$this->deposit_type();
				 else echo "failed";
				break;
			case 'Edit':
				//$id = $this->input->post('dt_radio');
				$id = $_POST['dt_radio'];
				$this->deposit_type($id);
    
				break;
			case 'Delete':
				$id = $_POST ['dt_radio'];
				$this->dep_type_model ->delete_dep($id);
				$this-> deposit_type($id=-1);
				break;
				
			case 'Update':
				$id = $_POST ['id'];
				//prepare the $data and pass to 
				$data = array('dep_type'=>$_POST ['dep_code'], 'desc'=>$_POST ['dep_description']);
				$this->dep_type_model ->update_dep ($data,$id);
				//refresh with id=-1
				redirect('tenancy/deposit_type');
				break;
				
		}

	}
	/*Mohammad END*/
	
	function tenant_owner_status(){
		if($this->domach->tenant_owner[9])
			$this->load->view('inc/template',array('body'=>'tenant_owner/tenant_owner_status'));
		else $this->membership_model->no_direct_access();
	}
	
	function tax_master(){
		if($this->domach->tenant_owner[10])
			$this->load->view('inc/template',array('body'=>'tenant_owner/tax_master'));
		else $this->membership_model->no_direct_access();
	}
	
	function blr_interest(){
		if($this->domach->tenant_owner[11])
			echo 'NOT AVAILABLE';
		else $this->membership_model->no_direct_access();
		
	}
	
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true){
			$this->load->view('login');
		}
	}
	
	
	/* * * * * * * * * * * * * * * * * * * * * * *
       *           Action
       * * * * * * * * * * * * * * * * * * * * * * * 
       */
        
    function edit_t_type(){
        //Option: 1 > Delete and 2 > Edit

        $option = $_POST['type'];
        $t_type = $_POST['t_type'];

        switch($option){
            case '1': //DELETE delete_t_type
                $this->tenant_owner_class->delete_t_type($t_type);
                
                break;
            case '2': //EDIT
                break;
            default:
                echo "No request";
        }//End Switch
        
    }
    
    function addType(){
//        $this->load->helper(array('form', 'url'));
//
//        $this->load->library('form_validation');

        $this->form_validation->set_rules('code', 'Code', 'required|matches_pattern[?###]');
        $this->form_validation->set_rules('tenant_owner','Tenant or Owner','required');
        $this->form_validation->set_rules('Description', 'Description', 'required');
        $this->form_validation->set_rules('CC_Letter', 'Credit Control Letter', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('inc/template',array('body'=>'tenant_owner/type'));
            //$this->load->view('myform');
        }
        else{
            $this->tenant_owner_class->add_type();
            $this->tenant_owner_type();
        }

    }//end addType

    function editType(){
//        $this->load->helper(array('form', 'url'));
//        $this->load->library('form_validation');


        $this->form_validation->set_rules('tenant_owner','Tenant or Owner','required');
        $this->form_validation->set_rules('Description', 'Description', 'required');
        $this->form_validation->set_rules('CC_Letter', 'Credit Control Letter', 'required');

        if ($this->form_validation->run() == FALSE){
            //echo "wrong input";
                    $cr_reload_uri = "tenancy/add_type_form?abac=".$this->input->post('code_edit');
            redirect($cr_reload_uri);
            //$this->load->view('myform');
        }
        else{
            $this->tenant_owner_class->update_t_type($this->input->post('code_edit'));
            $this-> tenant_owner_type();
            //$this->tenant_owner_type();
            //echo "Editable";
        }

    }//end editType
	
	
	
}
