
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



  <?php $page = 'beneficiaryCases';
$title = 'Beneficiary Cases';
$style = 'com-dash-beneficiaryCases.css';
$jsFile = 'tab-changing';

include "com-dash-header.php"; ?>

<div class="grid-container">



  
<div id="breadcrum">

<!DOCTYPE html>
<html>
<head>
<title>volunteer Profile</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

<link rel="stylesheet" href="<?= URL?> public/css/com_dash_readmore.css" />
</head>
<body>

  <div class="grid-body">

<div class="pageTitle">
  <h1>Beneficiary Cases</h1>
</div>

<div class="tab-section">
  <ul>
    <li><a id="tab1" href="?upcoming" class="active">Upcoming Cases </a></li>
    <li><a id="tab2" href="?current"> Current Cases </a></li>
    <li><a id="tab3" href="?finish"> Finished Cases</a></li>
      
    
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
                <td> <button type="button"> 
                  <a href="<?= $upcoming['case_path'] ?>" download="<?= $upcoming['beneficiery_id'] ?>"><i class="fa fa-download"></i> Download</button>
                </td>
                <td><button type="button">Accept </button> <button type="button">Decline </button></td>
                <td></td>
                <td><button type="button">Submit </button></td>
                </tr>

                <?php endforeach; ?>




                </tbody>
              </table>

    </div>
    </div>



    <div id="tab2C" class="tab-container">
      <div class="content read">

        <table>
          <thead>
            <tr>
                <td>Beneficiary case ID</td>
            
              <td></td>
              <td> submitted By</td>
              <td></td>
              <td>Download </td>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($currents as $current) : ?>
            <tr>
            <td><?= $current['beneficiery_id'] ?> </td>
              <td></td>
              <td> <?php if(strlen($current['vol_id'])==1 && strlen($current['vol_id'])>0){
      $ccustomid ="VOLHB00".$current['vol_id'];
    }else if(strlen($current['vol_id'])==2 && strlen($current['vol_id'])>0){
      $ccustomid ="VOLHB0".$current['vol_id'];
    }else if(strlen($current['vol_id'])>0){
      $ccustomid ="VOLHB".$current['vol_id'];
    };
    ?> <?= $ccustomid ?></td>
              <td></td>
              <td>    <button type="button">     
       <a href="<?= $current['case_path'] ?>" download="<?= $current['beneficiery_id'] ?>"><i class="fa fa-download"></i> Download </button>
      </td>

            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        </div>    
    </div>


    <div id="tab3C" class="tab-container">
      <div class="content read">

        <table>
          <thead>
            <tr>
                <td>Beneficiary case ID</td>
            
              <td></td>
              <td> submitted By</td>
              <td></td>
              <td>Download </td>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($finishs as $finish) : ?>
            <tr>
            <td><?= $current['beneficiery_id'] ?> </td>
              <td></td>
              <td>  <?php if(strlen($finish['vol_id'])==1 && strlen($finish['vol_id'])>0){
      $customid ="VOLHB00".$finish['vol_id'];
    }else if(strlen($finish['vol_id'])==2 && strlen($finish['vol_id'])>0){
      $customid ="VOLHB0".$finish['vol_id'];
    }else if(strlen($finish['vol_id'])>0){
      $customid ="VOLHB".$finish['vol_id'];
    };
    ?>
                <?= $ccustomid ?></td>
              <td></td>
              <td>    <button type="button">     
       <a href="<?= $finish['case_path'] ?>" download="<?= $finish['beneficiery_id'] ?>">     <i class="fa fa-download"></i> Download </button>
      </td>

            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        </div>    
    </div>









    <script src="<?= URL ?>public/js/com-dash-beneficiaryCases.js"></script>
</div>

<?php include "com-dash-footer.php" ?>