
<?php $page = 'home';
include "vol_dash_header.php"; ?>

<link rel="stylesheet" href="<?= URL ?>public/css/vol-home.css" />
<div class="grid-container">


<h1>Welcome to Volunteer Portal!</h1>
    
    <ul class="voldata">
    <img src="http://localhost/humanity/public/images/img1.svg" class="floatRight">
    <li>
            Volunteer ID : &nbsp;<?= $_SESSION['id'] ?>
        </li>
        <li>
            Name : &nbsp;<?= $_SESSION['name'] ?>
        </li>

        <li>
            Level : &nbsp;<?= $_SESSION['level'] ?>&nbsp;&nbsp; <input type="submit" class="btn" value="Apply for Staff">

        </li>
        <li>
            Volunteer points : </li>
        <div class="bar">
            <div class="progress vol-points"><?= $_SESSION['vol_points'] ?>%</div>
        </div>


        
    </ul>

</div>


<?php include "vol_dash_footer.php" ?>
