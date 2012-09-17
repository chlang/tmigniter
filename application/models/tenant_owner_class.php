<?php

class Tenant_owner_class extends CI_Model {
	
	function add_type(){
		$add_new_type = array(
			't_type' => $this->input->post('code'),
			'ten_own' => $this->input->post('tenant_owner'),
			'descriptin' => $this->input->post('Description'),
			'ccl_rep' => $this->input->post('CC_Letter')
		);

		$insert = $this->db->insert('t_type', $add_new_type);
		return $insert;
	}//end Add_Type
	
    function select_t_type(){
            $query = "SELECT * FROM `t_type`";
            $result = $this->db->query($query);
            if ($result->num_rows() > 0)
                    return $result;
    }

    function select_one_t_type($a){
        $query ="SELECT * FROM `t_type` WHERE `t_type`='$a'";
        $result = $this->db->query($query);
            if ($result->num_rows() > 0)
                    return $result;
            
    }

    function delete_t_type($a){
        $query = "DELETE FROM `t_type` WHERE `t_type`='$a'";
        $result = $this->db->query($query);
    }
	
	function update_t_type($t_type_id){
            $t_type_data = array(
                    'ten_own' => $this->input->post('tenant_owner'),
                    'descriptin' => $this->input->post('Description'),
                    'ccl_rep' => $this->input->post('CC_Letter'));

		$this->db->where('t_type',$t_type_id);
		return $this->db->update('t_type',$t_type_data);
		
	}

     
     
     
	

}
?>
