<?php $this->load->view('Staff/SUPER_ADMIN/header'); ?> 


<?php
//ngosongin variable
$id = "";
$id_role = "";
$name_role = "";
$name = "";
$email = "";
$username = "";
$password = "";
$address = "";
$phone = "";
$status = "";
$createdBy = "";
$createdDate = "";
$modifiedBy = "";
$modifiedDate = "";
$lastAccess = "";
$StaffGender = "";
?> 

<?php
if ($this->session->flashdata('true'))
    echo $this->session->flashdata('true');
else if ($this->session->flashdata('err'))
    echo $this->session->flashdata('err');
?>

<!-- Static Table Start -->

<div class="data-table-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Staff <span class="table-project-n">Data</span> Table</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div class="product-status-wrap">
                                <div id="toolbar">
                                    <select class="form-control">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <div class="sparkline11-graph pull-right">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="modal-bootstrap modal-login-form">
                                                    <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown1">Add Staff</a>
                                                </div>
                                                <div id="zoomInDown1" class="modal modal-adminpro-general modal-zoomInDown fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-close-area modal-close-df">
                                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="modal-login-form-inner">

                                                                    <div class="row">
                                                                        <ul id="myTab3" class="tab-review-design">
                                                                            <li class="active"><a href="#description"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo $title ?></a></li>

                                                                        </ul>
                                                                        <br>
                                                                        <br>
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="basic-login-inner modal-basic-inner">
                                                                                <div class="row">
                                                                                    <form action="<?php echo base_url() ?>staff/form/<?php echo $aksi ?>" method="post">
                                                                                        <!--NIK-->
                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                    <label class="login2 pull-left " id="CustomID" >Name</label>
                                                                                                </div>
                                                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                                    <input type="text" required onkeypress="return onlyAlphabets(event)" name="StaffName"  value="<?php echo $name ?>" class="form-control" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                    <label class="login2 pull-left" id="CustomID">Email</label>
                                                                                                </div>
                                                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                                    <input type="email" required  name="StaffEmail" id="email" value="<?php echo $email ?>" class="form-control" />
                                                                                                    <span id="email_result"></span>  
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>


                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                    <label class="login2 pull-left" id="CustomID">Role</label>
                                                                                                </div>
                                                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                                    <div>
                                                                                                        <select name="RoleID" required  aria-required="true"  class="chosen-select"  data-placeholder="Select Role">
                                                                                                            <option value=""></option>
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
                                                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                    <label class="login2 pull-left" id="CustomID">Phone</label>
                                                                                                </div>
                                                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                                    <input type="text" required onkeypress="return isNumber(event)" maxlength="13"  name="StaffPhoneNum" value="<?php echo $phone ?>" class="form-control" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                    <label class="login2 pull-left" id="CustomID">Gender</label>
                                                                                                </div>
                                                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 i-checks">

                                                                                                    <input required type="radio" value="Male" name="StaffGender"/>  Male 
                                                                                                    <input type="radio" value="Female" name="StaffGender"/>  Female 
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="text-center mg-b-pro-edt custom-pro-edt-d">
                                                                                                    <button type="submit" id="Button" class="btn btn-success block">Save
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>


                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="No">NO</th>
                                            <th data-field="NIK">NIK</th>
                                            <th data-field="Role">Role</th>
                                            <th data-field="Name">Name</th>
                                            <th data-field="Email">Email</th>
                                            <th data-field="Status">Status Active</th>
                                            <th data-field="StatusVerif">Status Verif</th>

                                            <th data-field="action">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($qstaff)) { ?>
                                            <tr> 
                                                <td colspan="15">Data tidak ditemukan</td> 
                                            </tr> 
                                            <?php
                                        } else {
                                            $no = 0;
                                            foreach ($qstaff as $rowstaff) {
                                                $no++;
                                                ?> 
                                                <tr> 
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $rowstaff->StaffID ?></td> 
                                                    <td><?php echo $rowstaff->RoleName ?></td>

                                                    <td><?php echo $rowstaff->StaffName ?></td>

                                                    <td><?php echo $rowstaff->StaffEmail ?></td>
                                                    <td>
                                                        <?php if ($rowstaff->StaffStatusActive == 0) { ?>
                                                            <button class="ds-setting">Disabled</button>
                                                        <?php } else {
                                                            ?>
                                                            <button class="pd-setting">Active</button>
                                                            <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($rowstaff->StaffStatusVerif == 0) { ?>
                                                            <button class="ds-setting">Disabled</button>
                                                        <?php } else {
                                                            ?>
                                                            <button class="pd-setting">Active</button>
                                                            <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <!--<td><?php echo $rowstaff->StaffCreatedBy ?></td>-->
                                                    <!--<td><?php echo $rowstaff->StaffCreatedDate ?></td>-->
                                                    <!--<td><?php echo $rowstaff->StaffModifiedBy ?></td>-->
                                                    <!--<td></td>-->
                                                    <!--<td><?php echo $rowstaff->StaffModifiedDate ?></td>-->
                                                    <!--<td><?php echo $rowstaff->StaffLastAccess ?></td>-->


                                                    <td>
                                                        <a href="<?php echo base_url() ?>staff/form/detail/<?php echo $rowstaff->StaffID ?>" title="Detail" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                                        <?php
                                                        if ($rowstaff->StaffStatusVerif == 0) {
                                                            
                                                        } else {
                                                            ?>
                                                            <a href="<?php echo base_url() ?>staff/form/edit/<?php echo $rowstaff->StaffID ?>" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <?php } ?>
                                                        <?php if ($rowstaff->StaffStatusActive == 0) { ?>
                                                            <?php
                                                            if ($rowstaff->StaffStatusVerif == 0) {
                                                                
                                                            } else {
                                                                ?>
                                                                <a href="<?php echo base_url() ?>staff/aktif/<?php echo $rowstaff->StaffID ?>" title="Set Active" class="pd-setting-ed"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                            <?php } ?>
                                                        <?php } else {
                                                            ?>
                                                            <a href="<?php echo base_url() ?>staff/hapus/<?php echo $rowstaff->StaffID ?>" id="btn" title="Set Disable" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                                                            <?php
                                                        }
                                                        ?>

                                                    </td>

                                                </tr> 
                                                <?php
                                            }
                                        }
                                        ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table End -->


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
                        myFun();
                    }
                });
            }
        });
    });
    function myFun() {
        if ($('#verifSucces').length) {
            document.getElementById("Button").disabled = false;
        } else {
            document.getElementById("Button").disabled = true;

        }
    }


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

