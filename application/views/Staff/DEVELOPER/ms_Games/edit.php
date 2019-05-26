<?php $this->load->view('Staff/DEVELOPER/header'); ?> 

<?php
if ($aksi == 'aksi_add') {

    //ngosongin variable
    $GamesID = "";
    $GamesName = "";
    $DeveloperID = "";
    $GamesReleaseDate = "";
    $GamesPrice = "";
//    $GamesPlatform = "";
//    $GamesPath = "";
//    $GamesCategory[] = "";
    $GamesDesc = "";

//    $status = "";
//    $createdBy = "";
//    $createdDate = "";
//    $modifiedBy = "";
//    $modifiedDate = "";
//    $lastAccess = "";

    $SyReqDirectX = "";
    $SyReqHDD = "";
    $SyReqVGA = "";
    $SyReqRAM = "";
    $SyReqCPU = "";
    $SyReqOS = "";
} else {
    foreach ($qdata as $rowdata) {

        $GamesID = $rowdata->GamesID;
        $GamesName = $rowdata->GamesName;
        $DeveloperID = $rowdata->DeveloperID;
        $GamesReleaseDate = $rowdata->GamesReleaseDate;
        $GamesPrice = $rowdata->GamesPrice;
        $GamesPlatform = $rowdata->GamesPlatform;
        $GamesPath = $rowdata->GamesPath;
        $GamesCategory[] = $rowdata->GamesCategory;
        $GamesDesc = $rowdata->GamesDesc;


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
                            <li class="active"><a href="#description"><i class="fa fa-<?php
                                    if ($aksi == 'aksi_add')
                                        echo "plus";
                                    else
                                        echo "edit";
                                    ?>" aria-hidden="true"></i> <?php echo $title ?></a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <form action="<?php echo base_url() ?>games/form/<?php echo $aksi ?>" method="post" enctype="multipart/form-data">

                                    <div class="row">


                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">

                                                <!--NAMA GAMES KE 1--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Name</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" required  name="GamesName"  value="<?php echo $GamesName ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--RELEASE DATE KE 2-->
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Release Date</label>
                                                        </div>
                                                        <div class="form-group data-custon-pick col-lg-9 col-md-9 col-sm-9 col-xs-12" id="data_1">
                                                            <div class="input-group date " >
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                <input type="text" required readonly="readonly" name="GamesReleaseDate" value="<?php echo $GamesReleaseDate ?>"  id="GamesReleaseDate" placeholder="Choose Date" class="form-control" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--PRICE KE 3--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Price</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <input type="text" onkeypress="return isNumber(event)"  id="Price" name="GamesPrice" maxlength="25" value="<?php echo $GamesPrice ?>" class="form-control align-left" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">

                                                <!--PLAFORM, multi choice DROPDOWNLiST KE 6-->
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Genres</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="chosen-select-single">
                                                                <select data-placeholder="Choose Genres..." required data-live-search="true" class="chosen-select" name="GamesGenre[]" multiple="" tabindex="-1">
                                                                    <?php
                                                                    $i = 0;
                                                                    foreach ($qgenre as $row) {
                                                                        $i++;
                                                                        ?>
                                                                        <option value="<?php echo $row->GenreID ?>"><?php echo $row->GenreName ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--GAMES CATEGORY KE 8, MULTIPLE--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Platform</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="chosen-select-single">
                                                                <select data-placeholder="Choose Platforms..." required class="chosen-select" name="GamesPlatform[]" multiple="" tabindex="-1">
                                                                    <option value="Windows">Windows</option>
                                                                    <option value="MAC">MAC</option>
                                                                    <option value="Linux">Linux</option>
                                                                    <option value="Console">Console</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--GAMES PATH KE 7, UPLOAD FILE--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Games</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="file-upload-inner file-upload-inner ts-forms">
                                                                <div class="input append-small-btn">
                                                                    <div class="file-button">
                                                                        Browse
                                                                        <!--<input type="file" required   onchange="document.getElementById('append-small-btn').value = this.value;">-->
                                                                        <input type="file" accept=".zip"  required id="file-id" name="GamesPath" onchange="theimage();">
                                                                    </div>
                                                                    <!--<input type="text" id="append-small-btn" placeholder="no file selected">-->
                                                                    <input type="text" name="file_path" id="file-path">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Choose Thumbnail</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                            <input accept="image/*" name="GamesThumbnail" required class="form-control" id="inputFile" type="file"/>

                                                        </div>
                                                    </div>
                                                </div>


                                                <!--GAMES PATH KE 9,image UPLOAD FILE--> 
                                                <!--                                                <div class="form-group-inner">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                                                            <label class="login2 pull-left">Images</label>
                                                                                                        </div>
                                                                                                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <a href='<?php echo site_url('images_examples/example1') ?>'>Example 1 - Simple</a>
                                                <?php echo $output; ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>-->

                                            </div>
                                        </div>



                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <!--DESCRIPTION KE 9-->
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Description</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-9 col-sm-9 col-xs-12">
                                                            <textarea id="summernote1" name="GamesDesc"><?php echo $GamesDesc ?>
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>

                                    <!--SYSTEM REQQ-->
                                    <ul id="myTab4" class="tab-review-design">
                                        <li class="active"><a href="#description"><i class="fa fa-<?php
                                                if ($aksi == 'aksi_add')
                                                    echo "plus";
                                                else
                                                    echo "edit";
                                                ?>" aria-hidden="true"></i> Min System Requirements </a></li>

                                    </ul>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="review-content-section">


                                            <!--OS  KE 1--> 
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-left">OS</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text"  onkeypress="return onlyAlphabets(event)" name="SyReqOS"  value="<?php echo $SyReqOS ?>" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>


                                            <!--CPU KE 2--> 

                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-left">CPU</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text"  onkeypress="return onlyAlphabets(event)" name="SyReqCPU"  value="<?php echo $SyReqCPU ?>" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                            <!--RAM KE 3--> 
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-left">RAM</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text"  onkeypress="return onlyAlphabets(event)" name="SyReqRAM"  value="<?php echo $SyReqRAM ?>" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="review-content-section">
                                            <!--VGA KE 4--> 
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-left">VGA</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text"  onkeypress="return onlyAlphabets(event)" name="SyReqVGA"  value="<?php echo $SyReqVGA ?>" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                            <!--HDD KE 5--> 
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-left">HDD</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text"  onkeypress="return onlyAlphabets(event)" name="SyReqHDD"  value="<?php echo $SyReqHDD ?>" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--DirectX KE 3--> 
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-left">DirectX Version</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text"  onkeypress="return onlyAlphabets(event)" name="SyReqDirectX"  value="<?php echo $SyReqDirectX ?>" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                <input type="submit" name="fileSubmit" class="btn btn-primary waves-effect waves-light m-r-10" value="Save"/>
                                                <button type="button"  class="btn btn-warning waves-effect waves-light">Discard
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
<?php $this->load->view('Staff/DEVELOPER/footer'); ?>
<script>
    function theimage() {
        var filename = document.getElementById('file-id').files[0].name;
        document.getElementById('file-path').value = filename;
//        alert(filename);
    }
</script>