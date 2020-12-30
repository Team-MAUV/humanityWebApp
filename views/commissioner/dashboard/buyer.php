
<?php $page = 'profiles';
$title = 'Buyer Profile';
$style = 'com-dash-buyer.css';
$jsFile = 'tab-changing';
$style = 'com-dash-profiles-volunteer.css';
include "com-dash-header.php"; ?>

<div class="grid-container">
<<div id="breadcrum">

<!DOCTYPE html>
<html>
<head>
<title>Saff Profile</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<style>
  


 
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 150px;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #004883;
  color:yellow;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 20%;
}

/* The Close Button */
.close {
  color: red;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

</style>
</head> 
<body>
<div class="grid-body">

    <div class="pageTitle">
      <h1>Buyer Profiles</h1>
    </div>
    <div class="tab-section">
      <ul>
        <li><a id="tab1" href="?registered" class="active">Registered </a></li>
        
          
        
      </ul>


      <hr>
    </div>


    <div id="tab1C" class="tab-container">
  
          <div class="content read">
          
        <div class="search-container">
          <form action="search_buyer" method="POST">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
          </div>
            <table>
              <thead>
              <tr>
              <td>#</td>
              <td>Buyer ID</td>
              <td>Name</td>
              <td>Email</td>
              <td>Contact</td>
              <td>NIC</td>
              <td>Bids Won </td>
              <td></td>
            </tr>
              </thead>
              <tbody>

                <?php foreach ($bcontacts as $bcontact) : ?>
                  <tr>
                    <td><?= $bcontact['id'] ?></td>
                    <td><?= $bcontact['buy_id'] ?></td>
                    <td><?= $bcontact['name'] ?></td>
                    <td><?= $bcontact['email'] ?></td>
                    <td><?= $bcontact['contact'] ?></td>
                    <td><?= $bcontact['nic'] ?></td>
 <td> <button id="myBtn" style=" background-color:#004883; color: white; padding: 12px 20px;border: none; border-radius: 4px; cursor: pointer;
  float: right;" > 5 </button></td>

                    <div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <span class="close">&times;</span>
  <h3>02.10.2020</h3>
  <p>Plastic <span>|</span> 50kg</p>
  
</div>


<script>var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
 modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}</script>

</div>







                    <td class="actions">
                     
                      <a href="delete.php?id=<?= $bcontact['id'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>


            <div class="pagination">
              <?php if ($bpage_no > 1) : ?>
                <a href="buyer?page=<?= $bpage_no - 1 ?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
              <?php endif; ?>
              <?php if ($bpage_no * $records_per_page < $bnum_contacts) : ?>
                <a href="buyer?page=<?= $bpage_no + 1 ?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
              <?php endif; ?>

           
            </div>
          </div>


    </div>

    

  </div>



</div>
</body>

<?php include "com-dash-footer.php" ?>