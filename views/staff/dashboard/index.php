<?php $page = 'home';
include "staff_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">

  <!Doctype html>
<html>

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Staff Home</title>
    <link rel="stylesheet" href="<?= URL ?>public/css/staff_dash_calender.css" />
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
       
      
        <div id="calendar"></div>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
            
      </div>
     
      <script type="text/javascript" src="../../public/js/calendar-staf.js"></script>

    </body>

  </div>

</div>



</div>

</html>
<?php include "staff_footer.php" ?>