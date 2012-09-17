<?php

class Membership_model extends CI_Model {

	function validate(){
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('membership');

		if($query->num_rows == 1){return true;}
	}

	function create_member(){
		$new_member_insert_data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email_address' => $this->input->post('email_address'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$insert = $this->db->insert('membership', $new_member_insert_data);
		return $insert;
	}//end create_member

	function select_tenant_access($b,$a){
		$query = "SELECT `$b` FROM `membership` WHERE `username`=?";
		$query = $this->db->query($query,array($a));

		if ($query->num_rows() > 0){
			$row = $query->row(); 
			return $row;
		}
	}//end select_tenant_access

	function select_access_level(){
		$query = "SELECT `access_level` FROM `membership` WHERE `username`=?";
		$query = $this->db->query($query,array('admin'));
		if ($query->num_rows() > 0){
			$row = $query->row();
			return $row;
		}
	}//end select_access_level

	function total_num_users(){
		$query = "SELECT * FROM `membership`";
		$result = $this->db->query($query);
		
		return $result;
	}

	//to print error message
	function no_direct_access(){
		echo "No direct access here.";
	}

     //retrieve access level according to id
      function get_access_level($id){          
          $this->db->where('id',$id);
          $result = $this->db->get('membership');
          if($result->num_rows()>0)
                return $result->row();
      }

      function update_access_level($id,$data){
          $this->db->where('id',$id);
          return $this->db->update('membership',$data);
      }

	
	
}
?>
