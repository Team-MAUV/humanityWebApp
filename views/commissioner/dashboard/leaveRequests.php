<?php $page = 'leaveRequests';
$title = 'Staff Leave Requests';
$style = 'com-dash-leaveRequests.css';
include "com-dash-header.php"; ?>


<div class="grid-container">


<div id="breadcrum">

<!DOCTYPE html>
<html>
<head>
<title>Saff Profile</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>

<body>


<div class="content read">
          <h1>Request Leaves </h1>
          <div class="search-container">
            <form action="search_leaverequest" method="POST">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            </div>

<div class="date-wise">
  <button type="button" class:"button" id:"approved" onclick="openForm()"> Approved Leaves </button>
</div>
<div class="form-popup" id="myForm">
  <h2>Approved Leaves on date </h2>
  <table>
    <thead>
      <tr>
        <td>Date</td>
        <td>Approved</td>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($approved as $approve) : ?>
      <tr>
        <td> <?=$approve['from_date']?> </td>
        <td> <?=$approve['fromd']?></td>
      </tr>
      
<?php endforeach; ?>

<?php foreach ($approved2 as $approve2) : ?>
      <tr>
        <td> <?=$approve2['to_date']?> </td>
        <td> <?=$approve2['tod']?></td>
      </tr>
      
<?php endforeach; ?>

    </tbody>
  </table>
    <button type="submit" class="button" onclick="closeForm()">Close</button>
  
</div>

<script src="<?= URL ?>public/js/leaverequest.js" type="text/javascript"></script>

              <table>
                <thead>
                <tr>
                <td>#</td>
                <td>Staff ID</td>
                <td>Name</td>
                <td>Already taken</td>
                <td>From</td>
                <td>To</td>
                <td>Reason</td>
                
                <td>Remark</td>
                <td>Accept/Reject</td>
            
              </tr>
                </thead>
                <tbody>
                <?php foreach ($contacts as $contact) : ?>
                <tr>
                <td><?= $contact['leave_id'] ?></td>
                <td><?php if(strlen($contact['staff_id'])==1 && strlen($contact['staff_id'])>0){
      $ccustomid ="STFHB00".$contact['staff_id'];
    }else if(strlen($contact['staff_id'])==2 && strlen($contact['staff_id'])>0){
      $ccustomid ="STFHB0".$contact['staff_id'];
    }else if(strlen($$contact['staff_id'])>0){
      $ccustomid ="STFHB".$contact['staff_id'];
    };
    ?>  <?= $ccustomid ?> </td>
                <td><?= $contact['name'] ?></td>
                <td><?php foreach ($leaves as $leave) : ?>
  <?php if($contact['staff_id']==$leave['id']){
    $noleave=$leave['no_leave'];
    
  };
  
  ?>
  <?php endforeach; ?>  <?=$noleave?></td>
                <td> <?= $contact['from_date'] ?></td>
                <td><?= $contact['to_date'] ?></td>
                <td><?= $contact['reason'] ?></td>
               
                <td> <input type="text" id:"reason" name:"reason" value:"reason"> </td>
                <td><button type:"button" class:"button" id:"accept">Accept</button> <button type:"button" class:"button" id:"reject">Reject</button></td>
                </tr>

                <?php endforeach; ?>
              </tbody>
            </table>
              
            <div class="pagination">
             

           
            </div>    











    



</div>

    </div> 



    

































<?php include "com-dash-footer.php" ?>