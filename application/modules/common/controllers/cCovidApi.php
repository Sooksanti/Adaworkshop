<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class cCovidApi extends MX_Controller {

    public function __construct() {
        parent::__construct ();
        $this->load->library("session"); 
    }

	public function index() {
        $url = 'http://covid19.th-stat.com/api/open/today';
        $curl = curl_init($url);
   
       	curl_setopt_array($curl, array(
		    CURLOPT_URL => $url,
		    CURLOPT_RETURNTRANSFER => true,
		    CURLOPT_ENCODING => "",
		    CURLOPT_TIMEOUT => 30,
		    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		    CURLOPT_CUSTOMREQUEST => "GET",
		    CURLOPT_HTTPHEADER => array(
		        'Content-Type: application/json',
		    ),
		));
            
        $data = curl_exec($curl);
        $err = curl_error($curl);

        // $obj = json_decode($data);
        $result['covid']= json_decode($data);
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
            $this->load->view('common/wCovidApi',$result);
        }
    }
}