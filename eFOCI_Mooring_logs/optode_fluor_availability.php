<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Optode & Fluorometer Availability</title>
<!-- Bootstrap theme -->
<!-- Bootstrap theme -->
<link rel="stylesheet" type="text/css" id="bootstrap.css" href="../node_modules/bootstrap/dist/css/bootstrap.css.spacelab.V3.css" />
<link rel="stylesheet" type="text/css" id="custom.css" href="../scripts/bootstrap_datatables/bootstrap_datatables.css" />
<link rel="stylesheet" type="text/css" id="custom.css" href="../scripts/css/custom.css" />

<!-- when using the dataTables javascript plugin, jquery and dataTables must be at top of page -->
<!-- dataTables seems to only work well with a single table on a page-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../scripts/jquery_1.11.0/jquery.min.js"></script>
<!-- DataTables -->
<script type="text/javascript" src="../node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../scripts/bootstrap_datatables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function() {
        $('table.table').dataTable( {
        "iDisplayLength": 20
        } );
    } );
</script>
</head>

<body>

<!-- local php includes
================================================== -->
<?php 
include('../ecofoci_images/header.php'); 
include('php_routines/instrument_php_routines.php');
include('php_routines/nav_header.php');
?>

<!-- Bootstrap - Static navbar
================================================== -->
<div class="container-fluid">

<!-- Static navbar -->
<?php build_navbar("InstrumentStatus") ?>

<!-- End Navigation
================================================== -->

<!-- Start Content 
================================================== -->

<div class="center-block" style="padding:20px;">


<h3>Description:</h3>
<p> Because there are a wealth of different variations of optodes, fluorometers, and potentially other instruments, this page is available to provide guidance to which variations are currently available and which variations are currently in use <p>

<h4> Listed by Status </h4>
  <ul class="nav nav-tabs">
  <li><a href="#AA" data-toggle="tab">Fluorometers (non-wetstar)</a></li>
  <li><a href="#AB" data-toggle="tab">Optodes (Oxygen)</a></li>
  </ul>
  <div class="tabbable">
    <div class="tab-content">
      <div class="tab-pane active" id="AA">
        <p><?php view_fluorometer_details(); ?></p>
      </div>
      <div class="tab-pane" id="AB">
        <p><?php view_optode_details(); ?></p>
      </div>
    </div>
  </div> <!-- /tabbable -->
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
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../scripts/jquery.backstretch.js"></script>
<script>
    $.backstretch(["../ecofoci_images/backgrounds/peggy_buoy.jpg"]);
</script>

</body>
</html>