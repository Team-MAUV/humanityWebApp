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

</div>
</div>

<?php include "sess_footer.php" ?>
</html>