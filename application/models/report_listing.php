<?php

class Report_listing extends CI_Model {

	
	function tenant_listing(){
		$query = "SELECT * FROM `tenant`
			";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
			return $result;
	}
}
?>
