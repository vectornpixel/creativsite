<?php

class Profile_model extends CI_Model{
    
 
    function get_profile(){
        //$session_id = $this->session->userdata('session_id')
        $this->db->where('id', $this->input->get('id'));
        //$session_id = $this->session->userdata('session_id');
        //$this->db->where('id', $session_id);
        $query = $this->db->get('freeusers');
        return $query->result();     
          
    }
    
    function insert_profile($data){
        $this->db->insert('freeusers',$data);
        return;
    }
    
    function update_profile($data){
        $this->db->where('id',1);
        $this->db->update('freeusers',$data);
    }
    
    function delete_row(){
        $this->db->where('id',$this->uri->segment(3));
        $this->db->delete('freeusers');
    }
}
?>





