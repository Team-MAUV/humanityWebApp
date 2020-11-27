<?php $page = 'projectReports';
$title = 'Project Reports';
$style = 'com-dash-projectReports.css';
include "com-dash-header.php"; ?>


<div class="grid-container">

<div class="row">
<button class="tab tab-upcoming" onclick="openpage('upcoming',this)" id="defaultOpen">New Reports</button>
    <button class="tab tab-finished" onclick="openpage('finished',this)">Approved Reports</button></div>
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
                    <div class="confirm"> <input type="radio" id="accept" name="confirmreq" value="accept"> Accept&nbsp; <input type="radio" id="reject" name="confirmreq" value="reject">Reject<br>
                        <button type="button" class="btn">Submit</button> </div>
                </div>
            </div>

        </div>
        <?php endforeach; ?>
        
    </div>
    </form>
    </div>
    <div id="finished" class="tabcontent">
        
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
      $ccustomid ="STFB00".$report['staff_id'];
    }else if(strlen($report['staff_id'])==2 && strlen($report['staff_id'])>0){
      $ccustomid ="STFHB0".$report['staff_id'];
    }else if(strlen($report['staff_id'])>0){
      $ccustomid ="STFHB".$report['staff_id'];
    };
    ?>
    
        <li>Submitted By : <?= $ccustomid ?></li>


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

</div>

<script src="<?= URL ?>public/js/vol-viewevents.js"></script>
<?php include "com-dash-footer.php" ?>