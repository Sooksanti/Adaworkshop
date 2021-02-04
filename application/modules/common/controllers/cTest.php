<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'libraries/rabbitmq/vendor/autoload.php';

class cTest extends MX_Controller
{

    public function index()
    {
        $this->load->view('common/wALLComment');
    }

    public function rabbittest()
    {
        $this->load->view('common/wTest');
    }

}
