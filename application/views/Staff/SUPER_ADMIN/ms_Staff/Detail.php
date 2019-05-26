<?php $this->load->view('Staff/SUPER_ADMIN/header'); ?> 

<?php
if ($isLengkap == 1) {

    if ($qdata) {
        foreach ($qdata as $rowdata) {
            $id = $rowdata->StaffID;
            $name = $rowdata->StaffName;
            $email = $rowdata->StaffEmail;
            $username = $rowdata->StaffUsername;

            $StaffBirthDate = date_format(date_create($rowdata->StaffBirthDate), 'l jS F Y');

            $StaffPicture = $rowdata->StaffPicture;
            $address = $rowdata->StaffAddress . ", "
                    . $rowdata->VName . ", "
                    . $rowdata->DName . ", "
                    . $rowdata->RName . ", "
                    . $rowdata->PName . ", "
                    . $rowdata->StaffZipCode;
            $phone = $rowdata->StaffPhoneNum;
            $StaffGender = $rowdata->StaffGender;

            if ($rowdata->CreatedID) {
                $createdByID = $rowdata->CreatedID;
            } else {
                $createdByID = "-";
            }

            if ($rowdata->CreatedName) {
                $createdByName = $rowdata->CreatedName;
            } else {
                $createdByName = "-";
            }

            if ($rowdata->StaffCreatedDate) {
                $createdDate = $rowdata->StaffCreatedDate;
            } else {
                $createdDate = "-";
            }

            if ($rowdata->ModifiedID) {
                $modifiedBy = $rowdata->ModifiedID;
            } else {
                $modifiedBy = "-";
            }
            if ($rowdata->ModifiedName) {
                $modifiedName = $rowdata->ModifiedName;
            } else {
                $modifiedName = "-";
            }

            if ($rowdata->StaffModifiedDate) {
                $modifiedDate = $rowdata->StaffModifiedDate;
            } else {
                $modifiedDate = "-";
            }
            if ($rowdata->StaffLastAccess) {
                $lastAccess = date_format(date_create($rowdata->StaffLastAccess), 'l jS F Y \o\n g:ia');
            } else {
                $lastAccess = "-";
            }

            $id_role = $rowdata->RoleID;
            $name_role = $rowdata->RoleName;
        }
    }
} else if ($isLengkap == 0) {
    if ($qdata) {
        foreach ($qdata as $rowdata) {
            $id = $rowdata->StaffID;
            $name = $rowdata->StaffName;
            $email = $rowdata->StaffEmail;
            $StaffBirthDate = "-";
            $StaffPicture = "default.jpg";
            $address = "-";
            $phone = $rowdata->StaffPhoneNum;
            $StaffGender = $rowdata->StaffGender;

            if ($rowdata->StaffUsername) {
                $username = $rowdata->StaffUsername;
            } else {
                $username = "-";
            }
            if ($rowdata->CreatedID) {
                $createdByID = $rowdata->CreatedID;
            } else {
                $createdByID = "-";
            }

            if ($rowdata->CreatedName) {
                $createdByName = $rowdata->CreatedName;
            } else {
                $createdByName = "-";
            }

            if ($rowdata->StaffCreatedDate) {
                $createdDate = $rowdata->StaffCreatedDate;
            } else {
                $createdDate = "-";
            }

            if ($rowdata->ModifiedID) {
                $modifiedBy = $rowdata->ModifiedID;
            } else {
                $modifiedBy = "-";
            }
            if ($rowdata->ModifiedName) {
                $modifiedName = $rowdata->ModifiedName;
            } else {
                $modifiedName = "-";
            }

            if ($rowdata->StaffModifiedDate) {
                $modifiedDate = $rowdata->StaffModifiedDate;
            } else {
                $modifiedDate = "-";
            }
            if ($rowdata->StaffLastAccess) {
                $lastAccess = $rowdata->StaffLastAccess;
            } else {
                $lastAccess = "-";
            }

            $id_role = $rowdata->RoleID;
            $name_role = $rowdata->RoleName;
        }
    }
}
?> 

<!-- Single pro tab start-->
<div class="single-product-tab-area mg-tb-15">
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#description"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $title ?></a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <h1>Biodata</h1>
                                                <hr>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Profile Photo</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-3">
                                                            <a  class="thumbnail">
                                                                <img src="<?php echo base_url('gambar/' . $StaffPicture); ?>" style="width: 200px; height: 200px; margin-left: 10px; margin-right: 10px; margin-top: 10px ; margin-down:10px; " >
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--NAMA GAMES KE 1--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">NIK</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $id ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--NAMA GAMES KE 1--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Name</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $name ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Username</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $username ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Role</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $name_role ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--NAMA GAMES KE 1--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Email</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $email; ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Phone Number</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $phone ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--NAMA GAMES KE 2--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Gender</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $StaffGender ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--NAMA GAMES KE 1--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Birth Date</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $StaffBirthDate; ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Address</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $address; ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--NAMA GAMES KE 2--> 


                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <h1>Detail Information</h1>
                                                <hr>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Last Login</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $lastAccess ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>

                                                <h4>Created By</h4>
                                                <hr>
                                                <br>
                                                <!--NAMA GAMES KE 1--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Created By</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $createdByID ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--NAMA GAMES KE 1--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Created Name</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $createdByName; ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Created Date</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo date_format(date_create($createdDate), 'l jS F Y \o\n g:ia'); ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <h4>Last Modified By</h4>
                                                <hr>
                                                <br>
                                                <!--NAMA GAMES KE 2--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Modifier NIK</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $modifiedBy ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Modifier Name</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $modifiedName ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--NAMA GAMES KE 2--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Modified Date</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo date_format(date_create($modifiedDate), 'l jS F Y \o\n g:ia'); ?> </label> </b>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                <button class="btn btn-primary waves-effect waves-light m-r-10" onClick="window.location.href = '<?php echo base_url(); ?>Staff';return false;">Back to List</button>

                                            </div>
                                        </div>
                                    </div>
                                </form> 

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /container --> 
<?php $this->load->view('Staff/SUPER_ADMIN/footer'); ?>
<script>
    $(document).ready(function () {
        $('#email').change(function () {
            var email = $('#email').val();
            if (email != '')
            {
                $.ajax({
                    url: "<?php echo base_url(); ?>index.php/Staff/check_email_avalibility",
                    method: "POST",
                    data: {email: email},
                    success: function (data) {
                        $('#email_result').html(data);
                    }
                });
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
</script>
<script type="text/javascript">
    $('#email_address').on('keypress', function () {
        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
        if (!re) {
            $('#error').show();
        } else {
            $('#error').hide();
        }
    })
</script>

<script type="text/javascript">
    function minmax(value, min, max)
    {
        if (parseInt(value) < min || isNaN(parseInt(value)))
            return min;
        else if (parseInt(value) > max)
            return max;
        else
            return value;
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
//                $("#province").chosen();
//                $("#regency").chosen();
//                $("#district").chosen();
//                /* Populate data to regency dropdown */
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