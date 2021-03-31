<?php $page = 'profiles';
$title = 'Staff Profiles';
$style = 'com-dash-staff.css';
$style = 'com_dash_staffviewprofile.css';
$jsFile = 'tab-changing';
$style = 'com-dash-profiles-volunteer.css';
include "com-dash-header.php"; ?>



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



<div class="grid-body">

    <div class="pageTitle">
      <h1>Staff Profiles</h1>
    </div>

    <div class="tab-section">
      <ul>
        <li><a id="tab1" href="?registered" class="active">Registered </a></li>
        <li><a id="tab2" href="#"> New Requests <span>(<?php echo $snewReq_Count ?>) </span></a></li>
     
          
        
      </ul>


      <hr>
    </div>


    <div id="tab1C" class="tab-container">
  
          <div class="content read">
          
      
            <table>
              <thead>
              <tr>
              <td>#</td>
              <td>Staff ID</td>
              <td>Name</td>
              <td>Email</td>
              <td>Address</td>
              <td>Joined Date</td>
              <td>View Profile</td>
              <td></td>
            </tr>
              </thead>
              <tbody>

                <?php foreach ($scontacts as $scontact) : ?>
                  <tr>
                    <td><?= $scontact['id'] ?></td>
                    <td><?= $scontact['staff_id'] ?></td>
                    <td><?= $scontact['name'] ?></td>
                    <td><?= $scontact['email'] ?></td>
                    <td><?= $scontact['address'] ?></td>
                    <td><?= $scontact['joined_year'] ?></td>
                   
                 <td> 
                    
                   <button type="button" class="readmore">view more</button>
  <div class="view" id="view">
               
                <p>DOB : <?= $scontact['dob'] ?></p>
                <p>Gender :<?= $scontact['gender'] ?></p>
                <p>Leaves taken :<?= $scontact['no_leave'] ?></p>
                
                </div>
                </td>
      

                <td class="actions">
                <form action="delete_staff" method="POST">
  
                  <input type="hidden" id="id" name="id" value = "<?= $scontact['id'] ?>" required><br><br>
                  <label for="lname">Remark:</label>
                  <input type="text" id="remark" name="remark" required><br><br>
                  <button type="submit" value="Submit"><i class="fas fa-trash fa-xs"></i>Remove</button>
                </form>
                      
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>


            <div class="pagination">
              <?php if ($spage_no > 1) : ?>
                <a href="staff?page=<?= $spage_no - 1 ?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
              <?php endif; ?>
              <?php if ($spage_no * $records_per_page < $snum_contacts) : ?>
                <a href="staff?page=<?= $spage_no + 1 ?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
              <?php endif; ?>

           
            </div>
          </div>


    </div>

    <div id="tab2C" class="tab-container">
      <div class="content read">

        <table>
          <thead>
            <tr>
              <td>Requested On</td>
              <td>Name</td>
              <td>Email</td>
              <td></td>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($snewReq as $sreq) : ?>
              <tr>
                 
                <td><?= $sreq['joined_year'] ?></td>
                <td><?= $sreq['name'] ?></td>
                <td><?= $sreq['email'] ?></td>
             
                <td class="actions">
                <a href="update.php?id=<?= $sreq['id'] ?>" class="edit">View Profile</i></a>
                  <a href="run_accept_staff_request?id=<?= $sreq['id'] ?>" class="edit">Accept</i></a>
                  
                  <a href="update.php?id=<?= $sreq['id'] ?>" class="edit">Decline</i></a>
                 
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
<h2>Removed Staff Members</h2>
        <table>
          <thead>
            <tr>
              <td>Staff Id</td>
              <td>Name</td>
              <td>Email</td>
              <td>Contact</td>
              <td>Com Id</td>
              <td>Remark</td>
              <td></td>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($rstff as $stf) : ?>
              <tr>
                 
                <td><?= $stf['staff_id'] ?></td>
                <td><?= $stf['name'] ?></td>
                <td><?= $stf['email'] ?></td>
                <td><?= $stf['contact'] ?></td>
                <td><?= $stf['com_id'] ?></td>
                <td><?= $stf['remove_reson'] ?></td>
             
                
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

       
      </div>    
    </div>

  </div>

</div>
</body>
</div>
<script src="<?= URL ?>public/js/com-dash-beneficiaryCases.js"></script>
</div>
</html>


<?php include "com-dash-footer.php" ?>