<?php $page = 'Session Incharge Login';
$style = "staff-dash-sicLogin.css";
include "staff_header.php"; ?>


<div class="grid-container">


<div class="login">
        <h1>Session Incharge Login!</h1>
        <img class="avatar" src="<?= URL ?>public/images/Commissioner.png" />
        <form action="run_sic_login" method="post">

            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Temporary Username" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Passcode" id="password" required>
    
            <div class="validation-error">
                <?php
               
                if (isset($_SESSION["error"])) {
                    // $error = $_SESSION["error"];
                    print "<h1>Incorrect Username  or Password !</h1>";
                }
                ?>
            </div>


            <input type="submit" class="btn" value="Login" />




        </form>
    </div>







</div>
<?php include "staff_footer.php" ?>