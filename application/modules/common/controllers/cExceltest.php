<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/spout-3.1.0/src/Spout/Autoloader/autoload.php';
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Box\Spout\Common\Entity\Row;
use Box\Spout\Common\Entity\Style\Color;
use Box\Spout\Writer\Common\Creator\Style\StyleBuilder;

class cExceltest extends MX_Controller {
    public function __construct() {
        parent::__construct ();
        $this->load->model('mInsertUpdateDelete');
    }
	public function test()
	{	        

        $writer = WriterEntityFactory::createXLSXWriter();
        // $writer = WriterEntityFactory::createODSWriter();
        // $writer = WriterEntityFactory::createCSVWriter();
        $writer->setShouldUseInlineStrings(true); // default (and recommended) value
    
        $writer->setTempFolder($customTempFolderPath);
    
        $fileName = 'test.xlsx';
    
        // $writer->openToFile($filePath); // write data to a file or to a PHP stream
        $writer->openToBrowser($fileName); // stream data directly to the browser
        $cells = [
            WriterEntityFactory::createCell('ID'),
            WriterEntityFactory::createCell('Country'),
        ];
    
        /** add a row at a time */
        $singleRow = WriterEntityFactory::createRow($cells);
        $writer->addRow($singleRow);


        $data=$this->mInsertUpdateDelete->FSxMCTYSelectcountry();
        foreach ($data as $row)
        {         
        $Row = [
            WriterEntityFactory::createCell($row->FTCountryCode),
            WriterEntityFactory::createCell($row->FTCountryName),
        ];
        $RowMulti = WriterEntityFactory::createRow($Row);
        /** add multiple rows at a time */
        $multipleRows = [
            WriterEntityFactory::createRow($Row),
        ];
        $writer->addRows($multipleRows); 
        }
        $writer->close();

	}

}