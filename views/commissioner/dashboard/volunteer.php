<?php $page = 'home';
$title = 'Volunteer Profiles';
$style = 'com-dash-profiles-volunteer.css';
$jsFile = 'tab-changing';
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




<div class="grid-container">



  <div class="grid-body">

    <div class="pageTitle">
      <h1>Volunteer Profiles</h1>
    </div>

    <div class="tab-section">
      <ul>
        <li><a id="tab1" href="?registered" class="active">Registered </a></li>
        <li><a id="tab2" href="#"> New Requests <span>(<?php echo $newReq_Count ?>) </span></a></li>
     
          
        
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
              <td>Volunteer ID</td>
              <td>Name</td>
              <td>Volunteer Level</td>
              <td>Conact</td>
              <td>Email</td>
              <td>Points</td>
              <td>Joined Date</td>
              <td></td>
            </tr>
              </thead>
              <tbody>

                <?php foreach ($contacts as $contact) : ?>
                  <tr>
                    <td><?= $contact['id'] ?></td>
                    <td><?= $contact['vol_id'] ?></td>
                    <td><?= $contact['name'] ?></td>
                    <td><?= $contact['level'] ?></td>
                    <td><?= $contact['contact'] ?></td>
                    <td><?= $contact['email'] ?></td>
                    <td><?= $contact['vol_points'] ?></td>
                    <td><?= $contact['join_date'] ?></td>
                    <td class="actions">
                    <button class="open-button" onclick="openForm()">View</button>

<div class="form-popup" id="myForm">

 <div class="form-container">
    <h1>A.Nimasha<span>&nbsp; | &nbsp; </span> VOLHB002</h1>
    <h2>6 Events  <span> &nbsp;|&nbsp; </span> 140 points  </h2> 
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
                      <a href="delete.php?id=<?= $contact['id'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>


            <div class="pagination">
              <?php if ($page_no > 1) : ?>
                <a href="volunteer?page=<?= $page_no - 1 ?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
              <?php endif; ?>
              <?php if ($page_no * $records_per_page < $num_contacts) : ?>
                <a href="volunteer?page=<?= $page_no + 1 ?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
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

            <?php foreach ($newReq as $req) : ?>
              <tr>
                 
                <td><?= $req['join_date'] ?></td>
                <td><?= $req['name'] ?></td>
                <td><?= $req['email'] ?></td>
             
                <td class="actions">
                <a href="update.php?id=<?= $req['id'] ?>" class="edit" download="#"><i class="fa fa-download"></i>View Application</i></a>
                  <a href="run_accept_vol_request?id=<?= $req['id'] ?>" class="edit">Accept</i></a>
                  
                  <a href="update.php?id=<?= $req['id'] ?>" class="edit">Decline</i></a>
                 
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

       
      </div>    
    </div>

  </div>

  <?php include "com-dash-footer.php" ?>