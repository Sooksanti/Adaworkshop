<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class cObjectrelation extends MX_Controller {

    public function __construct() {
        parent::__construct ();
    }

	public function index() {
        $this->load->view('common/wObjectrelation');
    }
}