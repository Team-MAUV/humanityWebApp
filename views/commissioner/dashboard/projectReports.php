<?php $page = 'projectReports';
$title = 'Project Reports';
$style = 'com-dash-projectReports.css';
include "com-dash-header.php"; ?>






<div id="breadcrum">

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

<link rel="stylesheet" href="<?= URL?> public/css/com_dash_readmore.css" />
</head>
<body>

<div class="grid-container">

<div class="row">
<button class="tab tab-upcoming" onclick="openpage('upcoming',this)" id="defaultOpen">New Reports</button>
    <button class="tab tab-current" onclick="openpage('current',this)">Approved Reports</button>
    <button class="tab tab-finished" onclick="openpage('finished',this)">Rejected Reports</button></div>
    <div id="upcoming" class="tabcontent">
        <form action="#">
 <h1>New Project Reports</h1>
    <div class="row">
    <?php foreach ($pendings as $pending) : ?>
        <div class="column">


            <div class="flipbox-inner">
                <div class="flipbox-front">
                    <h2><?= $pending['id'] ?></h2>
                    <h3 class="head1"><?= $pending['title'] ?> </h3>
                </div>
                <div class="flipbox-back">
                <button class="dbtn"><a href="<?= $pending['report_path']  ?>" download="<?= $pending['report_id'] ?>"><i class="fa fa-download"></i> Download</a></button>
                  <div class="confirm">
                  <button type="button" class="acc" id="acc">Accept</button> 
                  <button type="button" class="readmore" id="reject">Reject</button> 

                  <div class="view" id="view">
                  <input type="text" name="reason" id="reason" placeholder="Reason" >
            
               </div>
                
                     
                    
                    
                    
                    <button type="button" class="btn">Submit</button> </div>
                </div>
            </div>

        </div>
        <?php endforeach; ?>
        
    </div>
    </form>
    </div>
   









    <div id="current" class="tabcontent">
        
        <h1>Approved Project Reports</h1>
    <div class="row">
    <?php foreach ($approved as $report) : ?>
        <div class="column">


            <div class="flipbox-inner">
                <div class="flipbox-front">
                    <h2><?= $report['id'] ?></h2>
                    <h3 class="head1"><?= $report['title'] ?> </h3>
                </div>
                <div class="flipbox-back">
                <ul class="subby">
                <li>Report ID : <?= $report['report_id']  ?></li>

                <?php if(strlen($report['staff_id'])==1 && strlen($report['staff_id'])>0){
      $scustomid ="STFHB00".$report['staff_id'];
    }else if(strlen($report['staff_id'])==2 && strlen($report['staff_id'])>0){
      $scustomid ="STFHB0".$report['staff_id'];
    }else if(strlen($report['staff_id'])>0){
      $scustomid ="STFHB".$report['staff_id'];
    };
    ?>
    
        <li>Submitted By : <?= $scustomid ?></li>


    <?php if(strlen($report['com_id'])==1 && strlen($report['com_id'])>0){
      $ccustomid ="COMHB00".$report['com_id'];
    }else if(strlen($report['com_id'])==2 && strlen($report['com_id'])>0){
      $ccustomid ="COMHB0".$report['com_id'];
    }else if(strlen($report['com_id'])>0){
      $ccustomid ="COMHB".$report['com_id'];
    };
    ?>
    <li>Approved By : <?= $ccustomid ?></li>
</ul>
                <button class="dbtn"><a href="<?= $report['report_path'] ?>" download="<?= $report['report_id'] ?>"><i class="fa fa-download"></i> Download</a></button>
                    
                </div>
            </div>

        </div>
        <?php endforeach; ?>
        
    </div>

    </div>
    <div id="finished" class="tabcontent">
        <form action="#">
 <h1>Rejected Project Reports</h1>
    <div class="row">
    <?php foreach ($rejects as $reject) : ?>
        <div class="column">


            <div class="flipbox-inner">
                <div class="flipbox-front">
                    <h2><?= $reject['id'] ?></h2>
                    <h3 class="head1"><?= $reject['title'] ?> </h3>
                </div>
                <div class="flipbox-back">
                
                <?php if(strlen($reject['com_id'])==1 && strlen($reject['com_id'])>0){
      $ccustomid ="COMHB00".$reject['com_id'];
    }else if(strlen($reject['com_id'])==2 && strlen($reject['com_id'])>0){
      $ccustomid ="COMHB0".$reject['com_id'];
    }else if(strlen($reject['com_id'])>0){
      $ccustomid ="COMHB".$reject['com_id'];
    };
    ?>
     <ul class="subby">
     <li>Report ID : <?= $reject['report_id']  ?></li>
     <?php if(strlen($reject['staff_id'])==1 && strlen($reject['staff_id'])>0){
      $scustomid ="STFHB00".$reject['staff_id'];
    }else if(strlen($reject['staff_id'])==2 && strlen($reject['staff_id'])>0){
      $scustomid ="STFHB0".$reject['staff_id'];
    }else if(strlen($reject['staff_id'])>0){
      $scustomid ="STFHB".$reject['staff_id'];
    };
    ?>
    
        <li>Submitted By : <?= $scustomid ?></li>
    <li>Rejected By : <?= $ccustomid ?></li>
   
    <button class="dbtn"><a href="<?= $reject['report_path']  ?>" download="<?= $reject['report_id'] ?>"><i class="fa fa-download"></i> Download</a></button>
    <li>Reject reason:<?= $reject['reject_reason'] ?> </li> </ul>
                </div>
            </div>

        </div>
        <?php endforeach; ?>
        
    </div>
    </form>
    </div>
</div>

<script src="<?= URL ?>public/js/com-dash-beneficiaryCases.js"></script>
<script src="<?= URL ?>public/js/vol-viewevents.js"></script>
<?php include "com-dash-footer.php" ?>