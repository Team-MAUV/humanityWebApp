
   <?php 
$title = 'Forgot Password';
$style = 'userLogin-forgotPassword.css';
include "userLogin-header.php"; ?>

<div class="login">
<form action="run_check_email" method="post"  ><br /><br />
<label><strong>Enter Your Email Address:</strong></label><br /><br />
<input type="email" name="email" placeholder="username@email.com" />
<br /><br />
<input type="submit" value="Reset Password"/>
</form>


</div>


<?php include "userLogin-footer.php" ?>