


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
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

</head>
<body>

  <div class="grid-body">

<div class="pageTitle">
  <h1>Beneficiary Cases</h1>
</div>

<div class="tab-section">
  <ul>
    <li><a id="tab1" href="?upcoming" class="active">Upcoming Cases </a></li>
    <li><a id="tab2" href="#"> Current Cases </a></li>
    <li><a id="tab3" href="#"> Finished Cases</a></li>
      
    
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