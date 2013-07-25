<?php
class Profile extends CI_Controller{
    // creates view for this controller
    function index(){
        $this->load->model('profile_model');
        $data = array(); // if no data is there and you wont get an error

        if($query = $this->profile_model->get_profile())
        {
            $data['records'] = $query;
        }
        $this->load->view('templates/header', $data);
        $this->load->view('pages/designer', $data);
	$this->load->view('templates/footer', $data);
        
    }
    
    function update(){
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname')
        );
        $this->profile_model->update_profile($data);
        $this->index();
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
        $this->profile_model->insert_profile();
        $this->index();
    }
}

?>