<?php $this->load->view('Staff/ADMIN/header'); ?> 

<?php
foreach ($qdata as $rowdata) {

    $GamesID = $rowdata->GamesID;
    $GamesName = $rowdata->GamesName;
    $DeveloperID = $rowdata->DeveloperID;
    $GamesReleaseDate = $rowdata->GamesReleaseDate;
    $GamesPrice = $rowdata->GamesPrice;
    $GamesPlatform = $rowdata->GamesPlatform;
    $GamesPath = $rowdata->GamesPath;
//    $GamesCategory[] = $rowdata->GamesCategory;
    $GamesDesc = $rowdata->GamesDesc;
    $GamesDate = $rowdata->GamesDate;
    $GamesThumbnail = $rowdata->GamesThumbnail;
    $GamesStatusVerif = $rowdata->GamesStatusVerif;

    if ($GamesStatusVerif == 0) {
        $status = "Menunggu Konfirmasi";
    } else if ($GamesStatusVerif == 1) {
        $status = "Terkonfirmasi";
    } else if ($GamesStatusVerif == 2) {
        $status = "Ditolak";
    }


//        $createdBy = $rowdata->GamesCreatedBy;
//        $createdDate = $rowdata->GamesCreatedDate;
//        $modifiedBy = $rowdata->GamesSModifiedBy;
//        $modifiedDate = $rowdata->GamesModifiedDate;
//        $lastAccess = $rowdata->GamesLastAccess;
    $SyReqDirectX = $rowdata->SyReqDirectX;
    $SyReqHDD = $rowdata->SyReqHDD;
    $SyReqVGA = $rowdata->SyReqVGA;
    $SyReqRAM = $rowdata->SyReqRAM;
    $SyReqCPU = $rowdata->SyReqCPU;
    $SyReqOS = $rowdata->SyReqOS;
}
$GenreGames = "";
if (empty($qgenre)) {
    $GenreGames = "wkwk";
} else {
    foreach ($qgenre as $rowdata_genre) {

        $GenreGames .= " | " . $rowdata_genre->GenreName;
    }
    $GenreGames .= " |";
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
                            <li class="active"><a href="#description"><i class="fa fa-eye"></i> : <?php echo $title ?></a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <form action="<?php echo base_url() ?>games/form/" method="post">

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="sparkline10-list mg-tb-30">
                                                <ul id="myTab3" class="tab-review-design">
                                                    <li class="active"><a href="#">General Information</a></li>
                                                </ul>
                                                <br>
                                                <!--NAMA GAMES KE 1--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Games ID</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $GamesID ?>  </label> </b>
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
                                                            <b><label class="login2 pull-left">: <?php echo $GamesName ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--NAMA GAMES KE 1--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Release Date</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo date("M j, Y", strtotime($GamesReleaseDate)); ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--NAMA GAMES KE 1--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Price</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo "Rp " . number_format($GamesPrice, 2, ",", "."); ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--NAMA GAMES KE 2--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Platform</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $GamesPlatform ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--NAMA GAMES KE 2--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Genre</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $GenreGames ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Request Date</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $GamesDate ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Status</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input  name="path_download" style="display: none;" id="path_download" value="<?php echo $status ?>" />

                                                            <b><label class="login2 pull-left">: <?php echo $status ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">File Games </label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">:
                                                            <a href="<?php echo base_url('games/download/' . $GamesPath); ?>" class="login2 pull-left">Download Here!</a>
                                                            <input  name="path_download" style="display: none;" id="path_download" value="<?php echo $status ?>" />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <label class="login2 pull-left">GamesThumbnail</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <img src="<?php echo base_url() ?>Developer/GamesThumbnail/<?php echo $GamesThumbnail ?>" width="250" /> 
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="sparkline10-list mg-tb-30">
                                                <ul id="myTab3" class="tab-review-design">
                                                    <li class="active"><a href="#">System Requirement</a></li>
                                                </ul>
                                                <br>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">System Operating </label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $SyReqOS ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">CPU</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $SyReqCPU ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">RAM</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $SyReqRAM ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">VGA</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $SyReqVGA ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">HDD</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $SyReqHDD ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">DirectX</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $SyReqDirectX ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="sparkline10-list mg-tb-30">
                                                <div class="sparkline10-hd">
                                                    <div class="main-sparkline10-hd">
                                                        <h1>Description</h1>
                                                    </div>
                                                </div>
                                                <div class="review-content-section">
                                                    <!--DESCRIPTION KE 9-->
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-left"></label>
                                                            </div>
                                                            <div class="col-lg-12 col-md-9 col-sm-9 col-xs-12">
                                                                <?php echo $GamesDesc ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                    
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <?php foreach ($qfoto as $rowfoto) { ?>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

                                                    <div class="sparkline10-list mg-tb-30">
                                                        <img src = "<?php echo base_url() ?>Developer/Games_Picture/<?php echo $rowfoto->ImagesID ?>" />

                                                    </div>       
                                                </div>
                                            <?php }
                                            ?>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                <button class="btn btn-primary waves-effect waves-light m-r-10" onClick="window.location.href = '<?php echo base_url(); ?>games';return false;">Back to List</button>
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
<?php $this->load->view('Staff/ADMIN/footer'); ?> 
