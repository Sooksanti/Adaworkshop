<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class cUploadimg extends MX_Controller {

    public function __construct() {
        parent::__construct ();
    }

    public function index() {
        $this->load->view('common/wUploadimage');
    }

    public function FCNxCIMGUploadimg(){
        if(isset($_FILES["oflIMGUpload"]["name"]))  
        {  
             $config['upload_path'] = './upload/';  
             $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $numrand = (mt_rand());
             $config['file_name']  =$numrand;
             $this->load->library('upload', $config);  
             if(!$this->upload->do_upload('oflIMGUpload'))  
             {  
                  echo $this->upload->display_errors();  
             }  
             else  
             {  
                  $data = $this->upload->data();  
                  echo '<img src="'.base_url().'upload/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';  
             }  
        } 
   }
}