<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Deployed Mooring Location Summary</title>
<!-- Bootstrap theme -->
<link rel="stylesheet" type="text/css" id="bootstrap.css" href="../node_modules/bootstrap/dist/css/bootstrap.css.spacelab.V3.css" />
<link rel="stylesheet" type="text/css" id="custom.css" href="../scripts/bootstrap_datatables/bootstrap_datatables.css" />
<link rel="stylesheet" type="text/css" id="custom.css" href="../scripts/css/custom.css" />
<link rel="stylesheet" href="../node_modules/leaflet/dist/leaflet.css" />

</head>

<body>

<!-- local php includes
================================================== -->
<?php 
include('../ecofoci_images/header.php'); 
include('php_routines/mooring_php_reports.php');
include('php_routines/nav_header.php');

$MooringID = htmlspecialchars($_GET['mooringview_id']);

$MooringID_short = str_replace('-','',$MooringID);
$MooringID_short = strtolower($MooringID_short);
?>

<!-- Bootstrap - Static navbar
================================================== -->
<div class="container-fluid">


<!-- Static navbar -->
<?php build_navbar("Mooring Location Summary"); ?>

<!-- End Navigation
================================================== -->



<div class="col-md-12" style="padding:20px;">



<div class="container">

<div class="col-lg-12 col-md-12 col-sm-12">
<?php echo '<a href="http://ecofoci-field.pmel.noaa.gov:8080/erddap/search/index.html?&searchFor='.$MooringID.'">Data Sets</a>' ?>
</div>
<div class="col-lg-3 col-md-12 col-sm-12">
<h3>Mooring Location Summary</h3>   

<!-- leaflet Maps
================================================== -->
<!-- Leaflet map -->
<script type="text/javascript" src="../node_modules/leaflet/dist/leaflet.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.js"></script>
<script type="text/javascript" src="http://maps.stamen.com/js/tile.stamen.js?v1.3.0"></script>
<div id="leaflet_map" style="width: 100%; height: 400px"></div>
<script>

    var Esri_OceanBasemap = new L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles &copy; Esri &mdash; Sources: GEBCO, NOAA, CHS, OSU, UNH, CSUMB, National Geographic, DeLorme, NAVTEQ, and Esri',
        maxZoom: 13
    });

    //http://maps.ngdc.noaa.gov/arcgis/rest/services/web_mercator/gebco08_contours/MapServer/tile/{z}/{y}/{x}
    // replace "toner" here with "terrain" or "watercolor"
    //var layer = new L.StamenTileLayer("toner");
    var mymap = new L.Map("leaflet_map", {
        center: new L.LatLng(60.0, -160),
        zoom: 3
    });
    mymap.addLayer(Esri_OceanBasemap);    

    var geojsonMarkerOptions = {
        radius: 4,
        fillColor: "#D54339",
        color: "#ffffff",
        weight: .2,
        opacity: 1,
        fillOpacity: 0.8
    };
    var geojsonLayer = new L.GeoJSON.AJAX("<?php echo 'http://akutan.pmel.noaa.gov:8080/erddap/tabledap/datasets_Mooring_'.$MooringID_short.'_final.geoJson?latitude%2Clongitude&distinct()'?>", {
        pointToLayer: function (feature, latlng) {
            return L.circleMarker(latlng, {
            radius: 4,
            color: "#ffffff",
            weight: .2,
            opacity: 1,
            fillOpacity: 0.8,
            fillColor: "#D54339",
        });
        },
    });  

    geojsonLayer.addTo(mymap);


</script>
</div>
<!-- End Leaflet map -->
<div class="col-lg-9 col-md-12 col-sm-12 hidden-xs">

<h3>Timeseries</h3>   

<ul class="nav nav-tabs">
    <li class="active"><a href="#CA" data-toggle="tab">Final</a></li>
    <li><a href="#CB" data-toggle="tab">Preliminary</a></li>
</ul>
<div class="tabbable">
    <div class="tab-content">
        <div class="tab-pane active" id="CA">
            <iframe src="<?php echo 'MooringQuicklooks_hc.php?MooringID='.$MooringID_short.'_temperature'?>" style="width: 100%; height: 400px"></iframe><br>
            <iframe src="<?php echo 'MooringQuicklooks_hc.php?MooringID='.$MooringID_short.'_salinity'?>" style="width: 100%; height: 400px"></iframe><br>
            <iframe src="<?php echo 'MooringQuicklooks_hc.php?MooringID='.$MooringID_short.'_chlorophyll_fluorescence'?>" style="width: 100%; height: 400px"></iframe><br>
        </div>
      <div class="tab-pane" id="CB">
            <iframe src="<?php echo 'MooringQuicklooks_hc.php?MooringID='.$MooringID_short.'_temperature_prelim'?>" style="width: 100%; height: 400px"></iframe><br>
            <iframe src="<?php echo 'MooringQuicklooks_hc.php?MooringID='.$MooringID_short.'_salinity_prelim'?>" style="width: 100%; height: 400px"></iframe><br>
            <iframe src="<?php echo 'MooringQuicklooks_hc.php?MooringID='.$MooringID_short.'_chlor_fluorescence_prelim'?>" style="width: 100%; height: 400px"></iframe><br>
      </div>
    </div>
  </div> <!-- /tabbable -->

</div>

</div>

<!-- end content
================================================== -->


    <p class="text-muted"><?php include('../ecofoci_images/footer.php'); ?></p>
</div>

<!-- end footer
================================================== -->

</div>

<noscript><div >This Website requires your browser to be JavaScript enabled.</div></noscript>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../scripts/jquery_1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


</body>
</html>