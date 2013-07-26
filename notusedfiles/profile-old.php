<?php 
class Profile extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
 
    
        function get_profile()
{
        $this->db->where('id', $id);
        $query = $this->db->get('freeusers'); //get all data from free users table that belong to the respective user
        return $query->row(); //return the data    
}
        function insert_profile()
{
        $this->db->where('id', $id);
        $query = $this->db->insert('freeusers'); //get all data from free users table that belong to the respective user
        return $query->row(); //return the data    
}
        function update_profile()
{
        $this->db->where('id', $id);
        $query = $this->db->update('freeusers'); //get all data from free users table that belong to the respective user
        return $query->row(); //return the data    
}
    
    
   /* function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }*/
   

    

}
?>