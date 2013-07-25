<?php

class Login extends CI_Controller{
    function index(){
        // creates dynamic page from template.php - set main content to the page you want to load
        $data['main_content'] = '/pages/login_form';
        $this->load->view('/templates/template', $data);
    }
    
    function validate_credentials(){
        $this->load->model('membership_model');
        // calls the membership model with the validate method
        $query = $this->membership_model->validate();
        
        // if the users credentials validated
        if($query){
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true
            );
            
            // loads a session, takes the user informationf rom $data and adds it to session
            $this->session->set_userdata($data);
            redirect('site/members_area');
        }
        else{
            // loads the login form again if logged in incorrectly
            $this->index();
        }
    }
    function signup(){
        $data['main_content'] = 'pages/signup_form';
        $this->load->view('/templates/template',$data);
    }
}