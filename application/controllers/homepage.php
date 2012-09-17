<?php

class Homepage extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('membership_model');
		$this->is_logged_in();
	}

	function index(){
		$a = $this->prepare_param();
		$a = array('param'=>$a);
		$this->load->view('inc/header');
		$this->load->view("frontpage",$a);
		$this->load->view('inc/footer');
	}

	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true){
			$this->load->view('login');
		}
	}
	
	function prepare_param(){
		//Prepare column select_access_level
		$a = $this->membership_model->select_access_level();
		$b = $this->membership_model->total_num_users();
		
		//print_r($b->row_array());
		
		//foreach ($b->result() as $row)
		//{echo $row->username;}
		//print_r($b->num_rows);
		$a = array('a'=>$a,'b'=>$b);
		return $a;
	}

    function process_security_matrix(){
       //assign the data recieved from POST
        $task = $this->input->post('task');
        $id = $this->input->post('id');

       //Perform tasks according to request from POST
        switch($task){
            case "retrieve":
                $data = $this->membership_model->get_access_level($id);
                $data = array('fullname'=>$data->fullname,
                    'RETM'=>$data->access_level[0],
                    'READ'=>$data->access_level[1],
                    'AD'=>$data->access_level[2],
                    'TM'=>$data->access_level[3],
                    'GS'=>$data->access_level[4],
                    'UT'=>$data->access_level[5],
                    'id'=>$data->id);
                echo json_encode($data);
                break;
            case "update":
                $a = $this->input->post('access_level');
                $data = array('access_level'=>$a);
                if ($this->membership_model->update_access_level($id,$data))
                    echo true;
                break;
        }//end switch


    }//end access_level

    function process_grouping_matrix(){
        //assign the data recieved from POST
        $task = $this->input->post('task');
        $id = $this->input->post('id');

        switch($task){
            case "retrieve":
                $user = $this->membership_model->get_access_level($id);
                $data = array('id'=>$user->id,
                    'fullname'=>$user->fullname,
                    'TO'=>$user->tenant_owner,
                    'utility'=>$user->utility,
                    'billing'=>$user->billing,
                    'cc_letter'=>$user->cc_letter);
                echo json_encode($data);
                break;
            case "update":
                $data = array('tenant_owner'=>$this->input->post('TO'),
                        'utility'=>$this->input->post('utility'),
                        'billing'=>$this->input->post('billing'),
                        'cc_letter'=>$this->input->post('cc_letter'));
                if ($this->membership_model->update_access_level($id,$data))
                    echo true;
                break;
        }//end switch
    }//end process_grouping_matrix function
	
}
?>
