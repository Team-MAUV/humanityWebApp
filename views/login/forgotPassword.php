
   <?php 
$title = 'Forgot Password';
$style = 'userLogin-forgotPassword';
include "userLogin-header.php"; ?>
  
  


<div class="center">
 <div class="head">
Reset Password</div>
<form action="run_check_email" method="post">
<label><strong>Enter Your Email Address:</strong></label>
  <input type="email" name="email" placeholder="username@email.com">
  <i class="far fa-envelope"></i>
  
  <input type="submit" value="Reset Password">
  
 </form>
</div>

<?php include "userLogin-footer.php" ?>


