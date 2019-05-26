<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Data Staff</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
                    ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/Admin/img/favicon.ico">
        <!-- Google Fonts
                    ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
        <!-- Bootstrap CSS
                    ============================================ -->
        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/bootstrap.min.css">-->
        <!--Bootstrap CSS-->        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  

        <!--============================================--> 
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
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/style.css">
        <!-- responsive CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/responsive.css">
        <!-- modernizr JS
                    ============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <!-- summernote CSS
                ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/summernote/summernote.css">

        <!-- chosen CSS
                   ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/chosen/bootstrap-chosen.css">

        <!--ddl alamat-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- modals CSS============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/modals.css">

        <!-- forms CSS                ============================================ -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/form/all-type-forms.css">
        <!--qtip-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/Admin/qtip/jquery.qtip.css"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/Admin/qtip/jquery.qtip.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/Admin/qtip/jquery.qtip.min.css"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/Admin/qtip/jquery.qtip.min.js"></script>
        <style>
            label[id*='CustomID']::after {content: "*"; color:red;} 

            .block {
                display: block;
                width: 100%;
                border: none;
                background-color: #ff1919;
                color: white;
                padding: 14px 28px;
                font-size: 16px;
                cursor: pointer;
                text-align: center;
            }

            .block:hover {
                background-color: #cc0000;
                color: white;
            }

        </style>

        <style>
            /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFVZ0e.ttf) format('truetype');
            }
            *,
            *:before,
            *:after {
                box-sizing: border-box;
            }

            .setting {
                background: #fff;
                margin: 0 auto 3px;
                padding: 12px;
                width: 300px;
            }
            .setting h2 {
                color: #999;
                font-size: 14px;
                font-weight: 400;
                margin: 0 0 6px;
                line-height: 24px;
            }
            .setting a[data-action] {
                cursor: pointer;
                color: #555;
                font-size: 14px;
                line-height: 24px;
                transition: color 0.2s;
            }
            .setting a[data-action] i {
                width: 1.25em;
                text-align: center;
            }
            .setting a[data-action]:hover {
                color: #f80;
            }
            .setting a[data-action].disabled {
                opacity: 0.35;
                cursor: default;
            }
            .setting a[data-action].disabled:hover {
                color: #555;
            }
            .image_picker .settings_wrap {
                overflow: hidden;
                position: relative;
            }
            .image_picker .settings_wrap .drop_target,
            .image_picker .settings_wrap .settings_actions {
                float: left;
            }
            .image_picker .settings_wrap .drop_target {
                margin-right: 18px;
            }
            .image_picker .settings_wrap .settings_actions {
                margin-top: 12px;
            }
            .settings_actions.vertical a {
                display: block;
            }
            .drop_target {
                position: relative;
                cursor: pointer;
                background: hsl(0, 0%, 90%);
                border-top: 1px solid hsl(0, 0%, 80%);
                border-radius: 4px;
                width: 72px;
                height: 72px;
                padding: 4px 6px 6px;
                transition: all 0.2s;
            }
            .drop_target input[type="file"] {
                visibility: hidden;
            }
            .drop_target:before {
                content: '\f0ee';
                font-family: FontAwesome;
                position: absolute;
                display: block;
                width: 60px;
                line-height: 60px;
                text-align: center;
                font-size: 32px;
                color: rgba(0, 0, 0, 0.3);
                transition: color 0.2s;
            }
            .drop_target:hover,
            .drop_target.dropping {
                background: #f80;
                border-top-color: #cc6d00;
            }
            .drop_target:hover:before,
            .drop_target.dropping:before {
                color: rgba(0, 0, 0, 0.6);
            }
            .drop_target .image_preview {
                width: 100%;
                height: 100%;
                background: no-repeat center;
                background-size: contain;
                position: relative;
                z-index: 2;
            }
            .image_details {
                width: 192px;
                padding: 4px;
                background: hsl(0, 0%, 90%);
                border-radius: 4px;
                position: absolute;
                top: 0;
                left: 84px;
                z-index: 5;
                opacity: 0;
                pointer-events: none;
                transition: opacity 0.4s;
            }
            .dropped ~ .image_details {
                opacity: 1;
                pointer-events: all;
            }
            .image_details:before {
                content: '';
                display: block;
                width: 0;
                height: 0;
                border: 6px solid transparent;
                border-right-color: hsl(0, 0%, 90%);
                position: absolute;
                left: -12px;
                top: 10px;
            }
            .image_details .input_line {
                display: block;
                overflow: hidden;
                margin-bottom: 4px;
            }
            .image_details .input_line:last-of-type {
                margin-bottom: 0;
            }
            .image_details .input_line span,
            .image_details .input_line input {
                float: left;
                line-height: 24px;
            }
            .image_details .input_line span {
                font-size: 12px;
                color: #666;
                width: 20%;
            }
            .image_details .input_line input[type="text"] {
                width: 100%;
                color: #444444;
                appearance: none;
                border: 1px solid hsl(0, 0%, 90%);
                border-radius: 3px;
                background: #fff;
                height: 24px;
                line-height: 18px;
                padding: 3px 5px;
                font-size: 14px;
                transition: border 0.2s;
            }
            .image_details .input_line input[type="text"]:hover,
            .image_details .input_line input[type="text"]:focus {
                outline: 0;
                border: 1px solid #f80;
            }
            .image_details .input_line input[type="text"]::-webkit-input-placeholder {
                font-size: 14px;
                color: #999;
            }
            .image_details a.confirm {
                position: absolute;
                right: -12px;
                top: 50%;
                margin-top: -12px;
                display: block;
                width: 21px;
                height: 21px;
                border-radius: 100%;
                background: #eee;
                line-height: 23px;
                text-align: center;
                font-size: 16px;
            }

            .setting:last-of-type {
                height: 1500px;
            }

            .block {
                display: block;
                width: 100%;
                border: none;
                background-color: #ff1919;
                color: white;
                padding: 14px 28px;
                font-size: 16px;
                cursor: pointer;
                text-align: center;
            }

            .block:hover {
                background-color: #cc0000;
                color: white;
            }
            .card {
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                width: 40%;
            }

            .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }

            .container {
                padding: 2px 16px;
            }

            input[type="file"] {
                display: none;
            }
            .custom-file-upload {
                border: 1px solid #ccc;
                display: inline-block;
                padding: 6px 12px;
                cursor: pointer;
            }

            .thumbnail {
                border: 0;
            }
            
            
        </style>

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
                            <?php $this->load->view('Staff/SUPER_ADMIN/MenuSuperAdmin'); ?>

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
                                            <?php $this->load->view('Staff/SUPER_ADMIN/MenuSuperAdmin'); ?>
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