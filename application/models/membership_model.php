<?php

class Membership_model extends CI_Model{
    function validate(){
        // selects database where the username is equal to what they type to see if its validated
        $this->db->where('username', $this->input->post('username'));
        // selects database where the password they type is equal to their md5 ( encrypted password)
        $this->db->where('password', md5($this->input->post('password')));
        // if those are true it goes to membership
        $query = $this->db->get('freeusers');
        
        // if this not equal 0 we know they are a member, create a session and log them in
        
        if($query->num_rows !== 0)
        {
            $validate=true;
            return $validate;
        }
    }
}