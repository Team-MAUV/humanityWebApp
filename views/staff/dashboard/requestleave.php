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
<?php
  $name=$this->leave_request[0]['name'];
  $staff_id=$this->leave_request[0]['staff_id'];
  $date=$this->leave_request[0]['date'];
  $day_no=$this->leave_request[0]['day_no'];
  $msg=$this->leave_request[0]['msg'];
?>

<div class="wrapper">
  <div class="title">
    <h1>Request Leave Application</h1>
  </div>
  <div class="form">
  <form action="<?php echo URL; ?>staff/edit_submit_requestleave" method="post" enctype="multipart/form-data" onsubmit="return confirm('Do you really want to submit the form?');">
    <div class="input-fields">
      <input type="text" class="input" placeholder="Name" name="name" id="name">
      <input type="text" class="input" placeholder="Staff-ID" name="staff_id" id="staff_id">
      <input type="date" class="input" placeholder="Date" name="date" id="date">
      <input type="number" class="input" placeholder="Number of Days" name="day_no" id="day_no">
      
    </div>
    <div class="msg">
      <textarea placeholder="Reason for the leave" name="msg" id="msg"></textarea>
     
      <button type="submit" value="submit" name="submit" name="submit"> Send </button>
    </div>
  </div>
</div>
	
</body>
</html>

  </div>
</div>
<?php include "staff_footer.php" ?>