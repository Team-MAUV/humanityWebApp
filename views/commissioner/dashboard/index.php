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
  

	

	<!-- End import lib -->

	
</head>
<body class="overlay-scrollbar">
<script src="<?= URL ?>public/js/com-index.js" type="text/javascript"></script>
	<div class="wrapper">
		<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-staff">
        <div class="counter-front">
	   <center></i> <p >Staff</p></center>
	   <p>50</p>
    </div>
    <div class="counter-back">
      <p>Back Side</p>
    </div>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-warning">
        <div class="counter-front">
	  <p>Volunteer </p>
	  <p>50</p>
    </div>
    <div class="counter-back">
      <p>Volunteering Activities</p>
    </div>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					 <div class="counter-front">
				<center></i> <p >Donor</p></center>
				<p>50</p>
    </div>
    <div class="counter-back">
      <p>Donate amount</p>
    </div>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-danger">
				<div class="counter-front">
				<center></i> <p >Buyer</p></center>
				<p>50</p>
    </div>
    <div class="counter-back">
      <p>Earning</p>
    </div>
				</div>
			</div>
		</div>
	

		<div class="row">
			<div class="col-12 col-m-12 col-sm-12">

			<div class="wrap">
   <center>   <h2 style="color:black" > Calendar </h2></center> 
      <div class="container-calendar">
          <h3 id="monthAndYear"></h3>
          <div class="button-container-calendar">
              <button id="previous" onclick="previous()">&#8249;</button>
              <button id="next" onclick="next()">&#8250;</button>
          </div>
          
          <table class="table-calendar" id="calendar" data-lang="en">
              <thead id="thead-month"></thead>
              <tbody id="calendar-body"></tbody>
          </table>
          
          <div class="footer-container-calendar">
              <label for="month">Jump To: </label>
              <select id="month" onchange="jump()">
                  <option value=0>Jan</option>
                  <option value=1>Feb</option>
                  <option value=2>Mar</option>
                  <option value=3>Apr</option>
                  <option value=4>May</option>
                  <option value=5>Jun</option>
                  <option value=6>Jul</option>
                  <option value=7>Aug</option>
                  <option value=8>Sep</option>
                  <option value=9>Oct</option>
                  <option value=10>Nov</option>
                  <option value=11>Dec</option>
              </select>
              <select id="year" onchange="jump()"></select>       
          </div>
      </div>
    </div>
      </div>
      <script src="<?= URL ?>public/js/calendar.js" type="text/javascript"></script>
		</div>
    <div class="row">
			<div class="col-8 col-m-12 col-sm-12">
				<div class="card">
          hello
				</div>
      </div>
      <div class="col-4 col-m-12 col-sm-12">
				<div class="card">
          hi
        </div>
      </div>
    </div>


</body>




  </div>

</div>



</div>

</html>
