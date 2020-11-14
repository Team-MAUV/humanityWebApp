
   <?php 
$title = 'Humanity User Login';
$style = 'userLogin-index';
include "userLogin-header.php"; ?>
   
   

    <div class="login">
        <h1>Welcome to Humanity User Login!</h1>
        <img class="avatar" src="<?= URL ?>public/images/Commissioner.png" />
        <form action="login/run_com" method="post">

            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <div class="forgotpw"><a href="<?= URL ?>login/forgotPassword">Forgot Password?</a></div>
            <div class="validation-error">
                <?php
                session_start();
                if (isset($_SESSION["error"])) {
                    // $error = $_SESSION["error"];
                    print "<h1>Incorrect Username  or Password !</h1>";
                }
                ?>
            </div>


            <input type="submit" class="btn" value="Login" />




        </form>
    </div>

   
    <?php include "userLogin-footer.php" ?>

    <?php
unset($_SESSION["error"]);
?>