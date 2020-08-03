<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class mInsertUpdateDelete extends MX_Controller {

    public function __construct() {
        parent::__construct ();
    }

    public function FSxMCTYSelectcountry(){
        $data=$this->db->query("select * from TCNMcountry");
        return $data->result();
    }

    public function FSxMCTYSearchcountry(){
        $data = $this->input->post('country');
        $result=$this->db->query("select * from TCNMcountry where FTCountryName like '%$data%' or FTCountryCode like '%$data%'");
        return $result->result();
    }
    
    public function FSxMCTYInsertcountry(){
            $FTCountryCode =$this->input->post('idcountry');
            $FTCountryName= $this->input->post('namecountry');
            $query = $this->db->query("select * from TCNMcountry where FTCountryName like '$FTCountryName'");
            $num = $query->num_rows();
            if($num > 0)
            {
                return false;
            }else{
                $this->db->db_debug = false;
                $result=$this->db->query("INSERT INTO TCNMcountry values('$FTCountryCode', '$FTCountryName')");
                return $result;
            }

    }

    public function FSxMCTYUpdatecountry(){
        $id =$this->input->post('id');
        $idcountry=$this->input->post('idcountry');
        $namecountry=$this->input->post('namecountry');

        $query = $this->db->query("select * from TCNMcountry where FTCountryName like '$namecountry' and FTCountryCode !='$id'");
        $num = $query->num_rows();
        if($num > 0)
        {
            return false;
        }else{
            $this->db->db_debug = false;
            $result=$this->db->query("UPDATE TCNMcountry SET FTCountryCode = '$idcountry', FTCountryName = '$namecountry' WHERE FTCountryCode = '$id';");
            return $result;
        }
    }

    public function FSxMCTYDeletecounty(){
        $idcountry=$this->input->post('idcountry');
        $this->db->where('FTCountryCode', $idcountry);
        $result=$this->db->delete('TCNMcountry');
        return $result;
    }
}

