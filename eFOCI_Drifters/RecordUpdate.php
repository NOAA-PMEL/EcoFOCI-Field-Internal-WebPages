<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add/Update Drifter ID</title>
<!-- Bootstrap theme -->
<link rel="stylesheet" type="text/css" id="bootstrap.css" href="../bootstrap/dist/css/bootstrap.css.spacelab.V3.css" />
<link rel="stylesheet" type="text/css" id="custom.css" href="../scripts/css/custom.css" />

<!-- when using the dataTables javascript plugin, jquery and dataTables must be at top of page -->
<!-- dataTables seems to only work well with a single table on a page-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../scripts/jquery_1.11.0/jquery.min.js"></script>
<!-- DataTables -->
<script type="text/javascript" src="../scripts/DataTables-1.10.12/media/js/jquery.dataTables.min.js"></script>
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
include('php_routines/drifter_php_routines.php');
include('php_routines/nav_header.php');
?>

<!-- Bootstrap - Static navbar
================================================== -->
<div class="container">


<!-- Static navbar -->
<?php build_navbar("Add/Update Drifter ID") ?>

<!-- End Navigation
================================================== -->

<div class="col-md-12 center-block" style="padding:20px;">

<h3>Argos Drifter ID initial entry</h3>

<?php argos_drifter_id_new() ?>

<h3>Argos Drifter ID update</h3>

<?php argos_drifter_id_update() ?>

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
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../scripts/jquery.backstretch.js"></script>
<script>
    $.backstretch(["../ecofoci_images/backgrounds/peggy_buoy.jpg"]);
</script>

</body>
</html>