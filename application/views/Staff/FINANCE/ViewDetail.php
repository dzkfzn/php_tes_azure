<?php $this->load->view('Staff/FINANCE/header'); ?>

<?php
     
        foreach ($qdetail as $rowdata) {
            $id = $rowdata->OrderID;
            $name = $rowdata->CustomerName;
            
            $bank = $rowdata->BankName;
            $rekfrom = $rowdata->TransferRekFrom;
            $atasnamafrom = $rowdata->TransferAtasNamaFrom;
            $namabank = $rowdata->TransferNamaBank;
            $tgl = $rowdata->OrderDate;
            $total = $rowdata->OrderTotal;
            $payment = "Transfer";
            $bankk = $rowdata->BankName;
            $email = $rowdata->CustomerEmail;
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
                            <li class="active"><a href="#description"><i class="fa fa-eye" aria-hidden="true"></i>Detail Order</a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <h1>Order</h1>
                                                <hr>
                                                <!--NAMA GAMES KE 1--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Order ID</label>
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
                                                            <label class="login2 pull-left">Customer Name</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $name ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Order Date</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $tgl ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Total</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $total ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Customer Email</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $email ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Payment Methode</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $payment; ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>

                                               
                                               


                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <h1>Detail Information Games</h1>
                                                <hr>
<!-- 
                                                 <?php if (empty($qdata)) { ?>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Games</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: -  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                        } else {
                                            
                                            foreach ($qdata as $roworder) {
                                                ?>  -->
<!--                                                 <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Nama Game</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $GamesID ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Developer</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $roworder->DeveloperName ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Unit Price</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $roworder->UnitPrice ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <?php
                                            }
                                        }
                                        ?>   -->
                                        <table id="table" data-toggle="table" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            
                                            <th data-field="Games">Games</th>
                                            <th data-field="CustName">Developer</th>
                                            <th data-field="ordDate">Harga</th>
                                            


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($qdata)) { ?>
                                            <tr> 
                                                <td colspan="12">Data tidak ditemukan</td> 
                                            </tr> 
                                            <?php
                                        } else {
                                            
                                            foreach ($qdata as $roworder) {
                                            ?> 
                                                <tr> 
                                                    <td><?php echo $roworder->GamesName ?></td>
                                                    <td><?php echo $roworder->DeveloperName ?></td>
                                                    <td><?php echo $roworder->UnitPrice ?></td>
                                                    
                                                   <!--  <td>
                                                        <a href="<?php echo base_url() ?>KonfirmasiOrder/form/edit/<?php echo $roworder->OrderID ?>" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a href="<?php echo base_url() ?>KonfirmasiOrder/form/edit/<?php echo $roworder->OrderID ?>" title="Detail" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                                    </td> -->
                                                </tr> 
                                                <?php
                                            }
                                        } 
                                        ?> 
                                    </tbody>
                                </table>
                                                
                                                <br>
                                                <h4>Detail Payment</h4>
                                                <hr>
                                                
                                                <!--NAMA GAMES KE 1--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Bank</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $bankk
                                                             ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--NAMA GAMES KE 1--> 
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Transfer as</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $atasnamafrom; ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-left">Customer Rekening</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <b><label class="login2 pull-left">: <?php echo $rekfrom; ?>  </label> </b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                <button class="btn btn-primary waves-effect waves-light m-r-10" onClick="window.location.href = '<?php echo base_url(); ?>KonfirmasiOrder/History';return false;">Back to List</button>
                                               

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
