<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class cUploadimg extends MX_Controller {

    public function __construct() {
        parent::__construct ();
    }

    public function index() {
        $this->load->view('common/wUploadimage');
    }

    public function FCNxCIMGuploadimg(){
        if(isset($_FILES["oflImage"]["name"]))  
        {  
             $config['upload_path'] = './upload/';  
             $config['allowed_types'] = 'jpg|jpeg|png|gif';  
             $this->load->library('upload', $config);  
             if(!$this->upload->do_upload('oflImage'))  
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