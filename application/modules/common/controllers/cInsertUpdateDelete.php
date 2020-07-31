<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class cInsertUpdateDelete extends MX_Controller {

    public function __construct() {
        parent::__construct ();
        $this->load->model('mInsertUpdateDelete');
    }

	public function index() {
        $this->load->view('common/wInsertUpdateDelete');
    }

    public function FCNxCCTYList_contry(){
		$data=$this->mInsertUpdateDelete->FSxMCTYSelectcountry();
        echo json_encode($data);
    }
    
    public function FSxCCTYSearchcountry(){
		$search=  $this->input->post('country');
        $data=$this->mInsertUpdateDelete->FSxMCTYSearchcountry($search);
        echo json_encode($data);
    }
    
    public function FSxCCTYInsertcountry(){
        $data=$this->mInsertUpdateDelete->FSxMCTYInsertcountry();
        $result = json_encode($data);
        if($result == "true")
        {
            echo json_encode($data);
        }else if($result == "false")
        {
            echo "ข้อมูลซ้ำ";
        }else
        {
            echo json_encode($this->db->error());
        }
        
    }
    
    public function FSxCCTYUpdatecountry(){
        $data=$this->mInsertUpdateDelete->FSxMCTYUpdatecountry();
        $result = json_encode($data);
        if($result == "true")
        {
            echo json_encode($data);
        }
        else if($result == "false")
        {
            echo "ข้อมูลซ้ำ";
        }
        else
        {
            echo json_encode($this->db->error());
        }
    }
    
    public function FSxCCTYDeletecountry(){
        $data=$this->mInsertUpdateDelete->FSxMCTYDeletecounty();
        echo json_encode($data);
    }
}