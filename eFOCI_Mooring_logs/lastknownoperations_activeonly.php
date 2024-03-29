<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Instrument Inventory and Status (Active)</title>
<!-- Bootstrap theme -->
<link rel="stylesheet" type="text/css" id="bootstrap.css" href="../node_modules/bootstrap/dist/css/bootstrap.css.spacelab.V3.css" />
<link rel="stylesheet" type="text/css" id="custom.css" href="../scripts/css/custom.css" />

</head>

<body>

<!-- local php includes
================================================== -->
<?php 
include('../ecofoci_images/header.php'); 
include('php_routines/mooring_php_reports.php');
include('php_routines/nav_header.php');
?>

<!-- Bootstrap - Static navbar
================================================== -->
<div class="container-fluid">


<!-- Static navbar -->
<?php build_navbar("InstrumentStatus") ?>

<!-- End Navigation
================================================== -->


<div class="col-md-12 center-block" style="padding:20px;">

<h4>Legend</h4>
<p> <em style="color: grey;">Grey</em> values have no cal history in the database (or have mismatching serial no) </p>
<p> <em style="color: red;">Red</em> values are not active equipment (lost/destroyed/not recovered/etc). </p>
<p> <em style="color: blue;">Blue</em> values have calibrations that are 3 years old or older from today </p>
<p> <em style="color: yellow;">Yellow</em> values are currently deployed instruments based on the deployment log sheets </p>

<p>To view all <a href="lastknownoperations.php">all EcoFOCI</a> instruments</p>



<h4> Seabird Instruments (CTD)</h4>
  <ul class="nav nav-tabs">
    <li class="active"><a href="#AAA" data-toggle="tab">Temperature (SBE-3)</a></li>
    <li><a href="#AAB" data-toggle="tab">Conductivity (SBE-4)</a></li>
    <li><a href="#AAC" data-toggle="tab">DO (SBE-43)</a></li>
    <li><a href="#AAD" data-toggle="tab">CTD (911 / 9p11)</a></li>
    <li><a href="#AAE" data-toggle="tab">CTD (Prawler)</a></li>
    <li><a href="#AAF" data-toggle="tab">Seacat Profiler (SBE-19)</a></li>
    <li><a href="#AAG" data-toggle="tab">Pumps</a></li>
    <li><a href="#AAH" data-toggle="tab">Transmissometers</a></li>
  </ul>
  <div class="tabbable">
    <div class="tab-content">
      <div class="tab-pane active" id="AAA">
        <p><?php last_operations_report('inst_sbe3','cal_sbe3','True'); ?></p>
      </div>
      <div class="tab-pane" id="AAB">
        <p><?php last_operations_report('inst_sbe4','cal_sbe4','True'); ?></p>
      </div>
      <div class="tab-pane" id="AAC">
        <p><?php last_operations_report('inst_sbe43','cal_sbe43','True'); ?></p>
      </div>
      <div class="tab-pane" id="AAD">
        <p><?php last_operations_report('inst_sbe9','cal_sbe9','True'); ?></p>        
      </div>
      <div class="tab-pane" id="AAE">
        <p><?php last_operations_report('inst_sbeprawler','cal_sbeprawler','True'); ?></p>        
      </div>      
      <div class="tab-pane" id="AAF">
        <p><?php last_operations_report('inst_sbe19','cal_sbe19','True'); ?></p>        
      </div>
      <div class="tab-pane" id="AAG">
        <p><?php last_operations_report('inst_sbe5','cal_sbe5','True'); ?></p>        
      </div>
      <div class="tab-pane" id="AAH">
        <p><?php last_operations_report('inst_trans','cal_trans','True'); ?></p>        
      </div>
    </div>
  </div> <!-- /tabbable -->

  <h4> Seabird Instruments (Underway)</h4>
  <ul class="nav nav-tabs">
    <li class="active"><a href="#AAAA" data-toggle="tab">Temperature (SBE-38)</a></li>
    <li><a href="#AAAB" data-toggle="tab">MicroTSG (SBE-45)</a></li>
    <li><a href="#AAAC" data-toggle="tab">Hull Temperature (SBE-48)</a></li>
  </ul>
  <div class="tabbable">
    <div class="tab-content">
      <div class="tab-pane active" id="AAAA">
        <p><?php last_operations_report('inst_sbe38','cal_sbe38','True'); ?></p>
      </div>
      <div class="tab-pane" id="AAAB">
        <p><?php last_operations_report('inst_sbe45','cal_sbe45','True'); ?></p>
      </div>
      <div class="tab-pane" id="AAAC">
        <p><?php last_operations_report('inst_sbe48','cal_sbe48','True'); ?></p>
      </div>
    </div>
  </div> <!-- /tabbable -->  

