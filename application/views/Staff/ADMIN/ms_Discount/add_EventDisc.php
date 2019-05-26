<?php $this->load->view('Staff/ADMIN/ms_discount/header'); ?> 

<?php
if ($aksi == 'aksi_add') {

    $id = "";
    $event = "";
    $eventtype = "";
    $startDate = "";
    $endDate = "";
    $amount = "";
    $gamesID = "";
    $eventID = "";
    $type = "";

} else 
{
    foreach ($qdata as $rowdata) {
    $id = $rowdata->DiscountID;
    $event = $rowdata->DiscountEvent;
    $startDate = $rowdata->DiscountStartDate;
    $endDate = $rowdata->DiscountEndDate;
    $amount = $rowdata->DiscountAmount;
    $status = $rowdata->DiscountStatusActive;
    $gamesID = $rowdata->GamesID;
    $eventID = $rowdata->DiscountEvent;
    $type = $rowdata->DiscountType;
    $gamess = $rowdata->GamesID;

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
                                                    <form action="<?php echo base_url() ?>discount/form/aksi_add_event" method="post">

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
                                                                                <input type="text" onkeypress="return isNumber(event)" maxlength="16" name="DiscountID" value="<?php echo $id ?>" class="form-control" />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group-inner">
                                                                        <div class="row">
                                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                                <label class="login2 pull-left">Games</label>
                                                                            </div>
                                                                            <?php if ($aksi == 'aksi_add'){ ?> 
                                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                <div class="chosen-select-single">
                                                                                    <select data-placeholder="Choose Games..." required data-live-search="true" class="chosen-select" name="GamesID[]" multiple="" tabindex="-1"> 
                                                                                        <?php
                                                                                        $i = 0;
                                                                                        foreach ($qgames as $row) {
                                                                                            $i++;
                                                                                            ?>
                                                                                            <option value="<?php echo $row->GamesID ?>"><?php echo $row->GamesName ?></option>
                                                                                            <?php
                                                                                            
                                                                                        }
                                                                                        ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div> 
                                                                            <?php }
                                                                            else 
                                                                                { ?>

                                                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                        <input type="text" onkeypress="return isNumber(event)" maxlength="16" name="DiscountID" value="<?php echo $gamess ?>" class="form-control" />
                                                                                    </div>
                                                                                    <?php } ?>
                                                                                </div>


                                                                            </div>
                                                                            <div class="form-group-inner">
                                                                                <div class="row">
                                                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                                        <label class="login2 pull-left">Event</label>
                                                                                    </div>
                                                                                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="input-group custom-go-button">
                                                                                            <select id="EventID" name="EventID" class="select2_demo_3 form-control">

                                                                                                <option hidden="" disabled selected value="0"> <?php echo str_repeat("-", 5); ?> Pilih Event <?php echo str_repeat("-", 5); ?> </option>
                                                                                                <?php
                                                                                                $i = 0;
                                                                                                foreach ($qevent as $row) {
                                                                                                    $i++;
                                                                                                    ?>
                                                                                                    <option <?php if ($eventID == $i) echo 'selected'; ?> value="<?php echo $row->EventID ?>"><?php echo $row->EventName ?></option>
                                                                                                    <?php
                                                                                                    
                                                                                                }
                                                                                                ?>

                                                                                            </select>
                                                                                            
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
                                                                                    <label class="login2 pull-left">Amount</label>
                                                                                </div>
                                                                                <div class="touchspin-inner">

                                                                                    <input class="touchspin2" type="text" value="<?php echo $amount ?>" name="DiscountAmount" id="DiscountAmount" readonly="true">
                                                                                </div>
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
                                                           <!--  <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save
                                                           </button> -->
                                                           <?php 
                                                           $submit = $arrayName = array('name' => 'submit', 'id' => 'submit' ,'class' => 'btn btn-primary waves-effect waves-light m-r-10' , 'value' => 'Save');
                                                           echo form_submit($submit); ?>

                                                           <!-- <button type="button" class="btn btn-warning waves-effect waves-light">Discard -->
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
           <script type="text/javascript">
          
           </script>
           <!-- /container --> 
           <?php $this->load->view('Staff/ADMIN/ms_Discount/footer'); ?>
           <script type="text/javascript">
                $('#EventID').on('change', function () {
                    document.getElementById("mytext").value = "My value";

                    var EventID = $(this).val();
                    if (EventID) {
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo base_url(); ?>index.php/Discount/getDate',
                            data: 'EventID=' + EventID,
                            success: function (data) {
                               
                                $("#DiscountStartDate").val( $.trim(data);
                                
                            }
                        });
                    } 
                });
        </script>

        <script type="text/javascript">
            function setDate(data)
            {
               alert(data);
               document.getElementById("friendName").value = data;
           }
       </script>

       <script type="text/javascript">

        var currentValue = 0;
        function handleClick(rb) {
            document.getElementById("DiscountStartDate").disabled = true;
            document.getElementById("DiscountEndDate").disabled = true;
            document.getElementById("EventID").disabled = false;

        }

        function handleClickReg(rb) {
            document.getElementById("DiscountStartDate").disabled = false;
            document.getElementById("DiscountEndDate").disabled = false;
            document.getElementById("EventID").disabled = true;
        }
    </script>

    <script>
        function getDate() {
          var x = document.getElementById("EventID").value;
          document.getElementById("").innerHTML = "You selected: " + x;
      }
    </script>

    <script type="text/javascript">
        function GetSelectedTextValue(EventID) {
            var selectedText = EventID.options[EventID.selectedIndex].innerHTML;
            var selectedValue = EventID.value;
            DiscountStartDate.value = selectedValue;
            if(selectedValue=="TYP-0001")
            {
                document.getElementById("lblsize").style.display = 'block';
                document.getElementById("size").style.display = 'block';
            }
            else
            {   
                document.getElementById("lblsize").style.display = 'none';
                document.getElementById('size').style.display = "none"; 
            }
                                    //alert("Selected Text: " + selectedText + " Value: " + selectedValue);
                                }
                            </script>

                            
