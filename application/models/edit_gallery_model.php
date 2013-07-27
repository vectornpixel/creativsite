<?php

class Gallery_model extends CI_Model{
    // initalizes the gallery path variable

    public function __construct(){
        parent::__construct();
        $this->gallery_path = realpath(APPPATH . '../portfolio');
        $this->gallery_path_url = base_url().'portfolio/';
    }
 
    function do_upload(){
        $config['upload_path']= $this->gallery_path;
        $config['allowed_types']='jpeg|jpg|gif|png';
        $config['source_image'] ='../portfolio';
        $config['new_image'] ='../portfolio/thumbs';
        $config['maintain_ration']= true;
        $config['max_size']='3000';
        $config['max_width']='250;';
        $config['max_height']='220';
        $this->load->library('upload',$config);
        
        $this->upload->do_upload();
     
        $image_data = $this->upload->data();
    
        
         /*$config['upload_path'] = "this/$folderName/";
        if(!is_dir($folderName))
        {
           mkdir($folderName,0777);
        }*/
        
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
        
        $files = scandir($this->gallery_path);
        // substracts these out of array
        $files = array_diff($files, array('.', '..','thumbs'));
        $images = array();
        
        foreach ($files as $file){
            $images [] = array(
                'url' => './portfolio' . $file,
                'thumb_url' => './portfolio/thumbs/' .$file
            );
        }
        return $images;
    }
}