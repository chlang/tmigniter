<?php 
    class Tenant_model extends CI_Model {
        var $tableName="tenant";
	
        function select_for_listing_tpl($table,$cols){
            $query = "SELECT ";
            foreach ($cols as $col){
                 $query .= "`{$col}`,";
            }
            $query = substr($query,0,strlen($query)-1);
            $query .= " FROM `$table` ";
            return $this->db->query($query);
        }

        //for particular tenant owner
        function select_particular($t_code){
            $this->db->where('t_code',$t_code);
            $query = $this->db->get('tenant');
            if ($query->num_rows==1)
                return $query;
        }

        function delete($t_code){
            $query = "DELETE FROM `$this->tableName` WHERE `t_code`='$t_code'";
            return $this->db->query($query);
        }//delete

        function insert($data){
            $this->db->insert($this->tableName,$data);
        }//insert

        function update($data,$id){
            $this->db->where('t_code',$id);
            $this->db->update('tenant',$data);
        }//update

        function select_all(){
            $result = $this->db->get('tenant');
            return $result;
        }
				
	
    }
?>
