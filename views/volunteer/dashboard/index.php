
<?php $page = 'home';
include "vol_dash_header.php"; ?>

<link rel="stylesheet" href="<?= URL ?>public/css/vol-home.css" />

<!--
<div class="grid-container">


<h1>Welcome to Volunteer Portal!</h1>
    
    <ul class="voldata">
    
    <li>
            Volunteer ID : &nbsp; <?= $_SESSION['id'] ?>
        </li>
        <li>
            Name : &nbsp;<?= $_SESSION['name'] ?>
        </li>

        <li>
            Level : &nbsp;<?= $_SESSION['level'] ?>&nbsp;&nbsp; <input type="submit" class="btn" value="Apply for Staff">

        </li>
        <li>
            Volunteer points : </li>
            
        <div class="bar">
            <div class="progress vol-points"><?= $_SESSION['vol_points'] ?>%</div>
        </div>


        
    </ul>

</div>
-->
<div class="grid-container">



  <div id="breadcrum">
  <!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
 
 
  </head>
  <body>
    <div class="blog-card">
      <input type="radio" name="select" id="tap-1" checked>
      <input type="radio" name="select" id="tap-2">
      <input type="radio" name="select" id="tap-3">
      <input type="checkbox" id="imgTap">
      <div class="sliders">
        <label for="tap-1" class="tap tap-1"></label>
        <label for="tap-2" class="tap tap-2"></label>
        <label for="tap-3" class="tap tap-3"></label>
      </div>
<div class="inner-part">
        <label for="imgTap" class="img">
          <img class="img-1" src="<?= URL ?>public/images/Picture1.jpg">
        </label>
        <div class="content content-1">
          <span>Welcome to Volunteer portal </span>
          <div class="title">
You are doing great job!</div>
<div class="text">
<ul class="voldata">
    
    <li>
            Volunteer ID : &nbsp; <?= $_SESSION['id'] ?>
        </li>
        <li>
            Name : &nbsp;<?= $_SESSION['name'] ?>
        </li>
</ul>

        </div>
</div>
<div class="inner-part">
        <label for="imgTap" class="img">
          <img class="img-2" src="#">
        </label>
        <div class="content content-2">
          <span>Welcome to Volunteer portal</span>
          <div class="title">
Lorem Ipsum Dolor</div>
<div class="text">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eos ut consectetur numquam ullam fuga animi laudantium nobis rem molestias.</div>

        </div>
</div>
<div class="inner-part">
        <label for="imgTap" class="img">
          <img class="img-3" src="#">
        </label>
        <div class="content content-3">
          <span>Welcome to Volunteer portal</span>
          <div class="title">
Lorem Ipsum Dolor</div>
<div class="text">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod excepturi nemo commodi sint eum ipsam odit atque aliquam officia impedit.</div>

        </div>
</div>
</div>
</body>


    </div>

</div>



</div>
</html>











<?php include "vol_dash_footer.php" ?>
