<?php $this->load->view('Staff/FINANCE/header'); ?>


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
                            <h1>Order <span class="table-project-n">Data</span> Table</h1>
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
                               
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="no">NO</th>
                                            <!--<th data-field="id">ID</th>-->
                                            <th data-field="orderID">Order ID</th>
                                            <th data-field="CustName">Username</th>
                                            <th data-field="ordDate">Tanggal Order</th>
                                            <th data-field="status">Status</th>

                                            <th data-field="action">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($qorder)) { ?>
                                            <tr> 
                                                <td colspan="12">Data tidak ditemukan</td> 
                                            </tr> 
                                            <?php
                                        } else {
                                            $no = 0;
                                            foreach ($qorder as $roworder) {
                                                $no++;
                                                ?> 
                                                <tr> 
                                                    <td><?php echo $no ?></td>
                                                    <!--<td><?php echo $rowbank->BankID ?></td>--> 
                                                    <td><?php echo $roworder->OrderID ?></td>
                                                    <td><?php echo $roworder->CustomerUsername ?></td>
                                                    <td><?php echo $roworder->OrderDate ?></td>
                                                    <td>
                                                        <?php if ($roworder->OrderStatusActive == 2) { ?>
                                                            <a class="btn btn-default">Rejected</a>
                                                           
                                                        <?php } else {
                                                            ?>
                                                            <a class="btn btn-success">Accepted</a>
                                                            <?php
                                                        }
                                                        ?>

                                                    </td>
                                                    <td>
                                                       
                                                        <a href="<?php echo base_url() ?>KonfirmasiOrder/form/DetailHistory/<?php echo $roworder->OrderID ?>" title="Detail" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></a>

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
<?php $this->load->view('Staff/FINANCE/footer'); ?>
        