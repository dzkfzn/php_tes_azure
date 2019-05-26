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
                            <h1>Games <span class="table-project-n">Data</span> Table</h1>
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
                                    <a href="<?php echo base_url() ?>games/form/add">Add Games</a>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="No">NO</th>
                                            <th data-field="GamesID">Games ID</th>
                                            <!--<th data-field="SyReqID">SyReqID</th>-->
                                            <!--<th data-field="GamesName">Developer Name</th>-->
                                            <th data-field="DeveloperName">Games Name</th>
                                            <!--<th data-field="ReleaseDate">Release Date</th>-->
                                            <!--<th data-field="Price">Price</th>-->
                                            <!--<th data-field="Description">Description</th>-->
                                            <!--<th data-field="Platform">Platform</th>-->
                                            <th data-field="Status">Status Confirm</th>
                                            <th data-field="Status">Status Active</th>
                                            <th data-field="Rating">Rating</th>
                                            <!--<th data-field="path">File</th>-->
                                            <!--<th data-field="ModifiedBy">Last Modified By</th>-->
                                            <!--<th data-field="ModifiedDate">Last Modified Date</th>-->
                                            <th data-field="action">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($qgames)) { ?>
                                            <tr> 
                                                <td colspan="17">Data tidak ditemukan</td> 
                                            </tr> 
                                            <?php
                                        } else {
                                            $no = 0;
                                            foreach ($qgames as $rowgames) {
                                                $no++;
                                                ?> 
                                                <tr> 
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $rowgames->GamesID ?></td> 
                                                    <!--<td><?php echo $rowgames->DeveloperName ?></td>-->
                                                    <td><?php echo $rowgames->GamesName ?></td>
        <!--                                                    <td>
                                                    <?php
                                                    $date = $rowgames->GamesReleaseDate;
                                                    echo date("M j, Y", strtotime($date));
                                                    ;
                                                    ?>
                                                    </td>-->
        <!--                                                    <td>
                                                        <div style='float: left; text-align: left'>Rp </div>
                                                        <div style='float: right; text-align: right'><?php echo number_format($rowgames->GamesPrice, 2, ",", "."); ?></div>
                                                    </td>-->
                                                    <!--<td><?php echo $rowgames->GamesDesc ?></td>-->
                                                    <!--<td><?php echo $rowgames->GamesPlatform ?></td>-->
                                                    <td><?php echo $rowgames->GamesStatusVerif ?></td>
                                                    <td>
                                                        <?php if ($rowgames->GamesStatusActive == 0) { ?>
                                                            <button class="ds-setting">Disabled</button>
                                                        <?php } else {
                                                            ?>
                                                            <button class="pd-setting">Active</button>
                                                            <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $rowgames->GamesRating ?></td>
                                                    <!--<td><?php echo $rowgames->GamesPath ?></td>-->
                                                    <!--<td><?php echo $rowgames->GamesModifiedBy ?></td>-->
                                                    <!--<td><?php echo $rowgames->GamesModifiedDate ?></td>-->

                                                    <td>
                                                        <a href="<?php echo base_url() ?>games/form/detail/<?php echo $rowgames->GamesID ?>" title="Detail" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                                        <a href="<?php echo base_url() ?>games/form/edit/<?php echo $rowgames->GamesID ?>" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                                        <?php if ($rowgames->GamesStatusActive == 0) { ?>
                                                            <!--<a href="<?php echo base_url() ?>games/aktif/<?php echo $rowgames->GamesID ?>" title="Set Active" class="pd-setting-ed"><i class="fa fa-check" aria-hidden="true"></i></a>-->

                                                        <?php } else {
                                                            ?>
                                                            <!--<a href="<?php echo base_url() ?>games/hapus/<?php echo $rowgames->GamesID ?>" id="btn" title="Set Disable" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></a>-->

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
        