<?php

class Gallery_model extends CI_Model{
    // initalizes the gallery path variable
    var $gallery_path;
    var $gallery_path_url;
    public function __construct(){
        parent::__construct();
        //sets the gallery path to applications folder and gallery image path
        $this->gallery_path = realpath(APPPATH . '../images');
        $this->gallery_path_url = base_url().'images/';
    }
    
    function do_upload(){
        
        $config = array(
            // requried variable allowed types is needed also delcared the upload path to gallery path
            'allowed_types' => 'jpg|jpeg|gif|png',
            'upload_path' => $this->gallery_path,
            'max_size' => 3000
        );
        
        // loads the library and sets where its going to go to
        $this->load->library('upload',$config);
        // this performs the upload operation
        $this->upload->do_upload();
        //returns data about upload ( file location )
        $image_data = $this->upload->data();
        
        $config = array(
            'source_image' => $image_data['full_path'],
            'new_image' => $this->gallery_path . '/thumbs',
            'maintain_ration' => true,
            'width' => 150,
            'height' => 100
        );
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        
    }
    function get_images(){
        $files = scandir($this->gallery_path);
        // substracts these out of array
        $files = array_diff($files, array('.', '..','thumbs'));
        $images = array();
        
        foreach ($files as $file){
            $images [] = array(
                'url' => $this->gallery_path_url . $file,
                'thumb_url' => $this->gallery_path_url . 'thumbs/' .$file
            );
        }
        return $images;
    }
}