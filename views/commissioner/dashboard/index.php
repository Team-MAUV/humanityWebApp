<?php $page = 'home';
$title = 'Commissioner Home';
$style = 'com-dash-index.css';
include "com-dash-header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">Home
  </div>

</div>

Home
<div class="userId"> <h1> <?= $_SESSION['id'] ?> </h1> 
<h3> <?= $_SESSION['address'] ?> </h3> 

</div>


<?php include "com-dash-footer.php" ?>