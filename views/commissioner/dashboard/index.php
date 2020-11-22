<?php $page = 'home';
$title = 'Commissioner Home';
$style = 'com-dash-index.css';
include "com-dash-header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">

<!DOCTYPE html>
<html>
<head>
	<title>Commissioner Home </title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">


	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
  <script src="https://kit.fontawesome.com/c0d2632e91.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="com-index.js"></script>
	<!-- End import lib -->

	
</head>
<body class="overlay-scrollbar">

	<div class="wrapper">
		<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-staff">
        <div class="counter-front">
       <center> <i class="fa fa-user-circle-o" aria-hidden="true"></i> <p >Staff</p></center>
    </div>
    <div class="counter-back">
      <p>Back Side</p>
    </div>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-warning">
        <div class="counter-front">
      <p>Front Side</p>
    </div>
    <div class="counter-back">
      <p>Back Side</p>
    </div>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-danger">
				
				</div>
			</div>
		</div>
	


</body>




  </div>

</div>



</div>

</html>
<?php include "com-dash-footer.php" ?>