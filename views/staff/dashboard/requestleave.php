<?php $page = 'home';
include "staff_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">






<!DOCTYPE html>
<html lang="en">
<head>
  <link href="css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>request leave </title>
  <link rel="stylesheet" href="<?= URL ?>public/css/staff_requestleave.css" />
 
<style>
  
  body{
   
    background: url('public/images/att.svg') no-repeat ;
    background-size: cover;
height: 100vh;
width: fit-content;
  }
</style>
</head>
<body>

<div class="wrapper">
  <div class="title">
    <h1>Request Leave Application</h1>
  </div>
  <div class="form">
    <div class="input-fields">
      <input type="text" class="input" placeholder="Name">
      <input type="text" class="input" placeholder="Staff-ID">
      <input type="date" class="input" placeholder="Date">
      <input type="number" class="input" placeholder="Number of Days">
      
    </div>
    <div class="msg">
      <textarea placeholder="Reason for the leave"></textarea>
      <div class="btn">send</div>
    </div>
  </div>
</div>
	
</body>
</html>

  </div>
</div>
<?php include "staff_footer.php" ?>