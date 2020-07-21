<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH."/reports/rReportEmployee.php";

class cReport extends MX_Controller {

	public function index()
	{
		$report = new rReportEmployee;
		$report->run()->render();
	}
}