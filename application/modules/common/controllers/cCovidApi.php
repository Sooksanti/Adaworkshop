<?php defined('BASEPATH') or exit('No direct script access allowed');

class cCovidApi extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    //Functionality: เรียก api covid
    //Parameters:  -
    //Creator: 5/08/2020 Sooksanti(Non)
    //Last Modified :
    //Return : -
    //Return Type: -
    public function index()
    {
        $tUrl = 'http://covid19.th-stat.com/api/open/today';
        $oCurl = curl_init($tUrl);
        curl_setopt_array($oCurl, array(
            CURLOPT_URL => $tUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $tData = curl_exec($oCurl);
        $tErr = curl_error($oCurl);

        $oResult = json_decode($tData);
        curl_close($oCurl);

        if ($tErr) {
            echo "cURL Error #:" . $tErr;
        } else {
            $this->load->view('common/wCovidApi', $oResult);
        }

    }
}
