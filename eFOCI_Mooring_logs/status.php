<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mooring Deployment Database</title>
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
        "lengthMenu": [ 10, 25, 50, 100, 300 ],
        "iDisplayLength": 300,
        "responsive": true
        } );
    } );
</script>
</head>

<body>

<?php include('../ecofoci_images/header.php'); 
include('php_routines/mooring_php_reports.php');
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

<h3>Mooring Equipment Status Page:</h3>

<h4> Deployment Report </h4>
  <ul class="nav nav-tabs">
    <li class="active"><a href="#AA" data-toggle="tab">To Be Deployed</a></li>
    <li><a href="#AB" data-toggle="tab">Is Deployed</a></li>
  </ul>
  <div class="tabbable">
    <div class="tab-content">
      <div class="tab-pane active" id="AA">
        <p><?php deployment_report('',''); ?></p>
      </div>
      <div class="tab-pane" id="AB">
        <p><?php deployment_report('y',''); ?></p>
      </div>
    </div>
  </div><!-- /tabbable -->
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
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../scripts/jquery.backstretch.js"></script>
<script>
    $.backstretch(["../ecofoci_images/backgrounds/peggy_buoy.jpg"]);
</script>

</body>
</html>
<!--
  <ul class="nav nav-tabs">
    <li class="active"><a href="#AA" data-toggle="tab">To Be Deployed</a></li>
    <li><a href="#AB" data-toggle="tab">Is Deployed</a></li>
  </ul>
  <div class="tabbable">
    <div class="tab-content">
      <div class="tab-pane active" id="AA">
        <p><?php deployment_report('',''); ?></p>
      </div>
      <div class="tab-pane" id="AB">
        <p><?php deployment_report('y',''); ?></p>
      </div>
    </div>
  </div> --><!-- /tabbable -->

