<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class cLangues extends MX_Controller {

    public function __construct() {
        parent::__construct ();
        $this->load->library("session"); 
    }

	public function index() {
        $this->load->view('common/template/wTemplate');
    }

    public function FSxCLAGloadwLangues() {
        if($this->session->userdata('lang')==NULL){
			$lang = "th";
			$this->session->set_userdata('lang',$lang);
		}else{
			$lang = $this->session->userdata('lang');
        }
        $this->load->view('common/wLangues');  	
    }

    public function FSxCLAGchangeLangues($lang)
	{
		$this->session->set_userdata('lang',$lang);
		$this->load->view('common/wLangues');
    }
    
}