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
<div id="bttnContainer">
 
  
</div>
<br>
<!--row start-->
<div class="row">
<!--one staff-->
 <button type="button" class="readmore">Nimali <span>&nbsp;&nbsp;</span> STFHB001 <span>  &nbsp; &nbsp; &nbsp;</span> 20.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>

<!--second  staff-->

   <button type="button" class="readmore">Kamal <span> &nbsp;&nbsp;</span> STFHB002  <span>  &nbsp; &nbsp; &nbsp;</span> 28.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>



<!--3 staff-->
   <button type="button" class="readmore">Kamal <span> &nbsp;&nbsp;</span> STFHB002  <span>  &nbsp; &nbsp; &nbsp;</span> 28.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>
<!--4  staff-->

   <button type="button" class="readmore">Kamal <span> &nbsp;&nbsp;</span> STFHB002  <span>  &nbsp; &nbsp; &nbsp;</span> 28.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>


   <button type="button" class="readmore">Kamal <span> &nbsp;&nbsp;</span> STFHB002  <span>  &nbsp; &nbsp; &nbsp;</span> 28.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>


   <button type="button" class="readmore">Kamal <span> &nbsp;&nbsp;</span> STFHB002  <span>  &nbsp; &nbsp; &nbsp;</span> 28.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>


   <button type="button" class="readmore">Kamal <span> &nbsp;&nbsp;</span> STFHB002  <span>  &nbsp; &nbsp; &nbsp;</span> 28.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>


   <button type="button" class="readmore">Kamal <span> &nbsp;&nbsp;</span> STFHB002  <span>  &nbsp; &nbsp; &nbsp;</span> 28.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>


   <button type="button" class="readmore">Kamal <span> &nbsp;&nbsp;</span> STFHB002  <span>  &nbsp; &nbsp; &nbsp;</span> 28.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>


   <button type="button" class="readmore">Kamal <span> &nbsp;&nbsp;</span> STFHB002  <span>  &nbsp; &nbsp; &nbsp;</span> 28.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>


   <button type="button" class="readmore">Kamal <span> &nbsp;&nbsp;</span> STFHB002  <span>  &nbsp; &nbsp; &nbsp;</span> 28.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>


   <button type="button" class="readmore">Kamal <span> &nbsp;&nbsp;</span> STFHB002  <span>  &nbsp; &nbsp; &nbsp;</span> 28.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>


   <button type="button" class="readmore">Kamal <span> &nbsp;&nbsp;</span> STFHB002  <span>  &nbsp; &nbsp; &nbsp;</span> 28.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>


   <button type="button" class="readmore">Kamal <span> &nbsp;&nbsp;</span> STFHB002  <span>  &nbsp; &nbsp; &nbsp;</span> 28.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>


   <button type="button" class="readmore">Kamal <span> &nbsp;&nbsp;</span> STFHB002  <span>  &nbsp; &nbsp; &nbsp;</span> 28.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>


   <button type="button" class="readmore">Kamal <span> &nbsp;&nbsp;</span> STFHB002  <span>  &nbsp; &nbsp; &nbsp;</span> 28.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>


   <button type="button" class="readmore">Kamal <span> &nbsp;&nbsp;</span> STFHB002  <span>  &nbsp; &nbsp; &nbsp;</span> 28.01.2021</button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">
     

        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">Already taken: 2</p>
        <button type="open-button" class="btn" onclick="viewform()">View Request Form</button>
    </p>
   
   </div>























   <!--popup form-->
   <div class="form-popup" id="myForm">
  <div class="form-container">
    <h2>Nimali<span>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</span>STFHB002</h2>
<hr style="color:blue"> </hr>
    <h3>From: 23.01.2021 </h3>
    <h3>To : 23.01.2021 </h3>
    <h4>Wedding to my friend </h4>


    
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </div>
</div>

<script>
function viewform() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>





</div>
   











<!--calendar start-->
    <div class="container-calendar">
          <h3 id="monthAndYear"></h3>
          <div class="button-container-calendar">
              <button id="previous" onclick="previous()">&#8249;</button>
              <button id="next" onclick="next()">&#8250;</button>
          </div>
          
          <table class="table-calendar" id="calendar" data-lang="en">
              <thead id="thead-month"></thead>
              <tbody id="calendar-body"></tbody>



              
          </table>
          
          <div class="footer-container-calendar">
              <label for="month">Jump To: </label>
              <select id="month" onchange="jump()">
                  <option value=0>Jan</option>
                  <option value=1>Feb</option>
                  <option value=2>Mar</option>
                  <option value=3>Apr</option>
                  <option value=4>May</option>
                  <option value=5>Jun</option>
                  <option value=6>Jul</option>
                  <option value=7>Aug</option>
                  <option value=8>Sep</option>
                  <option value=9>Oct</option>
                  <option value=10>Nov</option>
                  <option value=11>Dec</option>
              </select>
              <select id="year" onchange="jump()"></select>       
          </div>
      </div>
   
    <script src="<?= URL ?>public/js/calendar.js" type="text/javascript"></script>
   
    <script src="<?= URL ?>public/js/calendar-demo.js" type="text/javascript"></script>
<!--next card start-->
    

<script src="<?= URL ?>public/js/com-dash-beneficiaryCases.js"></script>
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