<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Equipment Out on Loan or Repair</title>
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
<script>
    $(document).ready(function() {
        $('table.table').dataTable( {
        "iDisplayLength": 50
        } );
    } );
</script>

</head>

<body>

<!-- local php includes
================================================== -->
<?php 
include('../ecofoci_images/header.php'); 
include('php_routines/mooring_php_routines.php');
include('php_routines/nav_header.php');
?>

<!-- Bootstrap - Static navbar
================================================== -->
<div class="container-fluid">


<!-- Static navbar -->
<?php build_navbar("OnLoan or Repair") ?>

<!-- End Navigation
================================================== -->

<div class="col-md-12 center-block" style="padding:20px;">


<h3>Instrument Records for Gear on Loan or Repair</h3>   

<?php view_loan_select() ?>

<br>
Or click <a href="onloan_new.php">here</a> to add a new record

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
<!-- jQuery backstretch for background responsive photos -->
<script src="../scripts/jquery.backstretch.js"></script>
<script>
    $.backstretch(["../ecofoci_images/backgrounds/KodiakMtns_Derobertis2006.png"]);
</script>

</body>
</html>
