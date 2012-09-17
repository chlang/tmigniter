<?php
class Dep_type_model extends CI_Model{

    function __construct(){
            // Call the Model constructor
            parent::__construct();
          
    }
    
    function select_all_dep(){
		
		$query = "SELECT * FROM `dep_type` ORDER BY `id` ASC";
		$result= $this -> db -> query ($query);
		if ($result -> num_rows()>0){
			return $result;
			}
		
	}
	
	function select_dep_id($id){
		$result = $this->db->get_where('dep_type',array('id'=>$id));
		if($result->num_rows()>0)
			return $result;
	}
	
	function insert_new_dep($data){

		//Prepare the array for insertion
		//Run the insert function by passing the array $data
		return $this->db->insert('dep_type',$data);
		
		//$query_str = "INSERT INTO  `dep_type` (dep_type, desc) VALUES(?,?)";
		
		//$this->db-> query($query_str,array($dep_type,$desc));
		
		//mysql_connect('localhost','abang','password');
		//mysql_select_db("tmigniter");
		
		//$query = "INSERT INTO `dep_type` (`dep_type`,`desc`) VALUES ('$dep_type','$desc')";
		//return mysql_query($query);

	}
	
	
	function update_dep ($data,$id){
		
		$this->db->where('id',$id);
		return $this->db->update('dep_type',$data);
		}
		
		
	function delete_dep($id){
		$this->db->delete('dep_type', array('id' => $id));

		
		}
}
    
    
?>

