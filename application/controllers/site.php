<?php
class Site extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    function members(){
        
        $this->load->model('user_model');
        $data = array(
        $session_id = $this->session->userdata('session_id')
        ); // if no data is there and you wont get an error
        if($query = $this->user_model->get_profile())
        {
            $data['records'] = $query;
        }
        //$data['username'] = $this->session->userdata('username');
        $data['main_content'] = '/pages/browse_business';
        $this->load->view('templates/template',$data);
        
    }
    
    function profile(){
        
        $this->load->model('user_model');
        $data = array(
        $session_id = $this->session->userdata('session_id')
        ); // if no data is there and you wont get an error
        if($query = $this->user_model->get_profile())
        {
            $data['records'] = $query;
        }
        //$data['username'] = $this->session->userdata('username');
        $data['main_content'] = '/pages/designerprofile';
        $this->load->view('templates/template',$data);
        
    }
     function edit(){
        
        $this->load->model('user_model');
        $data = array(
        $session_id = $this->session->userdata('session_id')
        ); // if no data is there and you wont get an error
        if($query = $this->user_model->get_profile())
        {
            $data['records'] = $query;
        }
        //$data['username'] = $this->session->userdata('username');
        $data['main_content'] = '/pages/members';
        $this->load->view('templates/template',$data);
        
    }
    // this is to update the user profile
    function update(){
        $this->load->model('user_model');
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'website' => $this->input->post('website'),
             'bio' => $this->input->post('bio'),
            'industry' => $this->input->post('industry'),
            'location' => $this->input->post('location')
        );
        $this->user_model->update_profile($data);
    
    }
    
    // creates the array for adding info to database
    function create(){
        // same as doing $_POST['title']
        //$data is called in the model
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname')
        );
        //add the model to the auto load array.. declare it here
        $this->user_model->insert_profile();
        $this->index();
    }
    function logout(){
        $this->session->sess_destroy();
    }
     function is_logged_in(){
        return (bool) $this->session->userdata('is_logged_in');
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