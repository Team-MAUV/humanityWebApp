<?php $page = 'home';
include "com_dash_header.php"; ?>


<div class="grid-container">



 



<h1>Welcome to Volunteer Portal!</h1>
    <img src="http://localhost/humanity/public/images/img1.svg" class="floatRight">
    <ul>
        <li>
            Name : &nbsp;Mr. A.K. Perera
        </li>

        <li>
            Level : &nbsp;<i class="fas fa-user-shield fa-2x"></i>&nbsp;&nbsp; <input type="submit" class="btn" value="Apply for Staff">

        </li>
        <li>
            Volunteer points : </li>
        <div class="bar">
            <div class="progress vol-points">55%</div>
        </div>


        <li>
            Contribution :
        </li>
        <div>
            <textarea id="Contribution" name="Contribution"></textarea>
        </div>
    </ul>

</div>
</div>

<?php include "com_dash_footer.php" ?>