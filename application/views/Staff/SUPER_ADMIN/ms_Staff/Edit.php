<?php $this->load->view('Staff/SUPER_ADMIN/header'); ?> 

<?php {
    if ($qdata) {
        foreach ($qdata as $rowdata) {
            $id = $rowdata->StaffID;
            $name = $rowdata->StaffName;
            $email = $rowdata->StaffEmail;
            $username = $rowdata->StaffUsername;

            $StaffBirthDate = date_format(date_create($rowdata->StaffBirthDate), 'm/d/Y');

            $StaffPicture = $rowdata->StaffPicture;
            $phone = $rowdata->StaffPhoneNum;
            $address = $rowdata->StaffAddress;
            $village = $rowdata->StaffVillage;
            $district = $rowdata->StaffDistrict;
            $regencys = $rowdata->StaffRegency;
            $provinces = $rowdata->StaffProvince;
            $zipcode = $rowdata->StaffZipCode;
            $StaffGender = $rowdata->StaffGender;
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
                            <li class="active"><a href="#description"><i class="fa fa-edit" aria-hidden="true"></i> <?php echo $title ?></a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <form action="<?php echo base_url() ?>staff/form/<?php echo $aksi ?>" method="post" enctype="multipart/form-data">

                                    <div class="row">


                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <!--NIK-->

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label id="CustomID" class="login2 pull-left">NIK</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" required name="StaffID" readonly value="<?php echo $id ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label id="CustomID" class="login2 pull-left">Name</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" required name="StaffName"  value="<?php echo $name ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label id="CustomID" class="login2 pull-left">Email</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" required name="StaffEmail"  value="<?php echo $email ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label id="CustomID">Username</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">@</span>
                                                                <input type="text"  required name="StaffUsername" onkeypress="return RestrictSpace()"  value="<?php echo $username ?>" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label id="CustomID" class="login2 pull-left">Role</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div>
                                                                <select id="Role" class="chosen-select" name="RoleID" data-placeholder="Select Role">
                                                                    <option value="0"></option>
                                                                    <?php
                                                                    $i = 0;
                                                                    foreach ($qrole as $row) {
                                                                        $i++;
                                                                        ?>
                                                                        <option <?php if ($id_role == $i) echo 'selected'; ?> value="<?php echo $row->RoleID ?>"><?php echo $row->RoleName ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label id="CustomID" class="login2 pull-left">Gender</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 i-checks">


                                                            <input  required <?php if ($StaffGender == "Male") echo 'checked'; ?> type="radio" value="Male" name="StaffGender"/>  Male 
                                                            <input type="radio" <?php if ($StaffGender != "Male") echo 'checked'; ?> value="Female" name="StaffGender"/>  Female 
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label id="CustomID" class="login2 pull-left">Profile Picture</label>
                                                        </div>
                                                        <div class="card">
                                                            <br>
                                                            <a  class="thumbnail border">
                                                                <img src="<?php echo base_url('gambar/' . $StaffPicture); ?>" id="img"  style="width: 200px; height: 200px; margin-left: 10px; margin-right: 10px; margin-top: 10px ; margin-down:10px; " alt="foto">
                                                            </a>
                                                            <div class="container text-left">
                                                                <label for="inputFile" class="custom-file-upload btn-warning">
                                                                    <i class="fa fa-cloud-upload" ></i> Browse New Picture
                                                                </label>
                                                                <input accept="image/*" name="StaffImage" class="form-control" id="inputFile" type="file"/>

                                                                <!--<input id="upload" name="StaffImage" accept="image/*" class="form-control"  type="file"/>-->
                                                                <br>
                                                                <small class="muted">
                                                                    File size: maximum 2.000.000 bytes (2 Megabytes)<br>
                                                                    Allowed file extension: .JPG .JPEG .PNG
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>                                                  
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label id="CustomID" class="login2 pull-left">Phone</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" required onkeypress="return isNumber(event)" maxlength="13"  name="StaffPhoneNum" value="<?php echo $phone ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label id="CustomID" class="login2 pull-left">Province</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div>
                                                                <select id="province" class="chosen-select" name="StaffProvince" data-placeholder="Select Province">
                                                                    <option value="0"></option>
                                                                    <?php
                                                                    foreach ($province as $row) {
                                                                        ?>
                                                                        <option <?php if ($row->id == $provinces) echo 'selected'; ?> value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label id="CustomID" class="login2 pull-left">Regency</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div>
                                                                <select id="regency" class="chosen-select"  name="StaffRegency" data-placeholder="Select Regency">
                                                                    <option value="0"></option>
                                                                    <?php
                                                                    foreach ($regency as $row) {
                                                                        ?>
                                                                        <option <?php if ($row->id == $regencys) echo 'selected'; ?> value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label id="CustomID" class="login2 pull-left">Districts</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div>
                                                                <select id="district" class="chosen-select" name="StaffDistrict" data-placeholder="Select Role">
                                                                    <option value="0"></option>
                                                                    <?php
                                                                    foreach ($districts as $row) {
                                                                        ?>
                                                                        <option <?php if ($row->id == $district) echo 'selected'; ?> value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label id="CustomID" class="login2 pull-left">Villages</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div>
                                                                <select id="village" class="chosen-select" name="StaffVillage" data-placeholder="Select Role">
                                                                    <option value="0"></option>
                                                                    <?php
                                                                    foreach ($villages as $row) {
                                                                        ?>
                                                                        <option <?php if ($row->id == $village) echo 'selected'; ?> value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label id="CustomID" class="login2 pull-left">Zip Code</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" required onkeypress="return isNumber(event)" name="StaffZipCode" maxlength="8"  name="StaffPhoneNum" value="<?php echo $zipcode ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label id="CustomID" class="login2 pull-left">Address</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <textarea required   name="StaffAddress"  class="form-control"><?php echo $address ?></textarea>
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
                                                <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save
                                                </button>
                                                <button type="button" class="btn btn-warning waves-effect waves-light">Discard
                                                </button>
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


    function readURL(input) {
        var url = input.value;
        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
        if (input.files && input.files[0] && (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        } else {
            $('#img').attr('src', '/assets/no_preview.png');
        }
    }


    $("#inputFile").change(function () {
        readURL(this);
    });


</script>