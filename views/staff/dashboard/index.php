<?php $page = 'home';
include "staff_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">

  <!Doctype html>
<html>

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Staff Home</title>
    <link rel="stylesheet" href="<?= URL ?>public/css/staff_dash_calendar.css" />
    <link rel="stylesheet" href="<?= URL ?>public/css/staff_dash_index.css" />
    <style>
     
      </style>
       
         </head>

    <body> 
      <div class="split left">
     
       <div class="centered">
       <h1 style="color: blue; font-family:Roboto">Welcome to Staff Portal </h1>
          <img src="<?= URL ?>public/images/img_avatar.png" alt="staff"/>
          <h1><?= $_SESSION['name'] ?></h1>
          <h5> <?= $_SESSION['id'] ?></h5>
     
           
      
        </div> 
      </div>
      
      <div class="split right">
      
      <div class="wrapper">
   <center>   <h2 style="color:yellow" > Calendar </h2></center> 
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
    <script src="<?= URL ?>public/js/calendar.js" type="text/javascript"></script>
      
   
            
      </div>
     

    </body>

  </div>

</div>



</div>

</html>
<?php include "staff_footer.php" ?>