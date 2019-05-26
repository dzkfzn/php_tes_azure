<?php $this->load->view('Staff/manager/header');

$report5_1 = "";
foreach ($report5 as $rowdata) {

    $report5_1 .= "{ name: '" . $rowdata->GamesName . "', data: [" . $rowdata->TotalQuantity . "] },";
}


$report66 = "";
foreach ($report6 as $rowdata) {

    if ($rowdata->Bulan1 == null) {
        $rowdata->Bulan1 = 0;
    }
    if ($rowdata->Bulan2 == null) {
        $rowdata->Bulan2 = 0;
    }
    if ($rowdata->Bulan3 == null) {
        $rowdata->Bulan3 = 0;
    }
    if ($rowdata->Bulan4 == null) {
        $rowdata->Bulan4 = 0;
    }
    if ($rowdata->Bulan5 == null) {
        $rowdata->Bulan5 = 0;
    }
    if ($rowdata->Bulan6 == null) {
        $rowdata->Bulan6 = 0;
    }
    if ($rowdata->Bulan7 == null) {
        $rowdata->Bulan7 = 0;
    }
    if ($rowdata->Bulan8 == null) {
        $rowdata->Bulan8 = 0;
    }
    if ($rowdata->Bulan9 == null) {
        $rowdata->Bulan9 = 0;
    }
    if ($rowdata->Bulan10 == null) {
        $rowdata->Bulan10 = 0;
    }
    if ($rowdata->Bulan11 == null) {
        $rowdata->Bulan11 = 0;
    }
    if ($rowdata->Bulan12 == null) {
        $rowdata->Bulan12 = 0;
    }


    $report66 .= "data: ['" . $rowdata->Bulan1 . "', "
            . "" . $rowdata->Bulan2 . ","
            . "" . $rowdata->Bulan3 . ","
            . "" . $rowdata->Bulan4 . ","
            . "" . $rowdata->Bulan5 . ","
            . "" . $rowdata->Bulan6 . ","
            . "" . $rowdata->Bulan7 . ","
            . "" . $rowdata->Bulan8 . ","
            . "" . $rowdata->Bulan9 . ","
            . "" . $rowdata->Bulan10 . ","
            . "" . $rowdata->Bulan11 . ","
            . "" . $rowdata->Bulan12 . "]"
            . "";
}

$report66 = str_replace("'","",$report66);

$string1 = rtrim($report5_1, ',');
//$string2 = rtrim($report5_2, ',');
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


<div class="charts-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                <div class="charts-single-pro responsive-mg-b-30">
                    <div class="alert-title">
                        <h2>Laporan Profit Gamegevity Tahun ini</h2>
                    </div>
                    <div id="bar1-chart">
                        <div id="container3"></div>
                    </div>
                </div>
            </div>
          
        </div>
     
    </div>
</div>

<script type="text/javascript">


    Highcharts.chart('container3', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Profit Gamegevity Tahunan'
        },
        subtitle: {
            text: 'Source: gamegevity.com'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Rupiah'
            }
        },
        tooltip: {
            pointFormat: '{series.name} (20% * Harga pergames) <b>Rp. {point.y:,.0f}</b>'
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
                name: 'Pendapatan',
                <?php echo $report66 ?>
            }]
    });
</script>


<!-- /container --> 
<?php $this->load->view('Staff/manager/footer'); ?> 

<script type="text/javascript">


    Highcharts.chart('container', {
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                        this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });

</script>

<script type="text/javascript">


    Highcharts.chart('container2', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Game Terlaris Bulan Ini'
        },
        subtitle: {
            text: 'Source: gamegevity.com'
        },
        xAxis: {
            categories: [
                '<?php echo date('F'); ?>'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Pembelian'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.0f} </b></td></tr>',
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
        series: [

<?php echo $string1; ?>


        ]
    });
</script>

