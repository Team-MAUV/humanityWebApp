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
 
  
</div>
<br>
<!--row start-->
<div class="row">

      <div class="column" style="background-color:#aaa;">
 <h3>21.12.2020<span> </span> Already Approved :5 </h3> 
 <br> 
 <button type="button" class="readmore">Nimali 
   </button>
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
   <button type="button" class="readmore">Perera 
   </button>
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
    </div>
    <script src="<?= URL ?>public/js/calendar.js" type="text/javascript"></script>
   

<!--next card start-->
      <div class="row">

<div class="column" style="background-color:#aaa;">

<h3>21.12.2020<span> </span> Already Approved :5 </h3> 
 <br> 
 <button type="button" class="readmore">Nimali 
   </button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
          <input type="text" id="reason" placeholder="Reason to decline " name="reason" onclick="displayText()">
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
      </div>
<!--next card start-->

    <div class="row">

<div class="column" style="background-color:#aaa;">
<h3>21.12.2020<span> </span> Already Approved :5 </h3> 
<br> 
<button type="button" class="readmore">Nimali 
</button>
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
<button type="button" class="readmore">Perera 
</button>
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