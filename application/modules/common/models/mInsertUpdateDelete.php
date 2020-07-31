<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class mInsertUpdateDelete extends MX_Controller {

    public function __construct() {
        parent::__construct ();
    }

    public function FSxMCTYSelectcountry(){
        $data=$this->db->get('TCNMcountry');
        return $data->result();
    }

    public function FSxMCTYSearchcountry(){
        $data = $this->input->post('country');
        $result=$this->db->or_like('FTCountryName', $data)->or_like('FTCountryCode', $data)->get('TCNMcountry');
        return $result->result();
    }
    
    public function FSxMCTYInsertcountry(){
        $data = array(
                'FTCountryCode'  => $this->input->post('idcountry'), 
                'FTCountryName'  => $this->input->post('namecountry')
            );
            $this->db->select('FTCountryName');
            $this->db->where('FTCountryName',$this->input->post('namecountry'));
            $query = $this->db->get('TCNMcountry');
            $num = $query->num_rows();
            if($num > 0)
            {
                return false;
            }else{
                $this->db->db_debug = false;
                $result=$this->db->insert('TCNMcountry',$data);
                return $result;
            }

    }

    public function FSxMCTYUpdatecountry(){
        $id =$this->input->post('id');
        $idcountry=$this->input->post('idcountry');
        $namecountry=$this->input->post('namecountry');

        $this->db->select('FTCountryName');
        $this->db->where('FTCountryName',$namecountry)->where('FTCountryCode !=',$id);
        $query = $this->db->get('TCNMcountry');
        $num = $query->num_rows();
        if($num > 0)
        {
            return false;
        }else{
            $this->db->db_debug = false;
            $this->db->set('FTCountryCode', $idcountry);
            $this->db->set('FTCountryName', $namecountry);
            $this->db->where('FTCountryCode', $id);
            $result=$this->db->update('TCNMcountry');
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

