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

        $border = (new BorderBuilder())
        ->setBorderBottom(Color::BLACK, Border::WIDTH_THIN, Border::STYLE_SOLID)
        ->build();

                /** Create a style with the StyleBuilder */
                $style = (new StyleBuilder())
                ->setFontBold()
                ->setFontSize(14)
                ->setFontColor(Color::BLACK)
                ->setShouldWrapText()
                ->setBorder($border)
                ->setCellAlignment(CellAlignment::RIGHT)
                ->setBackgroundColor(Color::YELLOW)
                ->build();

        $fileName = 'test.xlsx';
        $writer->openToBrowser($fileName); // stream data directly to the browser
        $cells = [
            WriterEntityFactory::createCell('ID',$style),
            WriterEntityFactory::createCell('Country',$style),
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

    public function read()
    {	        
        try {
        
            //Lokasi file excel       
            $file_path = "C:/Users/Sooksanti/Desktop/New folder/test.xlsx";                     
            $reader = ReaderEntityFactory::createXLSXReader();; //set Type file xlsx
            $reader->open($file_path); //open the file          
        
            $i = 0; 
                                
            /**                  
             * Sheets Iterator. Kali aja multiple sheets                  
             **/
                       
            foreach ($reader->getSheetIterator() as $sheet) {
                //Rows iterator                
                foreach ($sheet->getRowIterator() as $row) {
                    $value = $row->toArray();
                    
                    $name = $value[1];
                    if ($name != 'Country') {
                        print_r($value); 
                    }


            $i++;
        }
            }         
            $reader->close();
        
    } catch (Exception $e) {

        echo $e->getMessage();
        exit;   
    }


    }
}


