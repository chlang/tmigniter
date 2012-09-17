<?php

class Report_analysis extends CI_Model {

	/********************************************************
	 * This function List of lots() is a join of `lot` and `tenant`
	 * Return: resource
	 * Purpose: Display content of Report > LIST OF LOTS
	 * ******************************************************
	*/
	function list_of_lots(){
		$query = "SELECT `lot_no`,lot.`t_code`,`floor`,`area_ft`,`name`,tenant.`t_code` 
			FROM `lot`
			INNER JOIN `tenant`
			ON lot.`t_code` = tenant.`t_code`
			ORDER BY lot.`lot_no`
			";
		$result = $this->db->query($query);
		if ($result->num_rows() > 0)
			return $result;
	}
}
?>
