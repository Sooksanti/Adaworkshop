<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class cInsertUpdateDelete extends MX_Controller {

    public function __construct() {
        parent::__construct ();
        $this->load->model('mInsertUpdateDelete');
    }

	public function index() {
        $this->load->view('common/wInsertUpdateDelete');
    }

    //Functionality: แสดงข้อมูลทั้งหมดจากตาราง TCNMcountry
    //Parameters:  -
    //Creator: 5/08/2020 Sooksanti(Non)
    //Last Modified : 
    //Return : -
    //Return Type: -
    public function FCNxCCTYList_contry(){
        $aData=$this->mInsertUpdateDelete->FSoMCTYSelectcountry();
        echo json_encode($aData);
    }
    
    //Functionality: ค้นหาข้อมูลจากคาราง TCNMcountry
    //Parameters:  -
    //Creator: 5/08/2020 Sooksanti(Non)
    //Last Modified : 
    //Return : -
    //Return Type: -    
    public function FSxCCTYSearchcountry(){
		$tInputcountrysearch=  $this->input->post('tCountry');
        $aData=$this->mInsertUpdateDelete->FSoMCTYSearchcountry($tInputcountrysearch);
        echo json_encode($aData);
    }
    
    //Functionality: insert ข้อมูลเข้าตาราง TCNMcountry
    //Parameters:  -
    //Creator: 5/08/2020 Sooksanti(Non)
    //Last Modified : 
    //Return : -
    //Return Type: -
    public function FSxCCTYInsertcountry(){
        $aInputcountry = array(
            'FTCountryCode' => $this->input->post('tIdcountry'),
            'FTCountryName' => $this->input->post('tNamecountry'),
        );
        $aData = $this->mInsertUpdateDelete->FSaMCTYInsertcountry($aInputcountry);
        echo json_encode($aData);
    }

    //Functionality: updateข้อมูลเข้าตาราง TCNMcountry
    //Parameters:  -
    //Creator: 5/08/2020 Sooksanti(Non)
    //Last Modified : 
    //Return : -
    //Return Type: -
    public function FSxCCTYUpdatecountry(){
        $aData=$this->mInsertUpdateDelete->FSaMCTYUpdatecountry();
        echo json_encode($aData);
    }
    
    //Functionality: ลบข้อมูลจากตาราง TCNMcountry
    //Parameters:  -
    //Creator: 5/08/2020 Sooksanti(Non)
    //Last Modified : 
    //Return : status
    //Return Type: array
    public function FSxCCTYDeletecountry(){
        $bData=$this->mInsertUpdateDelete->FSoMCTYDeletecounty();
        echo json_encode($bData);
    }
}