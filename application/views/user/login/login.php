<?php
if (isset($msg)) {  // Check if $msg is not empty
    echo '<div class="statusmsg">' . $msg . '</div>'; // Display our message and wrap it with a div with the class "statusmsg".
}
?>
<?php
require_once APPPATH . 'config/settings.php';

$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode('http://localhost:10/PRG5/PROJECT/GameGevity/index.php/products') . '&response_type=code&client_id=' . '348984212294-2r54goe1t29onr0bbbrgo6tgqcolrcfm.apps.googleusercontent.com' . '&access_type=online';
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login V5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->  
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/Regis/Login_v5/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Regis/Login_v5/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Regis/Login_v5/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Regis/Login_v5/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Regis/Login_v5/vendor/animate/animate.css">
        <!--===============================================================================================-->  
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Regis/Login_v5/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Regis/Login_v5/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Regis/Login_v5/vendor/select2/select2.min.css">
        <!--===============================================================================================-->  
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Regis/Login_v5/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Regis/Login_v5/css/util.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Regis/Login_v5/css/main.css">
        <!--===============================================================================================-->
    </head>
    <body>

        <style type="text/css">
            #wrap .statusmsg{
                font-size: 12px; /* Set message font size  */
                padding: 3px; /* Some padding to make some more space for our text  */
                background: #EDEDED; /* Add a background color to our status message   */
                border: 1px solid #DFDFDF; /* Add a border arround our status message   */
            }
        </style>
        <div class="limiter">
            <div class="container-login100" style="background-image: url('<?php echo base_url(); ?>assets/Regis/Login_v5/images/bg-01.jpg');">
                <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                    <?php
                    if ($this->session->flashdata('true'))
                        echo $this->session->flashdata('true');
                    else if ($this->session->flashdata('err'))
                        echo $this->session->flashdata('err');
                    ?>
                    <form class="login100-form validate-form flex-sb flex-w" action="<?php echo base_url() ?>login_user/auth" method="post">
                        <span class="login100-form-title p-b-53">
                            LOG-IN
                        </span>
                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                Email
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Email is required">
                            <input class="input100" type="Email" name="Email">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="p-t-13 p-b-9">
                            <span class="txt1">
                                Password
                            </span>

                            <a href="#" class="txt2 bo1 m-l-5">
                                Forgot?
                            </a>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="pass">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-login100-form-btn m-t-17">
                            <button class="login100-form-btn">
                                LOGIN

                            </button>
                        </div>
                        <span  class="txt2">
                            <BR>
                            <hr/>
                            ------------------------------- OR -------------------------------
                            <hr/>

                        </span>
                        <hr><br>
                        <a href="#" class="btn-face m-b-20">
                            <i class="fa fa-facebook-official"></i>
                            Facebook
                        </a>

                        <a href="<?= 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode('http://localhost:10/PRG5/PROJECT/GameGevity/index.php/products') . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>" class="btn-google m-b-20">
                            <img src="<?php echo base_url(); ?>assets/Regis/Login_v5/images/icons/icon-google.png" alt="GOOGLE">
                            Google
                        </a>


                        <div class="w-full text-center p-t-55">
                            <span class="txt2">
                                Not a member?
                            </span>

                            <a href="<?php echo base_url('register') ?>" class="txt2 bo1">
                                Sign up now
                            </a>
                        </div>

                    </form>
                </div>

            </div>
        </div>



        <div id="dropDownSelect1"></div>

        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/Regis/Login_v5/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/Regis/Login_v5/vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/Regis/Login_v5/vendor/bootstrap/js/popper.js"></script>
        <script src="<?php echo base_url(); ?>assets/Regis/Login_v5/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/Regis/Login_v5/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/Regis/Login_v5/vendor/daterangepicker/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/Regis/Login_v5/vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/Regis/Login_v5/vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/Regis/Login_v5/js/main.js"></script>

    </body>
</html>