<?php $this->load->view('Staff/ADMIN/header'); ?> 


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
                            <h1>Discount <span class="table-project-n">Data</span> Table</h1>
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
                                <div>
                                     
                                </div>
                                <br>
                                <div class="row">
                                    <div class="add-product">
                                    
                                </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                    <div class="add-product">
                                    <a href="<?php echo base_url() ?>discount/form/add_regular">Add Regular Discount</a>
                                </div>
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 i-checks">
                                    <div class="add-product">
                                    <a href="<?php echo base_url() ?>discount/form/addEvent">Add Event Discount</a>
                                </div>
                                </div>
                               
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="No">NO</th>
                                            <th data-field="ID">ID</th>
                                            <th data-field="Games">Games</th>
                                            <th data-field="Type">Type</th>
                                            <th data-field="Event">Event</th>
                                            <th data-field="StartDate">Start Date</th>
                                            <th data-field="EndDate">End Date</th>
                                            
                                            <th data-field="Label">Amount of Discount</th>
                                            <th data-field="Status">Status</th>
                                            <th data-field="action">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($qdiscount)) { ?>
                                            <tr> 
                                                <td colspan="9">Data tidak ditemukan</td> 
                                            </tr> 
                                            <?php
                                        } else {
                                            $no = 0;
                                            foreach ($qdiscount as $rowdiscount) {
                                                $no++;
                                                ?> 
                                                <tr> 
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $rowdiscount->id ?></td> 
                                                    <td><?php echo $rowdiscount->gName ?></td> 
                                                    <td><?php echo $rowdiscount->type ?></td>
                                                    <td><?php echo $rowdiscount->eName ?></td>
                                                    <td><?php echo $rowdiscount->sd ?></td>
                                                    <td><?php echo $rowdiscount->ed ?></td>
                                                     <td><?php echo $rowdiscount->da ?>%</td>
                                                    <td>
                                                        <?php if ( $rowdiscount->s == 0) { ?>
                                                            <button class="ds-setting">Disabled</button>
                                                        <?php } else {
                                                            ?>
                                                            <button class="pd-setting">Active</button>
                                                            <?php


                                                        }
                                                        ?>
                                                    </td>


                                                    <td>
                                                         <a href="<?php echo base_url() ?>discount/form/edit/<?php echo $rowdiscount->id ?>" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                       
                                                        <?php if ($rowdiscount->s == 0) { ?>
                                                            <a href="<?php echo base_url() ?>discount/aktif/<?php echo $rowdiscount->id ?>" title="Set Active" class="pd-setting-ed"><i class="fa fa-check" aria-hidden="true"></i></a>

                                                        <?php } else {
                                                            ?>
                                                            <a href="<?php echo base_url() ?>discount/hapus/<?php echo $rowdiscount->id ?>" id="btn" title="Set Disable" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                                                            <?php
                                                        }
                                                        ?>

                                                    </td>

                                                </tr> 
                                                <?php
                                            }
                                            $no2=0;
                                            foreach ($qdiscount2 as $rowdiscount2) {
                                                $no2++;
                                                ?> 
                                                <tr> 
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $rowdiscount2->id ?></td> 
                                                    <td><?php echo $rowdiscount2->gName ?></td> 
                                                    <td><?php echo $rowdiscount2->type ?></td>
                                                    <td><?php echo "" ?></td>
                                                    <td><?php echo $rowdiscount2->sd ?></td>
                                                    <td><?php echo $rowdiscount2->ed ?></td>
                                                     <td><?php echo $rowdiscount2->da ?>%</td>
                                                    <td>
                                                        <?php if ( $rowdiscount2->s == 0) { ?>
                                                            <button class="ds-setting">Disabled</button>
                                                        <?php } else {
                                                            ?>
                                                            <button class="pd-setting">Active</button>
                                                            <?php

                                                            
                                                        }
                                                        ?>
                                                    </td>


                                                    <td>
                                                         <a href="<?php echo base_url() ?>discount/form/edit/<?php echo $rowdiscount2->id ?>" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                       
                                                        <?php if ($rowdiscount2->s == 0) { ?>
                                                            <a href="<?php echo base_url() ?>discount/aktif/<?php echo $rowdiscount2->id ?>" title="Set Active" class="pd-setting-ed"><i class="fa fa-check" aria-hidden="true"></i></a>

                                                        <?php } else {
                                                            ?>
                                                            <a href="<?php echo base_url() ?>discount/hapus/<?php echo $rowdiscount2->id ?>" id="btn" title="Set Disable" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

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
<?php $this->load->view('Staff/ADMIN/footer'); ?>


        