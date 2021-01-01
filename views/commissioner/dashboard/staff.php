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

<style>

* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color:  #4d79ff;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;



}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  top:100px;
right:100px;
border: 4px solid blue;
  border-radius: 12px;
  z-index: 9;
  text-align: left;
  color:#000033;
}

/* Add styles to the form container */
.form-container {
  max-width: 500px;
  padding: 10px;
  background-color:#ccccff;
  color:#000033;
  
}


.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
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
          
        <div class="search-container">
          <form action="search_volunteer" method="POST">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
          </div>
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
                    <td class="actions">
                     <!-- <a href="update.php?id=<?= $scontact['id'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>-->
                   <!--  <a href="<?= URL?>commissioner/staff_viewprofile" class="edit"><i class="fas fa-pen fa-xs"></i></a>-->
                    
                   <button class="open-button" onclick="openForm()">View</button>

<div class="form-popup" id="myForm">
 <div class="form-container">
    <h1>N.Kamal <span>&nbsp; | &nbsp; </span> STFHB001</h1>
    <h2>15 Events  <span> &nbsp;|&nbsp; </span> 340 points  </h2> 
    <h2>Joined: &nbsp; 25.06.2010</h2>
    <h2>Permanent Volunteer: &nbsp; From 25.03.2018</h2>

   <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                </div>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
















                     


                      <a href="delete.php?id=<?= $scontact['id'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
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

       
      </div>    
    </div>

  </div>

</div>
</body>
</div>
</div>
</html>


<?php include "com-dash-footer.php" ?>