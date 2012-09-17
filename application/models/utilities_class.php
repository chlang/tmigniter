<?php

class Utilities_class extends CI_Model{

    function __construct(){
            // Call the Model constructor
            parent::__construct();
    }

    function select_meter_type($a){
        if($a==-1){
            $query = "SELECT * FROM `mtr_type`";
        }
        else{
            $query = "SELECT * FROM `mtr_type` WHERE `id`='$a'";
        }
        
        $result = $this->db->query($query);
        if ($result->num_rows() > 0)
            return $result;

    }

    function update_mtr_type($id){
//        $data = array(  'mtr_type' => $this->input->post('mtr_type_edit'),
//                        'desc' => $this->input->post('desc_edit')
//                        );
//        $this->db->where('mtr_type', $id);
//        return $this->db->update('mtr_type',$data);
        $query = "UPDATE `mtr_type`
                SET
                    `mtr_type` = '{$this->input->post("mtr_type_edit")}',
                    `desc` = '{$this->input->post("desc_edit")}'
                WHERE `id` = '$id' ";
        $query = $this->db->query($query);
        return $query;

    }

    function insert_mtr_type($data){
        return $this->db->insert('mtr_type',$data);
    }

    function delete($id){ //..worked..
        $query = "DELETE FROM `tmigniter`.`mtr_type` WHERE `mtr_type`.`id`= $id" ;
        $query = $this->db->query($query);
        return $query;
    }

}
?>
