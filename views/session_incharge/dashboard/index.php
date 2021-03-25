<?php $page = 'home';
include "sess_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">
 
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
       
        <img src="<?= URL ?>public/images/eve.png"
        alt="user" width="100">
        <h2>WELCOME!</h2>
        <h3><?= $_SESSION['name'] ?></h3>
       <h3> <?= $_SESSION['id'] ?></h3>
        <hr>
        <hr/>
        <?php foreach ($user as $sin) : ?>
        <h4 style="color:black">Your Activity </h4>
         <p><?= $sin['vol_activityId'] ?> </pe=>
         <p><?= $sin['vol_activity'] ?></p>
         <br> <br>
         <?php foreach ($actprofile as $act) : ?>     
          <p> From: <?= $act['start_date_time'] ?> </p>
         <p> To: <?= $act['end_date_time'] ?></p>

          <?php endforeach; ?>  
     
         
    </div>
    <div class="right">
        <div class="info">
    
            <h3>You are incharge of </h3>
          
            <div class="info_data"> 
                 <div class="data">
                    <h4>Session</h4>
                    <p>  <?= $sin['vol_activity'] ?></p>
                 </div>
                 <div class="data">
                   <h4>Your session start</h4>
                    <p><?= $sin['session_start_time'] ?></p>
              </div>
            </div>
        
        </div>
        <?php endforeach; ?>  


        <?php foreach ($actprofile as $act) : ?>      
      <div class="projects">
            <h3> Activity Details</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>Venue</h4>

                    <p> <?= $act['venue'] ?> </p>

                 </div>
                 <div class="data">
                   <h4>Expected participants:</h4>
                    <p> <?= $act['participant_count'] ?></p>
                    <h4>Confirmed participants:</h4>
                    <p> <?= $act['confirm_participant_count'] ?></p>
              </div>
            </div>
        </div>
           
        <div class="social_media">
        <h3> To activity start </h3>
        
        <div class="count">
          <div class="countd">
            <span id="days">00</span>
            DAYS
          </div>

          <div class="countd">
            <span id="hours">00</span>
            HRS
          </div>

          <div class="countd">
            <span id="minutes">00</span>
            MIN
          </div>

          <div class="countd">
            <span id="seconds">00</span>
            SEC
          </div>
    
        </div>
        
</div>   
 

<script>

 var count = new Date("<?= $act['start_date_time'] ?> ").getTime();
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

<?php endforeach; ?>  
        </div>
      </div>
    </div>
</div>

</body>











</div>
</div>

<?php include "sess_footer.php" ?>
</html>