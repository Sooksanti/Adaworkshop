<?php defined('BASEPATH') or exit('No direct script access allowed');

class cTable extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }

    public function index()
    {
        $this->load->view('common/wTable');
    }
}
