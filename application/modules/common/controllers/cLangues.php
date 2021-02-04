<?php defined('BASEPATH') or exit('No direct script access allowed');

class cLangues extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }

    public function index()
    {
        $this->load->view('common/template/wTemplate');
    }

    public function FSxCLAGloadwLangues()
    {
        $this->load->view('common/wLangues');
    }

    //Functionality: เปลี่ยน session ภาษา
    //Parameters: lang รับมาจากฟังก์ชัน JSxLAGchangeLangues type POST
    //Creator: 5/08/2020 Sooksanti(Non)
    //Last Modified :
    //Return : -
    //Return Type: -
    public function FSxCLAGchangeLangues($lang)
    {
        $this->session->set_userdata('lang', $lang);
        $this->load->view('common/wLangues');
    }

}
