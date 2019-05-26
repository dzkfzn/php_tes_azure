<?php $this->load->view('Staff/ADMIN/ms_Event/header'); ?>
<?php
if ($aksi == 'aksi_add') {
    $id = "";
    $name = "";
    $event = "";
    $startDate = "";
    $endDate = "";

} else {
    foreach ($qdata as $rowdata) {
        $id = $rowdata->EventID;
        $name = $rowdata->EventName;
        $startDate = $rowdata->EventStartDate;
        $endDate = $rowdata->EventEndDate;
        $status = $rowdata->EventStatusActive;

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
                            <li class="active"><a href="#description"><i class="fa fa-plus" aria-hidden="true"></i> Add Event</a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <form action="<?php echo base_url() ?>event/form/<?php echo $aksi ?>" method="post">

                                    <div class="row">


                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">

                                                <div class="form-group-inner" hidden="hidden">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">ID</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" onkeypress="return isNumber(event)" name="EventID" value="<?php echo $id ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">Name</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" required onkeypress="return onlyAlphabets(event)" name="EventName" value="<?php echo $name ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>



                                                                                               
                                                 <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Start Date</label>
                                                        </div>
                                                        <div class="form-group data-custon-pick col-lg-9 col-md-9 col-sm-9 col-xs-12" id="data_1">
                                                            <div class="input-group date " >
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                <input type="text" required readonly="readonly" name="startDate" id="startDate" placeholder="Choose Date" class="form-control" value="<?php echo $startDate ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                               <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">End Date</label>
                                                        </div>
                                                        <div class="form-group data-custon-pick col-lg-9 col-md-9 col-sm-9 col-xs-12" id="data_1">
                                                            <div class="input-group date " >
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                <input type="text" required readonly="readonly" name="endDate" id="endDate" placeholder="Choose Date" class="form-control"  value="<?php echo $endDate ?>" >
                                                            </div>
                                                        </div>
                                                    </div>
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
<?php $this->load->view('Staff/ADMIN/ms_Event/footer'); ?>