 <?php $this->load->view('Staff/DEVELOPER/header'); ?> 

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

?>
<style>
    .main-sparkline8-hd h1, .main-sparkline9-hd h1, .main-spark7-hd h1, .main-sparkline10-hd h1, .main-sparkline11-hd h1, .main-sparkline12-hd h1, .main-sparkline13-hd h1, .main-sparkline14-hd h1 {
        font-size: 40px;
        color: #303030;
    }

</style>

<!-- income order visit user Start -->
<div class="income-order-visit-user-area mg-t-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="income-dashone-total reso-mg-b-30">
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span></span><span class="counter"><?php echo $report11 ?> Games</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline1"></span>
                            </div>
                        </div>
                        <div class="income-range">
                            <p>Total Games Belum dikonfirmasi</p>
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
                                <h3><span></span><span class="counter"><?php echo $report22 ?> Games</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline1"></span>
                            </div>
                        </div>
                        <div class="income-range">
                            <p>Total Games Ditolak</p>
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
                                <h3><span></span><span class="counter"><?php echo $report33 ?> Games</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline1"></span>
                            </div>
                        </div>
                        <div class="income-range">
                            <p>Total Games Terima</p>
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
                                <h3><span></span><span class="counter"><?php echo $report44 ?> Games</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline1"></span>
                            </div>
                        </div>
                        <div class="income-range">
                            <p>Total Semua Games</p>
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
<div class="charts-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="charts-single-pro responsive-mg-b-30">
                    <div class="alert-title">
                        <h2>Bar Chart</h2>
                        <p>A bar chart provides a way of showing data values. It is sometimes used to show trend data. we create a bar chart for a single dataset and render that in our page.</p>
                    </div>
                    <div id="bar1-chart">
                        <div id="container"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="charts-single-pro">
                    <div class="alert-title">
                        <h2>Bar Chart vertical</h2>
                        <p>A bar chart provides a way of showing data values represented as vertical bars. It is sometimes used to show trend data, and the comparison of multiple data sets</p>
                    </div>
                    <div id="line2-chart">
                        <div id="container2"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="charts-single-pro mg-tb-30 responsive-mg-b-0">
                    <div class="alert-title">
                        <h2>Bar Chart Horizontal</h2>
                        <p>A bar chart provides a way of showing data values represented as Horizontal bars. It is sometimes used to show trend data, and the comparison of multiple data sets</p>
                    </div>
                    <div id="bar3-chart">
                        <canvas id="barchart3"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="charts-single-pro mg-tb-30">
                    <div class="alert-title">
                        <h2>Bar Chart Multi axis</h2>
                        <p>This sample illustrates how you can display a data series, using multiple axes in your business chart. It is sometimes used to show trend data, and the comparison of multiple data sets</p>
                    </div>
                    <div id="bar4-chart">
                        <canvas id="barchart4"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="charts-single-pro">
                    <div class="alert-title">
                        <h2>Bar Chart Stacked</h2>
                        <p>A bar chart provides a way of showing data values represented as Stacked bars. It is sometimes used to show trend data, and the comparison of multiple data sets</p>
                    </div>
                    <div id="bar5-chart">
                        <canvas id="barchart5"></canvas>
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
                name: '<?php echo $rowdata->GamesName; ?>',
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
<?php $this->load->view('Staff/DEVELOPER/footer'); ?>