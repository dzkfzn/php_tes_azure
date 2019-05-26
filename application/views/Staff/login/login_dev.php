<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login | jeweler - Material Admin Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
                    ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/Admin/img/favicon.ico">
        <!-- Google Fonts
                    ============================================ -->
        <link href="<?php echo base_url(); ?>assets/Admin/https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
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
        <!-- forms CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/form/all-type-forms.css">
        <!-- style CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/style.css">
        <!-- responsive CSS
                    ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/responsive.css">
        <!-- modernizr JS
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>


    <body>
        <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url(); ?>assets/Admin/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

        <div class="color-line"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="text-center m-b-md custom-login">
                        <br>
                        <br>
                        <h3>GameGevity Staff Login Page</h3>
                        <!--<p>This is the best app ever!</p>-->
                        <?php
                        if ($this->session->flashdata('true'))
                            echo $this->session->flashdata('true');
                        else if ($this->session->flashdata('err'))
                            echo $this->session->flashdata('err');
                        ?>
                    </div>
                    <div class="hpanel">
                        <div class="panel-body">
                            <form action="<?php echo base_url('login/auth'); ?>" id="loginForm" method="post">
                                <?php echo $this->session->flashdata('msg'); ?>
                                <div class="form-group">
                                    <label class="control-label" for="@username">Username</label>
                                    <input type="text" placeholder="@username" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                                    <!--<span class="help-block small">Your unique username to app</span>-->
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="password">Password</label>
                                    <input type="password" title="Please enter your password" placeholder="password" required="" value="" name="password" id="password" class="form-control">
                                    <!--<span class="help-block small">Yur strong password</span>-->
                                </div>
                                <div class="checkbox login-checkbox">
                                    <label>
                                        <input type="checkbox" class="i-checks"> Remember me </label>
                                    <p class="help-block small">(if this is a private computer)</p>
                                </div>
                                <button class="btn btn-success btn-block loginbtn">Login</button>
                                <!--<a class="btn btn-default btn-block" href="<?php echo base_url(); ?>assets/Admin/#">Register</a>-->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <p>Copyright &copy; 2018 <a href="<?php echo base_url(); ?>assets/Admin/https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                </div>
            </div>
        </div>

        <!-- jquery
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/vendor/jquery-1.11.3.min.js"></script>
        <!-- bootstrap JS
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/bootstrap.min.js"></script>
        <!-- wow JS
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/wow.min.js"></script>
        <!-- price-slider JS
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/owl.carousel.min.js"></script>
        <!-- sticky JS
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/jquery.sticky.js"></script>
        <!-- scrollUp JS
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/jquery.scrollUp.min.js"></script>
        <!-- mCustomScrollbar JS
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/Admin/js/scrollbar/mCustomScrollbar-active.js"></script>
        <!-- metisMenu JS
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/metisMenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/Admin/js/metisMenu/metisMenu-active.js"></script>
        <!-- tab JS
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/tab.js"></script>
        <!-- icheck JS
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/icheck/icheck.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/Admin/js/icheck/icheck-active.js"></script>
        <!-- plugins JS
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/plugins.js"></script>
        <!-- main JS
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/main.js"></script>
    </body>

</html>