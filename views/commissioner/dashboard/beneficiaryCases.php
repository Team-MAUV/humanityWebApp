<?php $page = 'beneficiaryCases';
$title = 'Beneficiary Cases';
$style = 'com-dash-beneficiaryCases.css';
$jsFile = 'com-dash-beneficiaryCases.js';
include "com-dash-header.php"; ?>

<div class="grid-container">



  <div class="split left">
    <h1>Beneficary Cases</h1>
    <button type="button" class="readmore">Miss M. Siriwardhana</button>
    <div class="content">
      <p>


        <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline <input type="radio" id="decline" name="confirmreq" value="decline"><br>
          <button type="button" class="btn">Submit</button> </div>
        <button class="btn" onclick="viewprofile()">View Profile</button>

      </p>
    </div>
    <button type="button" class="readmore">Tree plantation campaign</button>
    <div class="content">
      <p>
        <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline <input type="radio" id="decline" name="confirmreq" value="decline"><br>
          <button type="button" class="btn">Submit</button> </div>
        <button class="btn" onclick="viewprofile()">View Profile</button>
      </p>
    </div>
    <button type="button" class="readmore">Beneficiery home visit 1</button>
    <div class="content">
      <p>
        <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline <input type="radio" id="decline" name="confirmreq" value="decline"><br>
          <button type="button" class="btn">Submit</button> </div>
        <button class="btn" onclick="viewprofile()">View Profile</button>
      </p>
    </div>
    <button type="button" class="readmore">Beneficiery home visit 2</button>
    <div class="content">
      <p>
        <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline <input type="radio" id="decline" name="confirmreq" value="decline"><br>
          <button type="button" class="btn">Submit</button> </div>
        <button class="btn" onclick="viewprofile()">View Profile</button>
      </p>
    </div>
  </div>

</div>

<?php include "com-dash-footer.php" ?>