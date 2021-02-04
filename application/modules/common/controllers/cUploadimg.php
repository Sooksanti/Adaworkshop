<?php defined('BASEPATH') or exit('No direct script access allowed');

class cUploadimg extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('common/wUploadimage');
    }

    //Functionality: upload รูป
    //Parameters:  -
    //Creator: 5/08/2020 Sooksanti(Non)
    //Last Modified :
    //Return : -
    //Return Type: -
    public function FCNxCIMGUploadimg()
    {
        if (isset($_FILES["oflIMGUpload"]["name"])) {
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $nNumrand = "asd";
            $config['file_name'] = $nNumrand;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('oflIMGUpload')) {
                echo $this->upload->display_errors();
            } else {
                $aData = $this->upload->data();
                echo '<img src="' . base_url() . 'upload/' . $aData["file_name"] . '" width="300" height="225" class="img-thumbnail" />';
            }
        }
    }
}
