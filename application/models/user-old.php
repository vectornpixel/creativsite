<?php 
class User extends CI_Model {

    var $name     = '';
    var $email    = '';
    var $city     = '';
    var $state    = '';
    var $industry = '';
    var $website  = '';
    var $summary  = '';
    var $password = '';
   

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
 
   /* function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }*/
   
    function get_info(){
        $this->name = $_POST['name'];
        $this->name = $_POST['email'];
        $this->name = $_POST['city'];
        $this->name = $_POST['state'];
        $this->name = $_POST['industry'];
        $this->name = $_POST['website'];
        $this->name = $_POST['summary'];
        $this->name = $_POST['password'];
        $this->db->get('freeusers');
    }
    function insert_info(){
        $this->name = $_POST['name'];
        $this->name = $_POST['email'];
        $this->name = $_POST['city'];
        $this->name = $_POST['state'];
        $this->name = $_POST['industry'];
        $this->name = $_POST['website'];
        $this->name = $_POST['summary'];
        $this->name = $_POST['password'];
        $this->db->insert('freeusers', $this);
    }
    
     function update_info(){
        $this->name = $_POST['name'];
        $this->name = $_POST['email'];
        $this->name = $_POST['city'];
        $this->name = $_POST['state'];
        $this->name = $_POST['industry'];
        $this->name = $_POST['website'];
        $this->name = $_POST['summary'];
        $this->name = $_POST['password'];
        $this->db->update('freeusers', $this, array('id' =>$_POST['id']));
    }
    

}
?>