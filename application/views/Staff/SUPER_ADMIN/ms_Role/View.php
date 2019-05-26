<?php $this->load->view('Staff/SUPER_ADMIN/header'); ?>


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
                            <h1>Role <span class="table-project-n">Data</span> Table</h1>
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
                                    <a href="<?php echo base_url() ?>role/form/add">Add Role</a>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="no">NO</th>
                                            <!--<th data-field="id">ID</th>-->
                                            <th data-field="name">Role Title</th>
                                            <th data-field="status">Status</th>

                                            <th data-field="action">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($qrole)) { ?>
                                            <tr> 
                                                <td colspan="8">Data tidak ditemukan</td> 
                                            </tr> 
                                            <?php
                                        } else {
                                            $no = 0;
                                            foreach ($qrole as $rowrole) {
                                                $no++;
                                                ?> 
                                                <tr> 
                                                    <td><?php echo $no ?></td>
                                                    <!--<td><?php echo $rowrole->RoleID ?></td>--> 
                                                    <td><?php echo $rowrole->RoleName ?></td>
                                                    <td>
                                                        <?php if ($rowrole->RoleStatus == 0) { ?>
                                                            <button class="ds-setting">Disabled</button>
                                                        <?php } else {
                                                            ?>
                                                            <button class="pd-setting">Active</button>
                                                            <?php
                                                        }
                                                        ?>

                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url() ?>role/form/edit/<?php echo $rowrole->RoleID ?>" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                                        <?php if ($rowrole->RoleStatus == 0) { ?>
                                                            <a href="<?php echo base_url() ?>role/aktif/<?php echo $rowrole->RoleID ?>" title="Set Active" class="pd-setting-ed"><i class="fa fa-check" aria-hidden="true"></i></a>

                                                        <?php } else {
                                                            ?>
                                                            <a href="<?php echo base_url() ?>role/hapus/<?php echo $rowrole->RoleID ?>" id="btn" title="Set Disable" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

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
<?php $this->load->view('Staff/SUPER_ADMIN/footer'); ?>
        