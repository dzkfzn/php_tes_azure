<?php $this->load->view('Staff/ADMIN/header'); ?>

<?php
if ($aksi == 'aksi_add') {
    $id = "";
    $name = "";
    $wallet = "";
    $email = "";
    $birth = "";
    $username = "";
    $password = "";
    $id_role = "";
    $username = "";
    $path = "";
} else {
    foreach ($qdata as $rowdata) {
        $id = $rowdata->CustomerID;
        $name = $rowdata->CustomerName;
        $wallet = $rowdata->CustomerWallet;
        $email = $rowdata->CustomerEmail;
        $id_role = $rowdata->RoleID;
        $username = $rowdata->CustomerUsername;
        $password = $rowdata->CustomerPassword;
        $birth = $rowdata->CustomerBirthDate;
        $path = $rowdata->CustomerImagePath;
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
                            <li class="active"><a href="#description"><i class="fa fa-plus" aria-hidden="true"></i> Add Customer</a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <form action="<?php echo base_url() ?>customer/form/<?php echo $aksi ?>" method="post">

                                    <div class="row">


                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">ID</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" required onkeypress="return isNumber(event)" name="CustomerID" value="<?php echo $id ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">Name</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" required onkeypress="return onlyAlphabets(event)" name="CustomerName" value="<?php echo $name ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">Birth Date</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="Date" name="CustomerBirthDate" value="<?php echo $birth ?>" class=birthform-control" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">Email</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="email" name="CustomerEmail" value="<?php echo $email ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">Username</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" name="CustomerUsername" value="<?php echo $username ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">Password</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="password" name="CustomerPassword" value="<?php echo $password ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">Wallet</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" required onkeypress="return isNumber(event)" name="CustomerWallet" value="<?php echo $wallet ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group"><label class="login2 pull-left pull-left-pro">Photo</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"><input type="file" name="path" class="form-control">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
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
<?php $this->load->view('Staff/ADMIN/footer'); ?>