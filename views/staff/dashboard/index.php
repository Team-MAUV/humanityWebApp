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
    <style>
      body {
        font-family: Arial;
        color: white;
      }
      
      .split {
        height: 100%;
        width: 50%;
        position: fixed;
        z-index: 1;
        top: 0;
        overflow-x: hidden;
        padding-top: 20px;
      }
      
      .left {
        left: 0;
        background-color:#0B6397;
      }
      
      .right {
        right: 0;
       
      }
      
      .centered {
        position: absolute;
        top: 50%;
        left: 70%;
        transform: translate(-50%, -50%);
        text-align: center;
      }
      .centered1 {
        position: absolute;
        top: 50%;
        left: 60%;
        transform: translate(-50%, -50%);
        text-align: center;
        width:500;
         height:500 ;
        overflow: scroll;
      }
      
      .centered img {
        width: 150px;
        border-radius: 50%;
      }
      </style>
       
         </head>

    <body> 
      <div class="split left">
       <div class="centered">
         
          <img src="<?= URL ?>public/images/img_avatar.png" alt="staff"/>
          <h2>MR.H.Perera</h2>
          <p> St56</p>
        </div> 
      </div>
      
      <div class="split right">
      
      <div class="wrapper">
   <center>   <h2 style="color:beige" > Calendar </h2></center> 
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