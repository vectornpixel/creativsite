<?php
class Site extends CI_Controller{
    

    function members_area(){
        $this->load->view('pages/members_area');
    }
        /*function __construct(){
        parent::CI_Controller();
        $this->is_logged_in();
    }*/
    
   /* function is_logged_in(){
        $is_logged_in = $this->session->userdata('is_logged_in');
        if(!isset($is_logged_in) || is_logged_in !==true){
            echo 'You do not have permission to access <a href="../login">Login</a>';
            die();
        }
    }*/
}