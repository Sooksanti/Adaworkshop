<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/spout-3.1.0/src/Spout/Autoloader/autoload.php';
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Box\Spout\Common\Entity\Row;
use Box\Spout\Common\Entity\Style\Color;
use Box\Spout\Writer\Common\Creator\Style\StyleBuilder;
use Box\Spout\Common\Entity\Style\CellAlignment;
use Box\Spout\Common\Entity\Style\Border;
use Box\Spout\Writer\Common\Creator\Style\BorderBuilder;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class cExceltest extends MX_Controller {

    //Functionality: export ข้อมูลจากตาราง TCNMcountry
    //Parameters:  -
    //Creator: 5/08/2020 Sooksanti(Non)
    //Last Modified : 
    //Return : -
    //Return Type: -
	public function test()
	{	        
        $oWriter = WriterEntityFactory::createXLSXWriter();
        // $writer = WriterEntityFactory::createODSWriter();
        // $writer = WriterEntityFactory::createCSVWriter();
        $oWriter->setShouldUseInlineStrings(true); // default (and recommended) value
    
        $oWriter->setTempFolder($customTempFolderPath);

        $oBorder = (new BorderBuilder())
        ->setBorderBottom(Color::BLACK, Border::WIDTH_THIN, Border::STYLE_SOLID)
        ->build();

                /** Create a style with the StyleBuilder */
                $oStyle = (new StyleBuilder())
                ->setFontBold()
                ->setFontSize(14)
                ->setFontColor(Color::BLACK)
                ->setShouldWrapText()
                ->setBorder($oBorder)
                ->setCellAlignment(CellAlignment::CENTER)
                ->setBackgroundColor(Color::YELLOW)
                ->build();

        $tFileName = 'test.xlsx';
        $oWriter->openToBrowser($tFileName); // stream data directly to the browser
        $aCells = [
            WriterEntityFactory::createCell('ID',$oStyle),
            WriterEntityFactory::createCell('Country',$oStyle),
        ];
    
        /** add a row at a time */
        $oSingleRow = WriterEntityFactory::createRow($aCells);
        $oWriter->addRow($oSingleRow);

        $oQuery = $this->db->query("select * from TCNMcountry");
        $aData = $oQuery->result();
        foreach ($aData as $aCountry)
        {         
        $aRow = [
            WriterEntityFactory::createCell($aCountry->FTCountryCode),
            WriterEntityFactory::createCell($aCountry->FTCountryName),
        ];
        /** add multiple rows at a time */
        $aMultipleRows = [
            WriterEntityFactory::createRow($aRow),
        ];
        $oWriter->addRows($aMultipleRows); 
        }
        $oWriter->close();
	}

    // public function read()
    // {	        
    //     try {
        
    //         //Lokasi file excel       
    //         $file_path = "C:/Users/Sooksanti/Desktop/New folder/test.xlsx";                     
    //         $reader = ReaderEntityFactory::createXLSXReader();; //set Type file xlsx
    //         $reader->open($file_path); //open the file          
        
    //         $i = 0; 
                                
    //         /**                  
    //          * Sheets Iterator. Kali aja multiple sheets                  
    //          **/
                       
    //         foreach ($reader->getSheetIterator() as $sheet) {
    //             //Rows iterator                
    //             foreach ($sheet->getRowIterator() as $row) {
    //                 $value = $row->toArray();
                    
    //                 $name = $value[1];
    //                 if ($name != 'Country') {
    //                     print_r($value); 
    //                 }


    //         $i++;
    //     }
    //         }         
    //         $reader->close();
        
    // } catch (Exception $e) {

    //     echo $e->getMessage();
    //     exit;   
    // }


    // }
}


