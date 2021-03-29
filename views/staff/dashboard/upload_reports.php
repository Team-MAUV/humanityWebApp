<?php $page = 'upload_reports';
include "staff_header.php";
$title = 'Project Reports'; ?>

<head>
	<meta charset="UTF-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Reports </title>
	<link rel="stylesheet" href="<?= URL ?>public/css/staff_dash_uploadreport.css" />

</head>

<div class="grid-container">

<div class="row">
<button class="tab tab-upcoming" onclick="openpage('upcoming',this)" id="defaultOpen">New Reports</button>
<button class="tab tab-current" onclick="openpage('current',this)">Approved Reports</button>
    <button class="tab tab-finished" onclick="openpage('finished',this)">Rejected Reports</button>
    </div>
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
                
                    <div ><ul class="subby">
                    <li>Report ID : <?= $pending['report_id']  ?></li>
                    <?php if(strlen($pending['staff_id'])==1 && strlen($pending['staff_id'])>0){
      $scustomid ="STFHB00".$pending['staff_id'];
    }else if(strlen($pending['staff_id'])==2 && strlen($pending['staff_id'])>0){
      $scustomid ="STFHB0".$pending['staff_id'];
    }else if(strlen($pending['staff_id'])>0){
      $scustomid ="STFHB".$pending['staff_id'];
    };
    ?>
    
        <li>Submitted By : <?= $scustomid ?></li>
                      <li> Submitted on: <?= $pending['created_date']  ?></li> </ul></div>
                      <button class="dbtn"><a href="<?= $pending['report_path']  ?>" download="<?= $pending['report_id'] ?>"><i class="fa fa-download"></i> Download</a></button>
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


    <?php if(strlen($report['com_id'])==1 && strlen($report['com_id'])>0){
      $ccustomid ="COMHB00".$report['com_id'];
    }else if(strlen($report['com_id'])==2 && strlen($report['com_id'])>0){
      $ccustomid ="COMHB0".$report['com_id'];
    }else if(strlen($report['com_id'])>0){
      $ccustomid ="COMHB".$report['com_id'];
    };
    ?>
    <li>Approved By : <?= $ccustomid ?></li>
    <li>Approved By : <?= $report['approved_date']  ?></li>
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
    <li> Reject Reason: <?= $reject['remark'] ?></li>           </ul>
                </div>
            </div>

        </div>
        <?php endforeach; ?>
        
    </div>
    </form>
    </div>
</div>

<script src="<?= URL ?>public/js/vol-viewevents.js"></script>

<?php include "staff_footer.php" ?>