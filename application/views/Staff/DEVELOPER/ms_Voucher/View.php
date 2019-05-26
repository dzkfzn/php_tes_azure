<?php $this->load->view('Staff/DEVELOPER/header'); ?> 


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
                            <h1>Voucher <span class="table-project-n">Data</span> Table</h1>
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
                                <div class="add-product">
                                    <a href="<?php echo base_url() ?>voucher/form/add">Add Voucher</a>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="No">NO</th>
                                            <th data-field="ID">ID</th>
                                            <th data-field="Games">Games</th>
                                            <!--<th hidden data-field="Developer">Developer</th>-->
                                            <th data-field="Label">Label</th>
                                            <th data-field="UsedBy">Used By</th>
                                           
                                            
                                            <th data-field="ExpDate">Exp Date</th>
                                            <th data-field="Status">Status</th>
                                            <th data-field="action">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($qvoucher)) { ?>
                                          
                                            <?php
                                        } else {
                                            $no = 0;
                                            foreach ($qvoucher as $rowvoucher) {
                                                $no++;
                                                ?> 
                                                <tr> 
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $rowvoucher->VoucherID ?></td> 
                                                    <td><?php echo $rowvoucher->GamesName ?></td>
                                                    <!--<td><?php echo $rowvoucher->DeveloperID ?></td>-->
                                                    <td><?php echo split($rowvoucher->VoucherLabel, 4);?></td>
                                                    <td><?php echo $rowvoucher->VoucherUsedBy ?></td>
                                                    <td><?php echo $rowvoucher->VoucherExpireDate ?></td>



                                                    <td>
                                                        <?php if ( $rowvoucher->VoucherStatusActive == 0) { ?>
                                                            <button class="ds-setting">Disabled</button>
                                                        <?php } else {
                                                            ?>
                                                            <button class="pd-setting">Active</button>
                                                            <?php
                                                        }
                                                        ?>
                                                    </td>


                                                    <td>
                                                       
                                                        <?php if ($rowvoucher->VoucherStatusActive == 1) { ?>

                                                            <a href="<?php echo base_url() ?>voucher/hapus/<?php echo $rowvoucher->VoucherID ?>" id="btn" title="Set Disable" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                         

                                                        <?php } else {
                                                            ?>
                                                            

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
<?php $this->load->view('Staff/DEVELOPER/footer'); ?>

<?php
function split($str, $l = 76, $e = "-") {
    $tmp = array_chunk(
        preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY), $l);
    $str = "";
    $x=0;
    foreach ($tmp as $t) {
        $x++;
        if($x==3){
             $str .= join("", $t) ;
                        
        }else
        
        $str .= join("", $t) . $e ;
    }
    return $str;
}


?>
        