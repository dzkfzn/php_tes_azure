<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Register | jeweler - Material Admin Template</title>
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

        <!-- image 
                    ============================================ -->
        <!-- datapicker CSS
                           ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/datapicker/datepicker3.css">
        <!-- chosen CSS
                 ============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/chosen/bootstrap-chosen.css">
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

        </style>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    </head>
    <body>



        <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url(); ?>assets/Admin/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

        <div class="color-line"></div>
        <div class="container-fluid" id="asd">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
                <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="text-center custom-login">
                        <br>
                        <br>
                        <br>
                        <br>
                        <h1>Complete your Registration</h1>
                        <p>All field must be filled</p>
                    </div>
                    <div class="hpanel">
                        <div class="panel-body">
                            <form action="<?php echo base_url() ?>staff/registrasi" method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="text-center custom-login">
                                        <h3>Your Official Profile Picture</h3>
                                    </div>
                                    <hr>

                                    <div class="setting image_picker form-group col-lg-12 center">

                                        <label id="CustomID" >Profile Photo</label>
                                        <div class="settings_wrap">
                                            <label id="CustomID" class="drop_target">
                                                <div class="image_preview"></div>
                                                <input accept="image/*" name="StaffImage" required class="form-control" id="inputFile" type="file"/>
                                            </label>
                                        </div>
                                        <div class="settings_actions">
                                            <a class="disabled" data-action="remove_current_image"><i class="fa fa-ban"></i> Remove Current Image</a>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <hr>
                                        <br>
                                        <br>
                                        <div class="text-center custom-login">
                                            <h3>Detail Information</h3>
                                        </div>
                                        <hr>

                                        <label id="CustomID">NIK</label>
                                        <input readonly type="text" name="StaffID" value="<?php echo $StaffID ?>" class="form-control" >
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label id="CustomID">Name</label>
                                        <input readonly type="text" name="StaffName" value="<?php echo $StaffName ?>" class="form-control">
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label id="CustomID">Username</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text"  required name="StaffUsername" onkeypress="return RestrictSpace()" placeholder="Username" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label id="CustomID">Password</label>
                                        <input type="password" onkeypress="return RestrictSpace()" required name="StaffPassword" id="pass1"  class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label id="CustomID">re-Password</label>
                                        <input type="password" onkeypress="return RestrictSpace()" required id="pass2" onkeyup="checkPass(); return false;" class="form-control">
                                        <span id="confirmMessage"  class="confirmMessage"></span>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label id="CustomID">Birth Date</label>
                                        <div class="data-custon-pick" id="data_1">
                                            <div class="input-group date " >
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="text" name="StaffBirthDate" required readonly="readonly"  placeholder="Choose Date" class="form-control" >

                                            </div>
                                        </div>
                                        <br>
                                        <hr>

                                    </div>
                                    <div class="form-group col-lg-12">
                                        <br>
                                        <br>
                                        <div class="text-center custom-login">
                                            <h3>Detail Address</h3>
                                        </div>
                                        <hr>
                                        <label id="CustomID">Province</label>
                                        <select id="province" name="StaffProvince" class="chosen-select" data-placeholder="Select Province">
                                            <option value="0"></option>

                                            <?php
                                            if (!empty($provinces)) {
                                                foreach ($provinces as $row) {
                                                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                                }
                                            } else {
                                                echo '<option value="">province not available</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label id="CustomID">Regency</label>
                                        <select id="regency" required name="StaffRegency" class="chosen-select" data-placeholder="Select Regency">
                                            <option value="0"></option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label id="CustomID">District</label>
                                        <select id="district" required name="StaffDistrict" class="chosen-select" data-placeholder="Select District">
                                            <option value="0"></option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label id="CustomID">Village</label>
                                        <select id="village" required name="StaffVillage" class="chosen-select" data-placeholder="Select Village">
                                            <option value="0"></option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label id="CustomID">Zip Code</label>
                                        <input class="form-control" required name="StaffZipCode" type="text" value=""/>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label id="CustomID">Detail Address</label>
                                        <textarea name="StaffAddress" required class="form-control"></textarea>
                                        <br>
                                        <hr>
                                    </div>


                                </div>
                                <div class="text-center">
                                    <button id="Button" class="btn btn-success block">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright &copy; 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
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

        <!-- image 
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/image/js/index.js"></script>

        <!-- chosen JS
            ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/chosen/chosen.jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/Admin/js/chosen/chosen-active.js"></script>
        <!-- datapicker JS
                    ============================================ -->
        <script src="<?php echo base_url(); ?>assets/Admin/js/datapicker/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets/Admin/js/datapicker/datepicker-active.js"></script>
    </body>

</html>

<script type="text/javascript">
                                            $(document).ready(function () {

                                                $('#province').on('change', function () {
                                                    var provinceID = $(this).val();
                                                    if (provinceID) {
                                                        $.ajax({
                                                            type: 'POST',
                                                            url: '<?php echo base_url(); ?>index.php/dropdowns/getRegencies',
                                                            data: 'province_id=' + provinceID,
                                                            success: function (data) {
                                                                $('#regency').html('<option value="0"></option>');
                                                                $('#district').html('<option value="0"></option>').trigger("chosen:updated");
                                                                $('#village').html('<option value="0"></option>').trigger("chosen:updated");
                                                                var dataObj = jQuery.parseJSON(data);
                                                                if (dataObj) {
                                                                    $(dataObj).each(function () {
                                                                        var option = $('<option />');
                                                                        option.attr('value', this.id).text(this.name);
                                                                        $('#regency').append(option).trigger("chosen:updated");
                                                                    });
                                                                } else {
                                                                    $('#regency').html('<option value="">regency not available</option>');
                                                                }
                                                            }
                                                        });
                                                    } else {
                                                        $('#regency').html('<option value="0"></option>');
                                                        $('#district').html('<option value="0"></option>').trigger("chosen:updated");
                                                        $('#village').html('<option value="0"></option>').trigger("chosen:updated");
                                                    }
                                                });

                                                /* Populate data to district dropdown */
                                                $('#regency').on('change', function () {
                                                    var regencyID = $(this).val();
                                                    if (regencyID) {
                                                        $.ajax({
                                                            type: 'POST',
                                                            url: '<?php echo base_url(); ?>index.php/dropdowns/getDistricts',
                                                            data: 'regency_id=' + regencyID,
                                                            success: function (data) {
                                                                $('#district').html('<option value="0"></option>');
                                                                $('#village').html('<option value="0"></option>').trigger("chosen:updated");

                                                                var dataObj = jQuery.parseJSON(data);
                                                                if (dataObj) {
                                                                    $(dataObj).each(function () {
                                                                        var option = $('<option />');
                                                                        option.attr('value', this.id).text(this.name);
                                                                        $('#district').append(option).trigger("chosen:updated");
                                                                    });
                                                                } else {
                                                                    $('#district').html('<option value="">district not available</option>');
                                                                }
                                                            }
                                                        });
                                                    } else {
                                                        $('#district').html('<option value="0"></option>').trigger("chosen:updated");
                                                        $('#village').html('<option value="0"></option>').trigger("chosen:updated");

                                                    }
                                                });

                                                /* Populate data to district dropdown */
                                                $('#district').on('change', function () {
                                                    var districtID = $(this).val();
                                                    if (districtID) {
                                                        $.ajax({
                                                            type: 'POST',
                                                            url: '<?php echo base_url(); ?>index.php/dropdowns/getVillages',
                                                            data: 'district_id=' + districtID,
                                                            success: function (data) {
                                                                $('#village').html('<option value="0"></option>');

                                                                var dataObj = jQuery.parseJSON(data);
                                                                if (dataObj) {
                                                                    $(dataObj).each(function () {
                                                                        var option = $('<option />');
                                                                        option.attr('value', this.id).text(this.name);
                                                                        $('#village').append(option).trigger("chosen:updated");
                                                                    });
                                                                } else {
                                                                    $('#village').html('<option value="">villages not available</option>');
                                                                }
                                                            }
                                                        });
                                                    } else {
                                                        $('#village').html('<option value="0"></option>').trigger("chosen:updated");

                                                    }
                                                });

                                            });

</script>



<script type="text/javascript">

    function  isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;
        return true;
    }

    function onlyAlphabets(e, t) {
        try {
            if (window.event) {
                var charCode = window.event.keyCode;
            } else if (e) {
                var charCode = e.which;
            } else {
                return true;
            }

            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123 || e.charCode == 32))
                return true;
            else
                return false;
        } catch (err) {

            alert(err.Description);
        }

    }

    function ValidateEmailID(txtEmailID) {

        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (txtEmailID.value == "") {

            document.getElementById("error").style.display = "none";
            return true;
        } else if (filter.test(txtEmailID.value)) {

            document.getElementById("error").style.display = "none";
            return true;
        } else {

            document.getElementById("error").style.display = "block";
            return false;
        }

    }

    function RestrictSpace() {
        if (event.keyCode == 32) {
            return false;
        }
    }
</script>
<script type="text/javascript">



    function checkPass()
    {
        //Store the password field objects into variables ...
        var pass1 = document.getElementById('pass1');
        var pass2 = document.getElementById('pass2');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        //Compare the values in the password field 
        //and the confirmation field
        if (pass1.value == pass2.value) {
            //The passwords match. 
            //Set the color to the good color and inform
            //the user that they have entered the correct password 
            pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Passwords Match!";
            document.getElementById("Button").disabled = false;

        } else {
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Passwords Do Not Match!";
            document.getElementById("Button").disabled = true;

        }
    }
    ;

</script>

