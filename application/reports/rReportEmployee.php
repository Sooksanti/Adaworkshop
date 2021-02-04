<?php
require APPPATH . "/libraries/koolreport/autoload.php";
class rReportEmployee extends \koolreport\KoolReport
{
    use \koolreport\clients\Bootstrap;
    public function settings()
    {
        return array(
            "assets" => array(
                "path" => "../../assets",
                "url" => "/Adaworkshop/assets",
            ),
            "dataSources" => array(
                "sqlserver" => array(
                    'host' => 'ADA091-WAT\SQLEXPRESS',
                    'username' => '',
                    'password' => '',
                    'dbname' => 'AdaWorkshop1.MDB',
                    'charset' => 'utf8',
                    'class' => "\koolreport\datasources\SQLSRVDataSource",
                ),
            ),
        );
    }
    public function setup()
    {
        $this->src('sqlserver')
            ->query("SELECT dbo.TCNMEmp.FTEmpID, dbo.TCNMEmp.FTEmpName, dbo.TCNMEmp.FTCusEmail, dbo.TCNMCountry.FTCountryName, dbo.TCNMEmp.FCSalary
                 FROM dbo.TCNMCountry
                 INNER JOIN dbo.TCNMEmp
                 ON dbo.TCNMCountry.FTCountryCode = dbo.TCNMEmp.FTCountryCode")
            ->pipe($this->dataStore("cus"));
    }
}
