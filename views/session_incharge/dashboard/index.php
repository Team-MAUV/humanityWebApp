<?php $page = 'home';
include "sess_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">
  <!--
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Session Incharge Home</title>
       
        <link rel="stylesheet" href="<?= URL ?>public/css/sess_dash_home.css" />
        </head>
<body>

<h1>Welcome to session in charge page </h1>

<div class="card">
  <img src="<?= URL ?>public/images/sess.png" alt="img" alt="pic" style="width:100%">
  <h4>Welcome </h4>
 
  <h4>On going event: Blood Donation </h4>
  <h4 style="color:aliceblue">Your session will close: </h4>
  <div class="count">
          <div class="countd">
            <span id="days">00</span>
            DAYS
          </div>

          <div class="countd">
            <span id="hours">00</span>
            HOURS
          </div>

          <div class="countd">
            <span id="minutes">00</span>
            MINUTES
          </div>

          <div class="countd">
            <span id="seconds">00</span>
            SECONDS
          </div>
        </div>

</div>   
       <script type="text/javascript">

  var count = new Date("dec 15,2020 00:01:00").getTime();
  var x = setInterval(function() {
    var now = new Date().getTime();
    var d = count - now;

    var days = Math.floor(d/(1000*60*60*24));
    var hours = Math.floor((d%(1000*60*60*24))/(1000*60*60));
    var minutes = Math.floor((d%(1000*60*60))/(1000*60));
    var seconds = Math.floor((d%(1000*60))/1000);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    if(d <= 0){
      clearInterval(x);
    }
  },1000);
</script>

 
</body>
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSS User Profile Card</title>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="<?= URL ?>public/css/sess_dash_home.css" />
</head>
<body>

<div class="wrapper">
    <div class="left">
       
        <img src="<?= URL ?>public/images/sess.jpg"
        alt="user" width="100">
        <h2>WELCOME!</h2>
        <h3>Alex William</h3>
        
        <hr>
        <hr/>
        <h4 style="color:black">Your Past-Lists </h4>
         <p>Tree planting campaign</p>
         <p>Beneficiary Home visit 05</p>
         <p>Blood Donation</p>
         
    </div>
    <div class="right">
        <div class="info">
            <h3>You are incharge of </h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Session</h4>
                    <p>Blood Donation </p>
                 </div>
                 <div class="data">
                   <h4>date</h4>
                    <p>02.01.2021</p>
              </div>
            </div>
        </div>
      
      <div class="projects">
            <h3>Details</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>Venue</h4>
                    <p>Public Library </p>
                 </div>
                 <div class="data">
                   <h4>Duration</h4>
                    <p>8.00am to 5pm </p>
              </div>
            </div>
        </div>
      
        <div class="social_media">
           
      </div>
    </div>
</div>

</body>











</div>
</div>

<?php include "sess_footer.php" ?>
</html>