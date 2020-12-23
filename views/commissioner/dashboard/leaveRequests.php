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

<h1>Leave Requests </h1>
<div id="bttnContainer">
  <button class="bttn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
  <button class="bttn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>
<br>

<div class="row">
  <div class="column" style="background-color:#aaa;">
 <h3>27.12.2020<span> </span> Already Approved :  5</h3> 
 <br> 
 <button type="button" class="readmore">
    <?= $leave['name'] ?>  </button>
  <div class="content">
    <p>


      <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input type="text" id="reason" placeholder="Reason to decline " name="reason">
  <script>
  function displayText(){
  if(document.getElementById('decline').checked){
     document.getElementById('reason').style.display = "block";
     }
  else {document.getElementById('accept').style.display ="none";}
}
</script>
        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p>Already taken: 2</p>
        <button type="button" class="btn" onclick="viewform()">View Request Form</button>
      

    </p>
   </div>
  
</div>
  
 



  <div class="column" style="background-color:#bbb;">
  <h3>27.12.2020<span> </span> Already Approved :  5</h3> 
 <br> 
 <button type="button" class="readmore">
    <?= $leave['name'] ?>  </button>
  <div class="content">
    <p>


      <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input type="text" id="reason" placeholder="Reason to decline " name="reason">
  <script>
  function displayText(){
  if(document.getElementById('decline').checked){
     document.getElementById('reason').style.display = "block";
     }
  else {document.getElementById('accept').style.display ="none";}
}
</script>
        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p>Already taken: 2</p>
        <button type="button" class="btn" onclick="viewform()">View Request Form</button>
      

    </p>
   </div>
   <script src="<?= URL ?>public/js/com-dash-beneficiaryCases.js"></script>
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#ccc;">
    <h2>Column 3</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#ddd;">
    <h2>Column 4</h2>
    <p>Some text..</p>
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