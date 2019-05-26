<?php $this->load->view('Staff/SUPER_ADMIN/header'); ?> 

<?php
foreach ($report1 as $rowdata) {

    $report11 = $rowdata->hitung;
}
foreach ($report2 as $rowdata) {

    $report22 = $rowdata->hitung;
}
foreach ($report3 as $rowdata) {

    $report33 = $rowdata->hitung;
}
foreach ($report4 as $rowdata) {

    $report44 = $rowdata->hitung;
}

foreach ($report5 as $rowdata) {

    $report55 = $rowdata->hitung;
}
?>

<style>
    .main-sparkline8-hd h1, .main-sparkline9-hd h1, .main-spark7-hd h1, .main-sparkline10-hd h1, .main-sparkline11-hd h1, .main-sparkline12-hd h1, .main-sparkline13-hd h1, .main-sparkline14-hd h1 {
        font-size: 40px;
        color: #303030;
    }

</style>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>

<!-- income order visit user Start -->
<div class="income-order-visit-user-area mg-t-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="income-dashone-total reso-mg-b-30">
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span></span><span class="counter"><?php echo $report11 ?> Karyawan</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline1"></span>
                            </div>
                        </div>
                        <div class="income-range">
                            <p>Jumlah Karyawan</p>
                            <span class="income-percentange bg-green"><span class="counter">
                                </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="income-dashone-total reso-mg-b-30">
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span></span><span class="counter"><?php echo $report22 ?> Karyawan</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline1"></span>
                            </div>
                        </div>
                        <div class="income-range">
                            <p>Total Admin</p>
                            <span class="income-percentange bg-green"><span class="counter">
                                </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="income-dashone-total reso-mg-b-30">
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span></span><span class="counter"><?php echo $report33 ?> Karyawan</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline1"></span>
                            </div>
                        </div>
                        <div class="income-range">
                            <p>Total Super Admin</p>
                            <span class="income-percentange bg-green"><span class="counter">
                                </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="income-dashone-total reso-mg-b-30">
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span></span><span class="counter"><?php echo $report44 ?> Karyawan</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline1"></span>
                            </div>
                        </div>
                        <div class="income-range">
                            <p>Total Finance</p>
                            <span class="income-percentange bg-green"><span class="counter">
                                </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="income-dashone-total reso-mg-b-30">
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span></span><span class="counter"><?php echo $report55 ?> Karyawan</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline1"></span>
                            </div>
                        </div>
                        <div class="income-range">
                            <p>Total Manager</p>
                            <span class="income-percentange bg-green"><span class="counter">
                                </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    Highcharts.chart('container', {

    title: {
    text: 'Solar Employment Growth by Sector, 2010-2016'
    },
            subtitle: {
            text: 'Source: thesolarfoundation.com'
            },
            yAxis: {
            title: {
            text: 'Number of Employees'
            }
            },
            legend: {
            layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
            },
            plotOptions: {
            series: {
            label: {
            connectorAllowed: false
            },
                    pointStart: 2010
            }
            },
            series: [{
            name: 'Installation',
                    data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
            }, {
            name: 'Manufacturing',
                    data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
            }, {
            name: 'Sales & Distribution',
                    data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
            }, {
            name: 'Project Development',
                    data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
            }, {
            name: 'Other',
                    data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
            }],
            responsive: {
            rules: [{
            condition: {
            maxWidth: 500
            },
                    chartOptions: {
                    legend: {
                    layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                    }
                    }
            }]
            }

    });</script>


<script type="text/javascript">


    Highcharts.chart('container2', {
    chart: {
    type: 'column'
    },
            title: {
            text: 'Monthly Average Rainfall'
            },
            subtitle: {
            text: 'Source: WorldClimate.com'
            },
            xAxis: {
            categories: [
                    'Januari'
            ],
                    crosshair: true
            },
            yAxis: {
            min: 0,
                    title: {
                    text: 'Rainfall (mm)'
                    }
            },
            tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
            },
            plotOptions: {
            column: {
            pointPadding: 0.2,
                    borderWidth: 0
            }
            },
            series: ,
            {
<?php
foreach ($report5 as $rowdata) {
    ?>
                name: '<?php echo $rowdata->KaryawanName; ?>',
                        data: [<?php echo $rowdata->TotalQuantity; ?>]
    <?php
    $report5_1 .= ",";
    $report5_2 .= ",";
};
?>
        }]

    });
</script>
<!-- /container --> 

<!-- /container --> 
<?php $this->load->view('Staff/SUPER_ADMIN/footer'); ?>