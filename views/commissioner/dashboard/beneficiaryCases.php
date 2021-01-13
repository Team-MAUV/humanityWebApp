<?php $page = 'beneficiaryCases';
$title = 'Beneficiary Cases';
$style = 'com-dash-beneficiaryCases.css';
$jsFile = 'com-dash-beneficiaryCases.js';
include "com-dash-header.php"; ?>

<div class="grid-container">


<!--
<div class="row">
    <button class="tab" onclick="openpage('upcoming',this)" id="defaultOpen">Upcoming Cases</button>
    <button class="tab" onclick="openpage('current',this)">Current Cases</button>
    <button class="tab" onclick="openpage('finished',this)">Finished Cases</button></div>

    <div id="upcoming" class="tabcontent">

    <div class="split left">
  
  <h1> Upcoming Beneficary Cases</h1></br>
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
  -->

  <div class="grid-body">

<div class="pageTitle">
  <h1>Beneficiary Cases</h1>
</div>

<div class="tab-section">
  <ul>
    <li><a id="tab1" href="?upcoming" class="active">Upcoming Cases </a></li>
    <li><a id="tab2" href="?current"> Current Cases </a></li>
    <li><a id="tab3" href="?finished"> Finished Cases</a></li>
      
    
  </ul>


  <hr>
</div>


<div id="tab1C" class="tab-container">


    <div class="content read">
          
          <div class="search-container">
            <form action="search_volunteer" method="POST">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            </div>
              <table>
                <thead>
                <tr>
                <td></td>
                <td>Beneficiary case ID</td>
                <td>Download</td>
                <td>Accept/Decline</td>
                <td></td>
                <td>Submit</td>
                
                <td></td>
              </tr>
                </thead>
                <tbody>
                <?php foreach ($upcomings as $upcoming) : ?>
                  <tr> 
                <td></td>
                <td><?= $upcoming['beneficiery_id'] ?></td>
                <td> <button type="button"><i class="fa fa-download"></i> Download</button></td>
                <td>Accept/Decline</td>
                <td></td>
                <td>Submit</td>
                </tr>

                <?php endforeach; ?>




                </tbody>
              </table>

    </div>
    </div>








</div>

<?php include "com-dash-footer.php" ?>