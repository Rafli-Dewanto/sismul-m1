<?php
defined('BASEPATH') OR exit('No directed script access allowed');

class M_welcome extends CI_Model{
    
  
  public function create($id, $filename){
        $data = [
            'id' => $id,
            'name' =>$this->input->post('name', TRUE),
            'description' =>$this->input->post('description', TRUE),
            'filename'=> $filename
        ];
        $this->db->insert('post', $data);
    }

    public function read($id=false){
        if ($id===false){
            //pertemuan 2
            return $this->db->get('post')->result_array();
        }
        else {
            $query = $this->db->get_where('post',array('id'=>$id));
            return $query->row();
        } 
        return $this->db->get('post')->result_array();
    }
    
}

?>