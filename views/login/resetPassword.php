
   <?php 
$title = 'Reset Password';
$style = 'userLogin-passwordReset';
 include "userLogin-header.php"; ?>

<div class="create-pwForm"> 
<?php
$selector = $_GET["selector"];
$validator = $_GET["validator"];

	if(empty($selector) || empty($validator)){
		echo "Could not validate your request!";
	}else{
  	if(ctype_xdigit($selector) !== false && ctype_xdigit($selector) !== false){

?>

			<form action=" run_resetPassword" method="post">
			<input type="hidden" name="selector" value="<?php echo $selector ?>">
			<input type="hidden" name="validator" value="<?php echo $validator ?>">
			<input type="password" name="pwd" placeholder="Enter a new password...">
			<input type="password" name="pwd-repeat" placeholder="Repeat new password...">
			<button type="submit" name="reset-password-submit">Reset Password</button>

			</form>



		
<?php
 }
}
?>


</div>

<?php include "userLogin-footer.php" ?>