<?php
require APPPATH."/libraries/koolreport/autoload.php";
class rReportEmployee extends \koolreport\KoolReport
{
    use \koolreport\clients\Bootstrap;
    function settings()
    {
        return array(
            "assets"=>array(
                "path"=>"../../assets", //Relative path the assets folder
                "url"=>"/Adaworkshop/assets", //Full url to assets folder from browser
            ),
            "dataSources"=>array(
                "sqlserver"=>array(
                    'host' => 'ADA091-WAT',
                    'username' => 'sa',
                    'password' => '@Adasoft',
                    'dbname' => 'AdaWorkshop1.MDB',
                    'charset' => 'utf8',  
                    'class' => "\koolreport\datasources\SQLSRVDataSource"  
                )
            )
        );
    }
    function setup()
    {
        $this->src('sqlserver')
        ->query("SELECT dbo.TCNMemp.FTEmpID, dbo.TCNMemp.FTEmpName, dbo.TCNMemp.FTCusEmail, dbo.TCNMcountry.FTCountryName, dbo.TCNMemp.FCSalary
                 FROM dbo.TCNMcountry 
                 INNER JOIN dbo.TCNMemp 
                 ON dbo.TCNMcountry.FTCountryCode = dbo.TCNMemp.FTCountryCode")
        ->pipe($this->dataStore("emp"));
    }
}