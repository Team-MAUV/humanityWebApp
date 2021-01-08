<?php $page = 'leaveRequests';
$title = 'Staff Leave Requests';
$style = 'com-dash-leaveRequests.css';
include "com-dash-header.php"; ?>


<div class="grid-container">

<!--
<div class="content_update">

<h1>Leave Requests</h1></br>
  <?php foreach ($leaves as $leave) : ?>
  <button type="button" class="readmore">
    <table><tr><td><?= $leave['name'] ?> </td>
  <td><?= $leave['date'] ?> </td>
  <td> Approved: </td>   </tr>
</table></button>
  <div class="content">
    <p>


      <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline <input type="radio" id="decline" name="confirmreq" value="decline"><br>
        <button type="button" class="btn" name="submit">Submit</button> </div>
        <button type="button" class="btn" onclick="viewprofile()">View Profile</button>
        <button type="button" class="btn" onclick="viewform()">View Request Form</button>
      

    </p>
   </div>
   <?php endforeach; ?>
</div>
  
   <script src="<?= URL ?>public/js/com-dash-beneficiaryCases.js"></script>



</div>
-->


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
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<h1>Leave Requests </h1>

<br>

<div class="row">
<?php foreach ($contacts as $contact) : ?>
  

 <button type="button" class="readmore"><?= $contact['name'] ?> <span>&nbsp;&nbsp;</span>
 <?php if(strlen($contact['staff_id'])==1 && strlen($contact['staff_id'])>0){
      $ccustomid ="STFHB00".$contact['staff_id'];
    }else if(strlen($contact['staff_id'])==2 && strlen($contact['staff_id'])>0){
      $ccustomid ="STFHB0".$contact['staff_id'];
    }else if(strlen($$contact['staff_id'])>0){
      $ccustomid ="STFHB".$contact['staff_id'];
    };
    ?>
 
 <?= $ccustomid ?> <span>  &nbsp; &nbsp; &nbsp;</span> <?= $contact['from_date'] ?></button>
  <div class="content">
    <p>
    <div class="confirm"> Accept <input type="radio" id="accept" name="confirmreq" value="accept"> &nbsp;Decline 
      <input type="radio" id="decline" name="confirmreq" value="decline"><br>
  
  
         
     
          <script>
        $(document).ready(function() {
            $("input[type='radio']").change(function() {
                if ($(this).val() == "decline") {
                    $("#reason").show();
                } else {
                    $("#reason").hide();
                }
            });
        });
    </script>
 <input style="display:none;" type="text" id="reason" placeholder="Reason to decline " name="reason">




        <button type="button" class="btn" name="submit">Submit</button> </div>
  <p style="color:white;font-family:sans-serif">

  <?php foreach ($leaves as $leave) : ?>
  <?php if($contact['staff_id']==$leave['id']){
    $noleave=$leave['no_leave'];
    
  };
  
  ?>
  <?php endforeach; ?>

   Already taken=<?=$noleave?></p>

        <button type="open-button" class="btn" id="<?$ccustomid?>" >View Request Form</button>
   
        </p>
   
   </div>

   <?php endforeach; ?>
   
   </div>




   <?php foreach ($contacts as $contact) : ?>

   <div class="form-popup" id="myForm">
  
  <div class="form-container">
  
    <h2><?= $contact['name'] ?><span>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</span>
    
    <?php if(strlen($contact['staff_id'])==1 && strlen($contact['staff_id'])>0){
      $ccustomid ="STFHB00".$contact['staff_id'];
    }else if(strlen($contact['staff_id'])==2 && strlen($contact['staff_id'])>0){
      $ccustomid ="STFHB0".$contact['staff_id'];
    }else if(strlen($$contact['staff_id'])>0){
      $ccustomid ="STFHB".$contact['staff_id'];
    };
    ?>
    <?= $ccustomid ?></h2>
<hr style="color:blue"> </hr>
    <h3>From: <?= $contact['from_date'] ?> </h3>
    <h3>To : <?= $contact['to_date'] ?> </h3>
    <h3>Reason : <?= $contact['reason'] ?></h3>


    
   
  </div>
</div>
<?php endforeach; ?>





</div>
-->

<div class="content read">
          <h1>Request Leaves </h1>
          <div class="search-container">
            <form action="#" method="POST">
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
      <tr>
        <td> 02.02.2021 </td>
        <td> 05</td>
      </tr>
      <tr>
        <td> 02.02.2021 </td>
        <td> 05</td>
      </tr>
      <tr>
        <td> 02.02.2021 </td>
        <td> 05</td>
      </tr>
      <tr>
        <td> 02.02.2021 </td>
        <td> 05</td>
      </tr>
      <tr>
        <td> 02.02.2021 </td>
        <td> 05</td>
      </tr>
      <tr>
        <td> 02.02.2021 </td>
        <td> 05</td>
      </tr>
    </tbody>
  </table>
    <button type="submit" class="button" onclick="closeForm()">Close</button>
  
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

</script>


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