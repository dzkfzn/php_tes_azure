<?php $this->load->view('Staff/DEVELOPER/header'); ?> 

<!-- Single pro tab start-->
<div class="single-product-tab-area mg-tb-15">
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">

                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <!-- file upload form -->
                                <form method="post" action="<?php echo base_url() ?>Upload_files/" enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">

                                                <!--NAMA GAMES KE 1--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Upload Gambar</label>
                                                            <input type="file" name="files[]" class="btn btn-button-primary-ct" id="fuReferensi" multiple/>
                                                            <div class="gallery"></div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                                    <input type="submit" name="fileSubmit" class="btn btn-primary block" value="Save"/>

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div id="image_preview"></div>
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
<script>
    $(function () {
        // Multiple images preview in browser
        var imagesPreview = function (input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function (event) {
                        $($.parseHTML('<img width="200px" height="200px" margin-left= "10px" margin-right= "10px" margin-top= "10px" margin-down= "10px";>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#fuReferensi').on('change', function () {
            imagesPreview(this, 'div.gallery');
        });
    });
    window.fcWidget.setExternalId("animename0018");
    window.fcWidget.user.setFirstName("dzaki fauzaan");
    window.fcWidget.user.setEmail("animename00@gmail.com");
    window.fcWidget.user.setPhone("+62895353755286");

</script>