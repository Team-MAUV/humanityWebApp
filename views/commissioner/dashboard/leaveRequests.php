<?php $page = 'leaveRequests';
$title = 'Staff Leave Requests';
$style = 'com-dash-leaveRequests.css';
include "com-dash-header.php"; ?>


<div class="grid-container">

<!--
<div class="content_update">

<h1>Leave Requests</h1></br>
  <?php foreach ($leaves as $leave) : ?>
  <button type="button" class="readmore">
    <table><tr><td><?= $leave['name'] ?> </td>
  <td><?= $leave['date'] ?> </td>
  <td> Approved: </td>   </tr>
</table></button>
  <div class="content">
    <p>


      <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline <input type="radio" id="decline" name="confirmreq" value="decline"><br>
        <button type="button" class="btn" name="submit">Submit</button> </div>
        <button type="button" class="btn" onclick="viewprofile()">View Profile</button>
        <button type="button" class="btn" onclick="viewform()">View Request Form</button>
      

    </p>
   </div>
   <?php endforeach; ?>
</div>
  
   <script src="<?= URL ?>public/js/com-dash-beneficiaryCases.js"></script>



</div>
-->


<div id="breadcrum">

<!DOCTYPE html>
<html>
<head>
<title>Saff Profile</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<style>

* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;



}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  top:100px;
right:300px;
  border: 6px solid blue;
  z-index: 9;
  text-align: left;
  
}

/* Add styles to the form container */
.form-container {
  max-width: 800px;
  padding: 40px;
  background-color:#9a9ae5;
  color:black;
  text-align: left;
  
}
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 10px 16px;
  border: none;
  cursor: pointer;
  width: 80%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<h1>Leave Requests </h1>

<br>
<!--row start-->
<div class="row">
<?php foreach ($contacts as $contact) : ?>
  
<!--one staff-->
 <button type="button" class="readmore"><?= $contact['name'] ?> <span>&nbsp;&nbsp;</span>
 <?php if(strlen($contact['staff_id'])==1 && strlen($contact['staff_id'])>0){
      $ccustomid ="STFHB00".$contact['staff_id'];
    }else if(strlen($contact['staff_id'])==2 && strlen($contact['staff_id'])>0){
      $ccustomid ="STFHB0".$contact['staff_id'];
    }else if(strlen($$contact['staff_id'])>0){
      $ccustomid ="STFHB".$contact['staff_id'];
    };
    ?>
 
 <?= $ccustomid ?> <span>  &nbsp; &nbsp; &nbsp;</span> <?= $contact['from_date'] ?></button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
         
     
          <script>
        $(document).ready(function() {
            $("input[type='radio']").change(function() {
                if ($(this).val() == "decline") {
                    $("#reason").show();
                } else {
                    $("#reason").hide();
                }
            });
        });
    </script>
 <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">




        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">

  <?php foreach ($leaves as $leave) : ?>
  <?php if($contact['staff_id']==$leave['id']){
    $noleave=$leave['no_leave'];
    
  };
  
  ?>
  <?php endforeach; ?>

   Already taken=<?=$noleave?></p>

        <button type="open-button" class="btn" id="<?$ccustomid?>" onclick="viewform()">View Request Form</button>
   
        </p>
   
   </div>

   <?php endforeach; ?>
   
   </div>




   <?php foreach ($contacts as $contact) : ?>
   <!--popup form-->
   <div class="form-popup" id="myForm">
  
  <div class="form-container">
  
    <h2><?= $contact['name'] ?><span>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</span>
    
    <?php if(strlen($contact['staff_id'])==1 && strlen($contact['staff_id'])>0){
      $ccustomid ="STFHB00".$contact['staff_id'];
    }else if(strlen($contact['staff_id'])==2 && strlen($contact['staff_id'])>0){
      $ccustomid ="STFHB0".$contact['staff_id'];
    }else if(strlen($$contact['staff_id'])>0){
      $ccustomid ="STFHB".$contact['staff_id'];
    };
    ?>
    <?= $ccustomid ?></h2>
<hr style="color:blue"> </hr>
    <h3>From: <?= $contact['from_date'] ?> </h3>
    <h3>To : <?= $contact['to_date'] ?> </h3>
    <h3>Reason : <?= $contact['reason'] ?></h3>


    
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </div>
</div>
<?php endforeach; ?>

<script>
function viewform() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>




</div>
   







<!--date overview  start-->
<div class="date-wise">
<h3> Date leaves Approved  </h3>
<div class="rw">
  <div class="clmn" style="background-color:#aaa;">
    <h2>25.01.2021</h2>
    <p>01</p>
  </div>
  <div class="clmn" style="background-color:#bbb;">
    <h2>26.01.2021</h2>
    <p>03</p>
  </div>
</div>

<div class="rw">
  <div class="clmn" style="background-color:#ccc;">
    <h2>28.01.2021</h2>
    <p>02</p>
  </div>
  <div class="clmn" style="background-color:#ddd;">
    <h2>29.01.2021</h2>
    <p>04</p>
  </div>
  </div>

  <div class="rw">
  <div class="clmn" style="background-color:#aaa;">
    <h2>25.01.2021</h2>
    <p>01</p>
  </div>
  <div class="clmn" style="background-color:#bbb;">
    <h2>26.01.2021</h2>
    <p>03</p>
  </div>
</div>

</div>
</div>









<!--next card start-->
    

<script src="<?= URL ?>public/js/com-dash-beneficiaryCases.js"></script>

</div>

    </div> 



    

















<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("bttnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>


















<?php include "com-dash-footer.php" ?>