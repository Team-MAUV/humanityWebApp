<?php $page = 'beneficiaryCases';
$title = 'Beneficiary Cases';
$style = 'com-dash-beneficiaryCases.css';
$jsFile = 'com-dash-beneficiaryCases.js';
include "com-dash-header.php"; ?>

<div class="grid-container">



<div class="row">
    <button class="tab" onclick="openpage('upcoming',this)" id="defaultOpen">Upcoming Cases</button>
    <button class="tab" onclick="openpage('current',this)">Current Cases</button>
    <button class="tab" onclick="openpage('finished',this)">Finished Cases</button></div>

    <div id="upcoming" class="tabcontent">

    <div class="split left">
  
  <h1>Beneficary Cases</h1></br>
  <?php foreach ($contacts as $contact) : ?>
  <button type="button" class="readmore"><?= $contact['beneficiery_id'] ?></button>
  <div class="content">
    <p>


      <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline <input type="radio" id="decline" name="confirmreq" value="decline"><br>
        <button type="button" class="btn" name="submit">Submit</button> </div>
      <button class="btn"><a href="<?= $contact['case_path'] ?>" download="<?= $contact['beneficiery_id'] ?>"><i class="fa fa-download"></i> Download</a></button>

    </p>
  </div>
  <?php endforeach; ?>
  
</div>

    </div>
    <div id="current" class="tabcontent">

    <div class="split left">
  
  <h1>Beneficary Cases</h1></br>
  <?php foreach ($contacts as $contact) : ?>
  <button type="button" class="readmore"><?= $contact['beneficiery_id'] ?></button>
  <div class="content">
    <p>


      <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline <input type="radio" id="decline" name="confirmreq" value="decline"><br>
        <button type="button" class="btn" name="submit">Submit</button> </div>
      <button class="btn"><a href="<?= $contact['case_path'] ?>" download="<?= $contact['beneficiery_id'] ?>"><i class="fa fa-download"></i> Download</a></button>

    </p>
  </div>
  <?php endforeach; ?>
  
</div>
    </div>
    <div id="finished" class="tabcontent">
    <div class="split left">
  
  <h1>Beneficary Cases</h1></br>
  <?php foreach ($contacts as $contact) : ?>
  <button type="button" class="readmore"><?= $contact['beneficiery_id'] ?></button>
  <div class="content">
    <p>


      <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline <input type="radio" id="decline" name="confirmreq" value="decline"><br>
        <button type="button" class="btn" name="submit">Submit</button> </div>
      <button class="btn"><a href="<?= $contact['case_path'] ?>" download="<?= $contact['beneficiery_id'] ?>"><i class="fa fa-download"></i> Download</a></button>

    </p>
  </div>
  <?php endforeach; ?>
  
</div>
        






    </div>











    <script src="<?= URL ?>public/js/benecase.js"></script>

</div>

<?php include "com-dash-footer.php" ?>