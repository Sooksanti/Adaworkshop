<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'libraries/spout-3.1.0/src/Spout/Autoloader/autoload.php';
use Box\Spout\Common\Entity\Row;
use Box\Spout\Common\Entity\Style\Border;
use Box\Spout\Common\Entity\Style\CellAlignment;
use Box\Spout\Common\Entity\Style\Color;
use Box\Spout\Writer\Common\Creator\Style\BorderBuilder;
use Box\Spout\Writer\Common\Creator\Style\StyleBuilder;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;

class cExceltest extends MX_Controller
{

    //Functionality: export excel ข้อมูลจากตาราง TCNMcountry
    //Parameters:  -
    //Creator: 5/08/2020 Sooksanti(Non)
    //Last Modified :
    //Return : -
    //Return Type: -
    public function test()
    {
        $oWriter = WriterEntityFactory::createXLSXWriter();

        $oWriter->setShouldUseInlineStrings(true); // default (and recommended) value
        $oBorder = (new BorderBuilder())
            ->setBorderBottom(Color::BLACK, Border::WIDTH_THIN, Border::STYLE_SOLID)
            ->build();

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
        $oWriter->openToBrowser($tFileName);
        $aCells = [
            WriterEntityFactory::createCell('ID', $oStyle),
            WriterEntityFactory::createCell('Country', $oStyle),
        ];

        $oSingleRow = WriterEntityFactory::createRow($aCells);
        $oWriter->addRow($oSingleRow);

        $oQuery = $this->db->query("select * from TCNMcountry");
        $aData = $oQuery->result();
        foreach ($aData as $aCountry) {
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
}
