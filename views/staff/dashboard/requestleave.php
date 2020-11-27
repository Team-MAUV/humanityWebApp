<?php $page = 'requestleave';
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
   
    background: url('public/images/leave.png') no-repeat ;
    background-size: cover;
height: 100vh;
width: fit-content;
  }
</style>
</head>
<body >


<div class="wrapper">
  <div class="title">
    <h1>Request Leave Application</h1>
  </div>
  <div class="form">
  <form action="run_requestleave" method="post"  onsubmit="return confirm('Do you really want to submit the form?');">
    <div class="input-fields">
      <input type="text" class="input" placeholder="Name" name="name" id="name">
      <input type="text" class="input" placeholder="Staff-ID" name="staff_id" id="staff_id">
      <input type="date" class="input" placeholder="Date" name="date" id="date">
      <input type="number" class="input" placeholder="Number of Days" name="day_no" id="day_no">
      
    </div>
    <div class="message">
      <textarea placeholder="Reason for the leave" name="reason" id="reason"></textarea>
      <input type="submit" value="submit" name="submit" name="submit"> 
    </div>
  </form>

 
  </div>
  <p><?= $msg ?></p>
</div>

</body>
</html>

  </div>
</div>
<?php include "staff_footer.php" ?>