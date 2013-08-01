<?php

class Gallery_model extends CI_Model{
    // initalizes the gallery path variable
    var $gallery_path;
    var $gallery_path_url;
    public function __construct(){
        parent::__construct();
      
        //sets the gallery path to applications folder and gallery image path
        //$this->gallery_path = realpath(APPPATH . '../portfolio/');
        //$this->gallery_path_url = base_url().'portfolio/';
    }
    
    function do_upload(){
         /**tested and working session script**/
        $id = $this->session->userdata('username');
        $this->db->where('username',$id);
        $query = $this->db->get('freeusers');
        /***/
        
        $folderName = $id;
        $uploadPath =  './portfolio/' . $folderName;
        if(!file_exists($uploadPath)){
            $create = mkdir($uploadPath, 0777);
            if(!$create)
                return;
        }

        $config = array(
            // requried variable allowed types is needed also delcared the upload path to gallery path
            'allowed_types' => 'jpg|jpeg|gif|png',
            'upload_path' => $uploadPath,
            'max_size' => 3000
            //'file_name' => $id
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
            'width' => 250,
            'height' => 220
            
        );
        
        

        $data = array(
        'username' => $this->input->post('username'),
        'category' => $this->input->post('category'),
        'filename' => $image_data['file_name'],
           );
        
        $this->db->insert('portfolio', $data );
        
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        
    }
    
    
    function get_images(){
        $id = $this->session->userdata('username');
        $this->db->where('username',$id);

        $files = scandir($this->gallery_path);
        // substracts these out of array
        $files = array_diff($files, array('.', '..','thumbs'));
        $images = array();
        
        foreach ($files as $file){
            $images [] = array(
                'url' => $this->gallery_path_url . $file,
                'thumb_url' => $this->gallery_path_url . 'thumbs/' .$file . '/' . $id
            );
        }
        return $images;
    }
}
