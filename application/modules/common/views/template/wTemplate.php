<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Adaworkshop</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="<?php echo site_url('application/modules/common/assets/css/global/adminlte.min.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('application/modules/common/assets/css/global/daterangepicker.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('application/modules/common/assets/css/global/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('application/modules/common/assets/css/global/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('application/modules/common/assets/css/global/tempusdominus-bootstrap-4.min.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('application/modules/common/assets/css/global/jquery-ui.css') ?>">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="application/modules/common/assets/images/AdaLogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Adaworkshop</span>
            </a>

            <div class="sidebar">

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="#" id="oahMNULangues" class="nav-link">
                                <i class='fas fa-edit'></i>
                                <p>
                                    Langues
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="oahMNUUploadimages" class="nav-link">
                                <i class='fas fa-edit'></i>
                                <p>
                                    Uploadimages
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" id="oahMNUDatatable" class="nav-link">
                                <i class='fas fa-edit'></i>
                                <p>
                                    Row-manager
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" id="oahMNUInsertUpdateDelete" class="nav-link">
                                <i class='fas fa-edit'></i>
                                <p>
                                    CRUD
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" id="oahMNUDatepicker" class="nav-link">
                                <i class='fas fa-edit'></i>
                                <p>
                                    Date Picker
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" id="oahMNUCss" class="nav-link">
                                <i class='fas fa-edit'></i>
                                <p>
                                    CSS
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" id="oahMNUCovidApi" class="nav-link">
                                <i class='fas fa-edit'></i>
                                <p>
                                    Covid Api
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" id="oahMNUObjrelation" class="nav-link">
                                <i class='fas fa-edit'></i>
                                <p>
                                    Object Relations
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" id="oahMNUCondition" class="nav-link">
                                <i class='fas fa-edit'></i>
                                <p>
                                    Condition
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" id="oahMNUKoolReport" class="nav-link">
                                <i class='fas fa-edit'></i>
                                <p>
                                    Kool Report
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" id="oahMNUAll" class="nav-link">
                                <i class='fas fa-edit'></i>
                                <p>
                                    ALL
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">

                    <div id="odvMNUContent">

                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="<?php echo site_url('application/modules/common/assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo site_url('application/modules/common/assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo site_url('application/modules/common/assets/js/moment.min.js') ?>"></script>
    <script src="<?php echo site_url('application/modules/common/assets/js/daterangepicker.js') ?>"></script>
    <script src="<?php echo site_url('application/modules/common/assets/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
    <script src="<?php echo site_url('application/modules/common/assets/js/adminlte.js') ?>"></script>
    <script src="<?php echo site_url('application/modules/common/assets/scripts/jAdaworkshop.js') ?>"></script>
    <script src="<?php echo site_url('application/modules/common/assets/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo site_url('application/modules/common/assets/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo site_url('application/modules/common/assets/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?php echo site_url('application/modules/common/assets/js/responsive.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo site_url('application/modules/common/assets/js/jquery-ui.min.js') ?>"></script>
    <script>
    $(document).ready(function() {
        JSxMNULoadwLangues();
    });

    $("#oahMNULangues").click(function() {
        JSxMNULoadwLangues()
    });

    $("#oahMNUUploadimages").click(function() {
        JSxMNUUploadimg()
    });

    $("#oahMNUDatatable").click(function() {
        JSxMNULoadwTable()
    });

    $("#oahMNUInsertUpdateDelete").click(function() {
        JSxMNULoadwInsertUpdateDelete()
    });

    $("#oahMNUDatepicker").click(function() {
        JSxMNULoadwDatepicker()
    });

    $("#oahMNUCss").click(function() {
        JSxMNULoadwCss()
    });

    $("#oahMNUCovidApi").click(function() {
        JSxMNUCovid()
    });

    $("#oahMNUObjrelation").click(function() {
        JSxMNUObjrelations()
    });

    $("#oahMNUCondition").click(function() {
        JSxMNUCondition()
    });

    $("#oahMNUKoolReport").click(function() {
        window.open('common/reports/cReport/index', '_blank');
    });

    $("#oahMNUAll").click(function() {
        JSxMNUAll()
    });
    </script>
</body>

</html>