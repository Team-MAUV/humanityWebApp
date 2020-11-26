
   <?php 
$title = 'Forgot Password';
$style = 'userLogin-forgotPassword';
include "userLogin-header.php"; ?>

<div class="login">

         <h1>Reset Your Password!</h1>
         <form action="run_check_email" method="post"  >
         <div class="inputContainer">  <h3>Enter your Email address!</h3></div>
            <div class="inputContainer"> 
            <label><strong><i class="fas fa-envelope-open-text"></i></strong></label><br /><br />
            <input type="email" name="email" placeholder="username@email.com" required/>
            </div>

            <div class="inputContainer" id="ic1"> 
                        <div class="validation-error">
                           <?php
                                    session_start();
                                    $logged = Session::get('msg');
                                    echo "<h2> $logged </h2>";
                           ?>
                        </div>
            </div>

            <div class="inputContainer" id="ic2"> 
                <input type="submit" value="Reset Password" />
            </div>
         </form>
        

             


</div>


<?php include "userLogin-footer.php" ?>

<?php
unset($_SESSION["msg"]);
?>