<h4> Seabird Instruments </h4>
  <ul class="nav nav-tabs">
    <li class="active"><a href="#AA" data-toggle="tab">MicroCATSs (SBE-37)</a></li>
    <li><a href="#AB" data-toggle="tab">SeaCATs (SBE-16)</a></li>
    <li><a href="#AC" data-toggle="tab">FastCATs (SBE-49)</a></li>
    <li><a href="#AD" data-toggle="tab">Temperature (SBE-39)</a></li>
    <li><a href="#AE" data-toggle="tab">Temperature (SBE-56)</a></li>
    <li><a href="#AF" data-toggle="tab">Wave/Tide (SBE-26)</a></li>
  </ul>
  <div class="tabbable">
    <div class="tab-content">
      <div class="tab-pane active" id="AA">
        <p><?php last_operations_report_wpressure('inst_sbe37','cal_sbe37','True'); ?></p>
      </div>
      <div class="tab-pane" id="AB">
        <p><?php last_operations_report_wpressure('inst_sbe16','cal_sbe16','True'); ?></p>
      </div>
      <div class="tab-pane" id="AC">
        <p><?php last_operations_report('inst_sbe49','cal_sbe49','True'); ?></p>
      </div>
      <div class="tab-pane" id="AD">
        <p><?php last_operations_report_wpressure('inst_sbe39','cal_sbe39','True'); ?></p>
      </div>
      <div class="tab-pane" id="AE">
        <p><?php last_operations_report('inst_sbe56','cal_sbe56','True'); ?></p>
      </div>
      <div class="tab-pane" id="AF">
        <p><?php last_operations_report('inst_sbe26','cal_sbe26','True'); ?></p>
      </div>
    </div>
  </div> <!-- /tabbable -->
  

<h4> Mooring Instruments </h4>
  <ul class="nav nav-tabs">
    <li class="active"><a href="#BA" data-toggle="tab">Micro Temperature Recorders (MTR)</a></li>
    <li><a href="#BB" data-toggle="tab">PhotoSynth Activ. Rad. (PAR)</a></li>
    <li><a href="#BC" data-toggle="tab">Nitrates</a></li>
    <li><a href="#BD" data-toggle="tab">Flourometers</a></li>
    <li><a href="#BE" data-toggle="tab">Gas Tension</a></li>
  </ul>
  <div class="tabbable">
    <div class="tab-content">
      <div class="tab-pane active" id="BA">
        <p><?php last_operations_report('inst_mtr','cal_mtr','True'); ?></p>
      </div>
      <div class="tab-pane" id="BB">
        <p><?php last_operations_report('inst_par','cal_par','True'); ?></p>
      </div>
      <div class="tab-pane" id="BC">
        <p><?php last_operations_report('inst_nitrates','cal_nitrates','True'); ?></p>
      </div>
      <div class="tab-pane" id="BD">
        <p><a href="optode_fluor_availability.php">Oxygen / Fluorometer Availability Page</a></p>
      </div>    
      <div class="tab-pane" id="BE">
        <p><?php last_operations_report('inst_gastension','cal_gastension','False'); ?></p>
      </div>
    </div>
  </div> <!-- /tabbable -->
  
<h4> Surface Moorings </h4>
  <ul class="nav nav-tabs">
    <li class="active"><a href="#CA" data-toggle="tab">Eppley</a></li>
    <li><a href="#CB" data-toggle="tab">Deltek SPN1</a></li>
    <li><a href="#CC" data-toggle="tab">Weather Sensors</a></li>
    <li><a href="#CD" data-toggle="tab">Wind Sensors</a></li>
  </ul>
  <div class="tabbable">
    <div class="tab-content">
      <div class="tab-pane active" id="CA">
        <p><?php last_operations_report('inst_eppley','cal_eppley','True'); ?></p>
      </div>
      <div class="tab-pane" id="CB">
        <p><?php last_operations_report('inst_spn1','cal_spn1','True'); ?></p>
      </div>
      <div class="tab-pane" id="CC">
        <p><?php last_operations_report('inst_wxsensors','cal_wxsensors','True'); ?></p>
      </div>
      <div class="tab-pane" id="CD">
        <p><?php last_operations_report('inst_windsensors','cal_windsensors','True'); ?></p>
      </div>
    </div>
  </div> <!-- /tabbable -->
  
<h4> Other Instruments </h4>
  <ul class="nav nav-tabs">
    <li class="active"><a href="#DA" data-toggle="tab">ADCP</a></li>
    <li><a href="#DB" data-toggle="tab">Ice Profilers</a></li>
    <li><a href="#DC" data-toggle="tab">Current meters</a></li>
    <li><a href="#DD" data-toggle="tab">Oxygen Sensors</a></li>
  </ul>
  <div class="tabbable">
    <div class="tab-content">
      <div class="tab-pane active" id="DA">
        <p><?php last_operations_report('inst_adcp','cal_adcp','True'); ?></p>
      </div>
      <div class="tab-pane" id="DB">
        <p><?php last_operations_report('inst_iceprof','cal_iceprof','True'); ?></p>
      </div>
      <div class="tab-pane" id="DC">
        <p><?php last_operations_report('inst_rcm','cal_rcm','True'); ?></p>
      </div>
      <div class="tab-pane" id="DD">
      <p><a href="optode_fluor_availability.php">Oxygen / Fluorometer Availability Page</a></p>
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
<!-- sortable data tables -->
<script src="../node_modules/datatables/examples/resources/bootstrap/3/dataTables.bootstrap.js"></script>
<!-- jQuery backstretch for background responsive photos -->
<script src="../scripts/jquery.backstretch.js"></script>
<script type="text/javascript" src="../scripts/DataTables-1.10.12/media/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('table.table').dataTable( {
        "iDisplayLength": 100,
        "order": [[ 0, "desc" ]]
        } );
    } );
</script>
<script>
    $.backstretch(["../ecofoci_images/backgrounds/peggy_buoy.jpg"]);
</script>

</body>
</html>