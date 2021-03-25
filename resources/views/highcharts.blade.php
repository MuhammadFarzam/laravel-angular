<html>
<head>
    <title>Highcharts Example - LaravelCode</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"></script>

<style>
.common-css{
    background: white;
    border: 1px solid black;
    /* min-height:200px; */
    border-radius: 4px;
}
.highcharts-background {
	fill: #efefef;
	stroke: #a4edba;
	stroke-width: 2px;
}

#main-div{
    display: grid;
    grid-gap: 0.5rem;
    grid-template-columns: repeat(2,1fr);
    grid-template-rows: 1fr 1fr 1fr;
    /* height:100vh; */
}
#container1{
    grid-column: 1/2;
}
#container2{
    grid-column: 2/3;
}
#container3{
    grid-column: 1/3;
}
#container4{
    grid-column: 1/2;
}
#container5{
    grid-column: 2/3;
}

</style>
</head>

<body>

<div id="container" style="margin: 0;padding:0;">
    <div id="main-div" style="margin:0px;padding:0;">

        <div id="container1" class="common-css">
        </div>
        <div id="container2" class="common-css">
        </div>

        <div id="container3" class="common-css">
        </div>

        <div id="container4" class="common-css">
        </div>
        <div id="container5" class="common-css">
        </div>

    </div>
</div>


</body>


  
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script type="text/javascript">

Highcharts.chart('container3', {

        chart: {
            type: 'column'
        },
        title: {
            text: 'New User Growth, 2019'
        },
         xAxis: {
            lineWidth: 0,
            minorGridLineWidth: 0,
            lineColor: 'transparent',
            categories: ['January', 'February', 'March', 'April']
        },
        yAxis: {
            visible: false,
            // min:0,
            // tickWidth: 0,
            // crosshair: false,
            // lineWidth: 0,
            // gridLineWidth:0,
            // title: '',
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            column: {
                pointPadding: 0,
                groupPadding: 0.1,
                borderWidth: 0
            }
        },
        series: [{
            showInLegend: false,
            data: [12,15,17,19],
            dataLabels: {
                enabled: true,
                color: '#FFFFFF',
                align: 'center',
                y: 50,
            }
        },{
            showInLegend: false,
            data: [23,26,28,1],
            dataLabels: {
                enabled: true,
                color: '#FFFFFF',
                align: 'center',
                y: 50,            }
        }],

    });

    Highcharts.chart('container4', {

        chart: {
            type: 'pie'
        },
        title: {
            text: 'New User Growth, 2019'
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            pie: {
                borderWidth: 0,
                size: 200,
                center: [300, 150],
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    connectorShape: 'crookedLine',
                    crookDistance: '90%',
                    alignTo: 'plotEdges',
                    format: '<b>{point.name}</b>: {point.y}'
                }
            }
        },
        series: [{
            showInLegend: false,
            data: [12,15,17,19],
        }],

    });

    Highcharts.chart('container5', {

        chart: {
            type: 'pie'
        },
        title: {
            text: 'New User Growth, 2019'
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            pie: {
                borderWidth: 0,
                size: 200,
                center: [300, 150],
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    connectorShape: 'crookedLine',
                    crookDistance: '90%',
                    alignTo: 'plotEdges',
                    format: '<b>{point.name}</b>: {point.y}'
                }
            }
        },
        series: [{
            showInLegend: false,
            data: [12,15,17,19],
        }],

    });


</script>
</html>