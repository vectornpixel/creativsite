<?php
class Gallery_old extends CI_Controller{
    // uses index page to load this gallery view
    function index(){
        // loads the model. if the upload posts, call the do model method from the gallery model Model.
        $this->load->model('gallery_model');
        if ($this->input->post('upload')){
            $this->gallery_model->do_upload();
        }
        $data['images'] = $this->gallery_model->get_images();
        $data['main_content'] = '/pages/settings';
        $this->load->view('templates/template',$data);
    }
}