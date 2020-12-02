
   <?php 
$title = 'Reset Password';
$style = 'userLogin-passwordReset';
 include "userLogin-header.php"; ?>

<div class="login"> 
<?php
$selector = $_GET["selector"];
$validator = $_GET["validator"];

	if(empty($selector) || empty($validator)){
		echo "Could not validate your request!";
	}else{
  	if(ctype_xdigit($selector) !== false && ctype_xdigit($selector) !== false){

?>
    <h1>Reset Your Password!</h1>
			<form id="form" action=" run_resetPassword" method="post">
			<input type="hidden" name="selector" value="<?php echo $selector ?>">
			<input type="hidden" name="validator" value="<?php echo $validator ?>">

			<div class="logformContainer">

			 <h3>Enter New Password:</h3>
			<div class="inputContainer"> 	<input type="password" name="pwd" id="pwd" placeholder="Enter a new password..."></div>
			
		
			<h3>Confirm Password:</h3>

			<div class="inputContainer"> 	<input type="password" name="pwdrepeat" id="pwdrepeat" placeholder="Repeat new password..."></div>
		
		
			<button type="submit" name="reset-password-submit">Reset Password</button>
			</div>
			</form>



		
<?php
 }
}
?>


</div>


<?php include "userLogin-footer.php" ?>


<script>
  $(document).ready(function () {
    $('#form').validate({
      rules: {
      
        pwd: {
          required: true,
          minlength: 2
        },
        pwdrepeat: {
          required: true,
          equalTo: "#pwd"
        }
      },
      messages: {
       
        pwd: {
          required: 'Please enter Password.',
          minlength: 'Password must be at least 8 characters long.',
        },
        pwdrepeat: {
          required: 'Please enter Confirm Password.',
          equalTo: 'Confirm Password do not match with Password.',
        }
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
</script>