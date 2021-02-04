<?php defined('BASEPATH') or exit('No direct script access allowed');

class mInsertUpdateDelete extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    //Functionality: select ข้อมูลทั้งหมดจากตาราง TCNMCountry
    //Parameters:  -
    //Creator: 5/08/2020 Sooksanti(Non)
    //Last Modified :
    //Return : aData ข้อมูลที่ได้จากการ select ข้อมูลจากตาราง TCNMCountry
    //Return Type: array
    public function FSoMCTYSelectcountry()
    {
        $tQuery = "select * from TCNMCountry";
        $aData = $this->db->query($tQuery)->result();
        return $aData;
    }

    //Functionality: ค้นหาข้อมูลจากตาราง TCNMCountry
    //Parameters:  ptInputcountrysearch รับข้อมูลมาจาก controller type array
    //Creator: 5/08/2020 Sooksanti(Non)
    //Last Modified :
    //Return : aResult ข้อมูลที่ได้จากการค้นหาข้อมูลจากตาราง TCNMCountry
    //Return Type: array
    public function FSoMCTYSearchcountry($ptInputcountrysearch)
    {
        $tQuery = "select * from TCNMCountry
                 where FTCountryName like '%$ptInputcountrysearch%'
                 or FTCountryCode like '%$ptInputcountrysearch%'";
        $aResult = $this->db->query($tQuery)->result();
        return $aResult;
    }

    //Functionality: insert ข้อมูลเข้าตาราง TCNMCountry
    //Parameters:  aInputcountry รับข้อมูลมาจาก controller type POST
    //Creator: 5/08/2020 Sooksanti(Non)
    //Last Modified :
    //Return : status
    //Return Type: array
    public function FSaMCTYInsertcountry($aInputcountry)
    {
        $tQuery = "select * from TCNMCountry
                    where FTCountryName like '" . $aInputcountry['FTCountryName'] . "' or FTCountryName like '" . $aInputcountry['FTCountryCode'] . "'";

        $oResult = $this->db->query($tQuery);
        $nNumrows = $oResult->num_rows();
        if ($nNumrows > 0) {
            $aDataReturn = array(
                'nReturnCode' => 99,
                'tReturnMsg' => 'Duplicate',
            );
        } else {
            $this->db->insert('TCNMCountry', $aInputcountry);
            $aDataReturn = array(
                'nReturnCode' => 1,
                'tReturnMsg' => 'Insert Success',
            );
        }
        return $aDataReturn;
    }

    //Functionality: updateข้อมูลเข้าตาราง TCNMCountry
    //Parameters:  -
    //Creator: 5/08/2020 Sooksanti(Non)
    //Last Modified :
    //Return : status
    //Return Type: array
    public function FSaMCTYUpdatecountry()
    {
        $tId = $this->input->post('tId');
        $tIdcountry = $this->input->post('tIdcountry');
        $tNamecountry = $this->input->post('tNamecountry');

        $tQuery = "select * from TCNMCountry where FTCountryName like '$tNamecountry' and FTCountryCode !='$tId'";
        $oResult = $this->db->query($tQuery);
        $nNumrows = $oResult->num_rows();
        if ($nNumrows > 0) {
            $aDataReturn = array(
                'nReturnCode' => 99,
                'tReturnMsg' => 'Duplicate Code',
            );
        } else {
            $tQuery = "UPDATE TCNMCountry SET FTCountryCode = '$tIdcountry', FTCountryName = '$tNamecountry'
                       WHERE FTCountryCode = '$tId';";

            $this->db->query($tQuery);
            $aDataReturn = array(
                'nReturnCode' => 1,
                'tReturnMsg' => 'Update Success',
            );
        }
        return $aDataReturn;
    }

    //Functionality: ลบข้อมูลจากตาราง TCNMCountry
    //Parameters:  -
    //Creator: 5/08/2020 Sooksanti(Non)
    //Last Modified :
    //Return : boolean
    //Return Type: boolean
    public function FSbMCTYDeletecounty()
    {
        $tIdcountry = $this->input->post('tIdcountry');
        $this->db->where('FTCountryCode', $tIdcountry);
        $bResult = $this->db->delete('TCNMCountry');
        return $bResult;
    }
}
