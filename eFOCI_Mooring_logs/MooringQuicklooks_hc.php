<!DOCTYPE html>
<head>
  
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/boost.js"></script>

<link rel="stylesheet" type="text/css" id="http://ecofoci-field.pmel.noaa.gov/bell/dynamic_data/EcoFOCI_Moorings/css/highcharts.css" href="css/highcharts.css" />
</head>
<body>

<?php 
$MooringID = htmlspecialchars($_GET['MooringID']);
?>

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
    Highcharts has extensive support for time series, and will adapt
    intelligently to the input data. Click and drag in the chart to zoom in
    and inspect the data.
  </p>
</figure>

<script type="text/javascript">


Highcharts.chart("container", {
    chart: {
      zoomType: 'xy'
    },
    legend: {
        enabled: true
    },
    title: {
        text: <?php echo '"'.$MooringID.'"';?>,
        useHTML:true
    },
    data: {
        csvURL:
        <?php echo '"http://ecofoci-field.pmel.noaa.gov/bell/dynamic_data/EcoFOCI_Moorings/Mooring_CSV/'.$MooringID.'.csv"';?>,
    },

    tooltip: {
        xDateFormat: '%Y-%m-%d %H:%M'
    },

    xAxis: {
        type: "datetime"
    },
    yAxis: {
        title: { text: null }
    }
});

</script>
</body>
</html>