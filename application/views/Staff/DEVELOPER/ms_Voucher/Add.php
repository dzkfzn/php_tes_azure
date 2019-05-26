<?php $this->load->view('Staff/DEVELOPER/ms_Voucher/header'); ?> 

<?php
if ($aksi == 'aksi_add') {

    //ngosongin variable
    $id = "";
    $id_games = "";
    $name_games = "";
    $name_developer = "";
    $id_developer = "";
    $usedBy = "";
    $Label = "";
    $ExpDate = "";
    $quantity = "";
} else {
    foreach ($qdata as $rowdata) {
        $id = $rowdata->VoucherID;
        $id_games = $rowdata->GamesID;
        $name_games = $rowdata->GamesName;
        $id_developer = $rowdata->DeveloperID;
        $usedBy = $rowdata->VoucherUsedBy;
        $Label = $rowdata->VoucherLabel;
        $ExpDate = $rowdata->VoucherExpireDate;
        $status = $rowdata->VoucherStatusActive;
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
                            <li class="active"><a href="#description"><i class="fa fa-<?php if ($aksi == 'aksi_add') echo "plus"; else echo "edit"; ?>" aria-hidden="true"></i> <?php echo $title ?></a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <form action="<?php echo base_url() ?>voucher/form/<?php echo $aksi ?>" method="post">

                                    <div class="row">


                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <!--NIK-->

                                                <div class="form-group-inner" hidden="hidden">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">ID</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text"   onkeypress="return isNumber(event)" maxlength="16" name="VoucherID" value="<?php echo $id ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">

                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">

                                                            <label>Games</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                                                            <select id="GamesID" required class="form-control" name="GamesID"  >
                                                                <option hidden="" disabled selected value="0"> <?php echo str_repeat("-", 30); ?> Pilih Games <?php echo str_repeat("-", 30); ?> </option>
                                                                <?php
                                                                $i = 0;
                                                                foreach ($qgames as $row) {
                                                                    $i++;
                                                                    ?>
                                                                    <option <?php if ($id_games == $i) echo 'selected'; ?> value="<?php echo $row->GamesID ?>"><?php echo $row->GamesName ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner" hidden>
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Developer</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" name="DeveloperID" hidden value="<?php echo $id_developer ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                               <!--  <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">Exp Date</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="Date" name="VoucherExpireDate" value="<?php echo $ExpDate ?>" class="birthform-control" />
                                                        </div>
                                                    </div>
                                                </div> -->

                                                 <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Start Date</label>
                                                        </div>
                                                        <div class="form-group data-custon-pick col-lg-9 col-md-9 col-sm-9 col-xs-12" id="data_1">
                                                            <div class="input-group date " >
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                <input onkeypress="cek()" type="text" required readonly="readonly" name="VoucherExpireDate" id="Expired" placeholder="Choose Date" class="form-control" value="<?php echo $ExpDate ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Voucher</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" name="quantity" id="quantity" value="" class="form-control" />
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
<?php $this->load->view('Staff/DEVELOPER/ms_Voucher/footer'); ?>


