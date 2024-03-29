<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cruise Cast Logs for CTDs</title>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" id="bootstrap_datatables.css" href="../scripts/bootstrap_datatables/bootstrap_datatables.css" />
<link rel="stylesheet" type="text/css" id="custom.css" href="../scripts/css/custom.css" />

<!-- when using the dataTables javascript plugin, jquery and dataTables must be at top of page -->
<!-- dataTables seems to only work well with a single table on a page-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../scripts/jquery_1.11.0/jquery.min.js"></script>
<!-- DataTables -->
<script type="text/javascript" src="../scripts/DataTables-1.10.12/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../scripts/bootstrap_datatables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function() {
        $('table.table').dataTable( {
        "iDisplayLength": 50
        } );
    } );
</script>
</head>

<body>

<?php include('../ecofoci_images/header.php'); 
include('php_routines/cruise_php_routines.php');
include('php_routines/nav_header.php');
?>

<!-- Bootstrap - Static navbar
================================================== -->
<div class="container-fluid">


<!-- Static navbar -->
<?php build_navbar("CTD Cast Records") ?>

<!-- End Navigation
================================================== -->

<div class="col-md-12 center-block" style="padding:20px;">

<h3>CTD CastLog input forms</h3>

<p style="color:red;">Use the Popup log editor for quick entries (it prefills with the last known CTD cast and 
doesn't provide all options such as "seastate".  Use the Non-Popup version for the comprehensive log sheet (which provides guidance
for how entries should be typed in.<p>

  <ul class="nav nav-tabs">
    <li class="active"><a href="#AA" data-toggle="tab">Cruise Cast Logs (POPUP)</a></li>
    <li><a href="#AB" data-toggle="tab">Cruise Cast Logs (Non Popup)</a></li>
    <li><a href="#AC" data-toggle="tab">Add Cruise Information</a></li>
  </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="AA">
        <p><?php modal_body('Add Cast Records','CruiseCastLogs','AddNewCruiseCTD.php'); ?></p>
      </div>
      <div class="tab-pane" id="AB">
        <p><?php ctdrecord_initial_input_form(); ?></p>
      </div>
      <div class="tab-pane" id="AC">
        <br>
        <p><?php ctdrecord_cruise_form(); ?></p>
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
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="../scripts/jquery.backstretch.js"></script>
<script>
    $.backstretch(["../ecofoci_images/backgrounds/peggy_buoy.jpg"]);
</script>

</body>
</html>