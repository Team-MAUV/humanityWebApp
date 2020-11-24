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
  
  
  <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
	

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
       <h3 style="font-size:2vw;">Add new commissioner </h3>
        <div class="outer">
        <h2>
Commissioner Registration Form</h2>
<div class="form-conteniar">
            <form>
                <div class="input-name">
                    <i class="fa fa-user lock"></i>
                    <input type="text" placeholder=" Name" class="name">
                    <span class="last">
                    <i class="fa fa-user lock"></i>
                    <input type="text" placeholder="NIC" class="name">
                    </span>
                </div>
                     <div class="input-name">
                        <i class="fa fa-envelope email"></i>
                        <input type="email" placeholder="Email" required class="text-name">
                </div>
 <div class="input-name">
 <i class="fa fa-user lock"></i>
                        <input type="text" placeholder="contact no" required class="text-name">
                </div>
<div class="input-name">
                    <i class="fa fa-user lock"></i>
                    <input type="text" placeholder="username" class="text-name">
                </div>
<div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Assign Password" class="text-name">
                </div>
<div class="input-name">
                    <input type="radio" name="radiogroup1" id="gen"class="radio-button">
                    <label for="gen" class="gender">Male</label>
                    <input type="radio" name="radiogroup1" id="gen1" class="radio-button">
                    <label for="gen1" class="gender">Female</label>
                </div>

</div>
<div class="input-name">
                        <input type="checkbox" id="cb1" class="chack-button">
                      <label for="cb1" class="chack">I confirm that above details are true</label>
                    </div>

<div class="input-name">
                        <input class="button" type="submit" value="Register" />
                    </div>
</form>
</div>
</div>
     
    </div>
      <div class="col-4 col-m-12 col-sm-12">
				<div class="card">
        <div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Commissioner Name</th>
      <th>Com-ID</th>
      </tr>
    <tr>
    <td>Perera</td>
      <td>COMHB001</td>
    </tr>
    <tr>
    <td>Smith</td>
      <td>COMHB002</td>
    </tr>
    <tr>
    <td>Perera</td>
      <td>COMHB003</td>
    </tr> <tr>
    <td>Perera</td>
      <td>COMHB004</td>
    </tr>
    <tr>
    <td>Perera</td>
      <td>COMHB005</td>
    </tr>
    <tr>
    <td>Jill</td>
      <td>COMHB006</td>
    </tr>
    <tr>
    <td>Jill</td>
      <td>COMHB006</td>
    </tr>
    <tr>
    <td>Jill</td>
      <td>COMHB006</td>
    </tr>
    <tr>
    <td>Jill</td>
      <td>COMHB006</td>
    </tr>
    <tr>
    <td>Jill</td>
      <td>COMHB006</td>
    </tr>
    <tr>
    <td>Jill</td>
      <td>COMHB006</td>
    </tr>
    </table>
</div>
        </div>
      </div>
    </div>


</body>




  </div>

</div>



</div>

</html>
