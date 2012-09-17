<?php

class Login extends CI_Controller {

	function index(){
		$this->load->view('login');
	}

	function validate_credentials(){
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		
		if($query){ // if the user's credentials validated...
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('homepage');
		}
		else $this->index(); // incorrect username or password
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}
