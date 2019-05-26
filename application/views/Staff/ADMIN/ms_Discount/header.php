<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ea</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
   
        
    <!-- Delete -->
    <link href="<?php echo base_url(); ?>assets/Admin/css/alertBox.css" rel="stylesheet">

          <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/Admin/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/main.css">
    
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/animate.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/calendar/fullcalendar.print.min.css">
    <!-- x-editor CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/editor/select2.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/editor/datetimepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/editor/x-editor-style.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/data-table/bootstrap-editable.css">
     <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/alerts.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/responsive.css">

    <!-- touchspin CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/touchspin/jquery.bootstrap-touchspin.min.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/datapicker/datepicker3.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/form/themesaller-forms.css">
    <!-- colorpicker CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/colorpicker/colorpicker.css">
    <!-- select2 CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/select2/select2.min.css">
    <!-- chosen CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/chosen/bootstrap-chosen.css">
    <!-- ionRangeSlider CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/ionRangeSlider/ion.rangeSlider.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/ionRangeSlider/ion.rangeSlider.skinFlat.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/Admin/js/vendor/modernizr-2.8.3.min.js"></script>
        
        
        
        
        
        
        
        
        
    </head>

    <body>
        <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url(); ?>assets/Admin/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="index.php"><img class="main-logo" src="<?php echo base_url(); ?>assets/Admin/img/logo/game.png" alt="" /></a>
                    <strong><img src="<?php echo base_url(); ?>assets/Admin/img/logo/game.png" alt="" /></strong>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <?php $this->load->view('Staff/ADMIN/MenuAdmin'); ?>

                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="index.html"><img class="main-logo" src="<?php echo base_url(); ?>assets/Admin/img/logo/game.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-advance-area">
                <div class="header-top-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="header-top-wraper">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                            <div class="menu-switcher-pro">
                                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="fa fa-bars"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                            <div class="header-top-menu tabl-d-n">
                                                <ul class="nav navbar-nav mai-top-nav">
                                                    <li class="nav-item"><a href="<?php echo base_url(); ?>assets/Admin/#" class="nav-link">Home</a>
                                                    </li>
                                                    <li class="nav-item"><a href="<?php echo base_url(); ?>assets/Admin/#" class="nav-link">About</a>
                                                    </li>
                                                    <li class="nav-item"><a href="<?php echo base_url(); ?>assets/Admin/#" class="nav-link">Services</a>
                                                    </li>
                                                    <li class="nav-item"><a href="<?php echo base_url(); ?>assets/Admin/#" class="nav-link">Support</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <div class="header-right-info">
                                                <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                    <li class="nav-item dropdown">
                                                        <a href="<?php echo base_url(); ?>assets/Admin/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i  aria-hidden="true"></i></span></a>
                                                        
                                                    </li>
                                                    <li class="nav-item"><a href="<?php echo base_url(); ?>assets/Admin/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i  aria-hidden="true"></i></a>
                                                                                                            </li>
                                                    <li class="nav-item">
                                                        <a href="<?php echo base_url(); ?>assets/Admin/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                            <span class="admin-name">Advanda Cro</span>
                                                            
                                                        </a>
                                                        
                                                    </li>
                                                    <li><a href="<?php echo base_url(); ?>assets/Admin/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"></a>

                                                       
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul class="mobile-menu-nav">
                                            <?php $this->load->view('Staff/ADMIN/MenuAdmin'); ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu end -->
                <div class="breadcome-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list single-page-breadcome">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="breadcome-heading">
                                                <form role="search" class="">
                                                    <input type="text" placeholder="Search..." class="form-control">
                                                    <a href="<?php echo base_url(); ?>assets/Admin/"><i class="fa fa-search"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <ul class="breadcome-menu">
                                                <li><a href="<?php echo base_url(); ?>assets/Admin/#">Home</a> <span class="bread-slash">/</span>
                                                </li>
                                                <li><span class="bread-blod">  <?php
                                                        try {
                                                            if (isset($master)) {
                                                                echo $master;
                                                            }
                                                        } catch (Exception $e) {
                                                            
                                                        }
                                                        ?> Data Table</span> <span class="bread-slash">/</span>
                                                </li>
                                                <li><span class="bread-blod"><?php
                                                        try {
                                                            if (isset($title)) {
                                                                echo $title;
                                                            }
                                                        } catch (Exception $e) {
                                                            
                                                        }
                                                        ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>