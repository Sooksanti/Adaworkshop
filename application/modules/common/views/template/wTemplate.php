<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Adaworkshop</title>
    <!-- Font Awesome Icons -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="application/modules/common/assets/css/adminlte.min.css">
    <link rel="stylesheet" href="application/modules/common/assets/css/daterangepicker.css">
    <link rel="stylesheet" href="application/modules/common/assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="application/modules/common/assets/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="application/modules/common/assets/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="application/modules/common/assets/css/jquery-ui.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="application/modules/common/assets/images/AdaLogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Adaworkshop</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
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
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">

                    <div id="odvMNUContent">

                    </div>
                </div>
            </div>
        </div>

        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="application/modules/common/assets/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="application/modules/common/assets/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="application/modules/common/assets/js/moment.min.js"></script>
    <script src="application/modules/common/assets/js/daterangepicker.js"></script>
    <script src="application/modules/common/assets/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="application/modules/common/assets/js/adminlte.js"></script>
    <script src="application/modules/common/assets/scripts/jAdaworkshop.js"></script>
    <script src="application/modules/common/assets/js/jquery.dataTables.min.js"></script>
    <script src="application/modules/common/assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="application/modules/common/assets/js/dataTables.responsive.min.js"></script>
    <script src="application/modules/common/assets/js/responsive.bootstrap4.min.js"></script>
    <script src="application/modules/common/assets/js/jquery-ui.min.js"></script>
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