<?php $page = 'home';
include "sess_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">





<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Session Incharge Home</title>
       
        <link rel="stylesheet" href="<?= URL ?>public/css/sess_dash_home.css" />
        <style>
            * {
              box-sizing: border-box;
            }
            
            /* Create two equal columns that floats next to each other */
            .column {
              float: left;
              width: 50%;
              padding: 10px;
              height: 300px; /* Should be removed. Only for demonstration */
            }
            
            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
            }
            </style>
            

    </head>
    <body>
        <h1>    <b>    Welcome to Session Incharge page ! </b></h1>

        <div class="row">
          <div class="column" >
          <img src="<?= URL ?>public/images//undraw_events_2p66.svg" alt="img" height="80%" weight="80%/>
         
          </div>
          <div class="column">
            <h1>You are now Session Incharge of <br> Tzu Chi Organization</h1>

            
            
          </div>
        </div>
    </body>
</html>


</div>
</div>

<?php include "sess_footer.php" ?>