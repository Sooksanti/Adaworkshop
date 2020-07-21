<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class cCrud extends MX_Controller {

    public function __construct() {
        parent::__construct ();
        $this->load->library("session"); 
        $this->load->model('mCrud');
    }

	public function index() {
        $this->load->view('common/wCrud');
    }

    public function FCNxCCTlist_contry(){
		$data=$this->mCrud->FSxMCTselectcountry();
        echo json_encode($data);
    }
    
    public function FSxCCTsearchcountry(){
		$search=  $this->input->post('country');
        $data=$this->mCrud->FSxMCTsearchcountry($search);
        echo json_encode($data);
    }
    
    public function FSxCCTinsertcountry(){
        $data=$this->mCrud->FSxMCTinsertcountry();
        $m = json_encode($data);
        if($m == "true")
        {
            echo json_encode($data);
        }else if($m == "false")
        {
            echo "ข้อมูลซ้ำ";
        }else
        {
            echo json_encode($this->db->error());
        }
        
    }
    
    public function FSxCCTupdatecountry(){
        $data=$this->mCrud->FSxMCTupdatecountry();
        $m = json_encode($data);
        if($m == "true")
        {
            echo json_encode($data);
        }
        else if($m == "false")
        {
            echo "ข้อมูลซ้ำ";
        }
        else
        {
            echo json_encode($this->db->error());
        }
    }
    
    public function FSxCCTdeletecountry(){
        $data=$this->mCrud->deleteitem();
        echo json_encode($data);
    }
}