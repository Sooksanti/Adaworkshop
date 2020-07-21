<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Rap2hpoutre\FastExcel\FastExcel;
class cTest extends MX_Controller {

	public function index()
	{	
		// Load users
		$users = "jj";
		
		// Export all users
		(new FastExcel($users))->export('file.xlsx');
	}
}