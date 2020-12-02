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
  
  <h1><strong>Beneficary Cases</strong> </h1></br>
  <?php foreach ($upcomings as $upcoming) : ?>
  <button type="button" class="readmore"><?= $upcoming['beneficiery_id'] ?></button>
  <div class="content">
    <p>


      <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline <input type="radio" id="decline" name="confirmreq" value="decline"><br>
        <button type="button" class="btn" name="submit">Submit</button> </div>
      <button class="dbtn"><a href="<?= $upcoming['case_path'] ?>" download="<?= $upcoming['beneficiery_id'] ?>"><i class="fa fa-download"></i> Download</a></button>

    </p>
  </div>
  
  
  <?php endforeach; ?>
  
</div>

    </div>
    <div id="current" class="tabcontent">

    <div class="split left">
  
  <h1>Ongoing Beneficary Cases</h1></br>
  <?php foreach ($currents as $current) : ?>
  <button type="button" class="readmore"><?= $current['beneficiery_id'] ?></button>
  <div class="content">
    <p>

    <?php if(strlen($current['vol_id'])==1 && strlen($current['vol_id'])>0){
      $ccustomid ="VOLHB00".$current['vol_id'];
    }else if(strlen($current['vol_id'])==2 && strlen($current['vol_id'])>0){
      $ccustomid ="VOLHB0".$current['vol_id'];
    }else if(strlen($current['vol_id'])>0){
      $ccustomid ="VOLHB".$current['vol_id'];
    };
    ?>
    <div class="subby">Submitted By:</br><?= $ccustomid ?></div>
      
      <button class="dbtn"><a href="<?= $current['case_path'] ?>" download="<?= $current['beneficiery_id'] ?>"><i class="fa fa-download"></i> Download</a></button>

    </p>
  </div>
  <?php endforeach; ?>
  
</div>
    </div>
    <div id="finished" class="tabcontent">
    <div class="split left">
  
  <h1>Closed Beneficary Cases</h1></br>
  <?php foreach ($finishs as $finish) : ?>
  <button type="button" class="readmore"><?= $finish['beneficiery_id'] ?></button>
  <div class="content">
    <p>

    <?php if(strlen($finish['vol_id'])==1 && strlen($finish['vol_id'])>0){
      $customid ="VOLHB00".$finish['vol_id'];
    }else if(strlen($finish['vol_id'])==2 && strlen($finish['vol_id'])>0){
      $customid ="VOLHB0".$finish['vol_id'];
    }else if(strlen($finish['vol_id'])>0){
      $customid ="VOLHB".$finish['vol_id'];
    };
    ?>
    <div class="subby">Submitted By:</br><?= $customid ?></div>
      <button class="dbtn"><a href="<?= $finish['case_path'] ?>" download="<?= $finish['beneficiery_id'] ?>"><i class="fa fa-download"></i> Download</a></button>

    </p>
  </div>
  <?php endforeach; ?>
  
</div>
        






    </div>











    <script src="<?= URL ?>public/js/com-dash-beneficiaryCases.js"></script>

</div>

<?php include "com-dash-footer.php" ?>