<?php
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\BarChart;
?>
<html>
    <head>
        <title>MyReport</title></title>
    </head>
    <body>
    <div class="container box-container">
        <h1>Kool Report</h1>
        <?php
        Table::create(array(
            "dataStore"=>$this->dataStore("emp"),
            "cssClass"=>array(
              "table"=>"table table-hover table-bordered",
          )
        ));
        ?>
        </div>
    </body>
</html>