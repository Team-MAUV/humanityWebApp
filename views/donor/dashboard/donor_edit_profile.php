
<?php $page = 'edit_profile';
$title = 'edit_profile';
$style = 'don_dash_editprofile.css';
include "don_dash_header.php";
 ?>
?>

<div class="grid-container">



  <div id="breadcrum">

  <!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="contact-box">
      		  
      		<div class="right">
				<h2>Edit Profile Details</h2>
				<?php foreach ($data as $dt) : ?>
			
				<form name="updusrdata" action="save_new_profile_details" method="POST" enctype="multipart/form-data" >	
					
					<label for="name">Username:</label>
					<input type="text" class="field" placeholder="User Name" name="username" id="username" value="<?= $dt['username'] ?>" required>
					<label for="name">Contact Number:</label>
					<input type="text" class="field" placeholder="Phone" name="contact" id="contact" value="<?= $dt['contact'] ?>"
					pattern ="(?=.*\d).{10}" title = "Contact number must contain ten digits" required>
					<label for="name">Address:</label>
					<textarea placeholder="Address" class="field" name="address" id="address" required><?= $dt['address'] ?></textarea>
					<label for="password">Password:</label>
					<input type="password" class="field" placeholder="old password" name="pwd" id = "pwd" required>
					<button onclick = "return checkpw();" class="submit" value="Submit">Update</button>
					
				</form>
				<?php endforeach; ?>
				<p><?= $msg ?></p>
				
				<button class="btn">Change Username / Password</button>
				<h2>Change Username Password</h2>
				
				<form name="updpwdata" action="save_new_pw_details" method="POST" enctype="multipart/form-data" >	
					<label for="password">Old Password:</label>
					<input type="password" class="field" placeholder="old password" name="oldpwd" id="oldpwd" title="Type your password here" required>
					<label for="newpw">New Password:</label>
					<input type="password" class="field" placeholder="new password" name="newpwd" id="newpwd" 
					pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
              		title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
					<label for="newpw">Re Enter New Password:</label>
					<input type="password" class="field" placeholder="new password" name="rnewpwd" id="rnewpwd" 
					pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                  	title="Re - Type your password here"  required>
					<button onclick = "return checkdata();" class="submit" value="Submit">Submit</button>
				
				</form>
				<a href = "<?= URL?>buyer/index"><button class="abc" type = "button">Back</button></a>
				

			</div>
			
		</div>
	</div>
	<script>
	function checkpw(){
		var password = document.getElementById("pwd").value; 
		var username = document.getElementById("username").value; 
		var contact = document.getElementById("contact").value; 
		var address = document.getElementById("address").value; 
		
		if( password == "" || username == "" || contact == "" ||address == ""){
			alert("Fields cannot be empty!!!");
			return false;
		}else{
			var conf = confirm("conformation");
			if(conf == false){
			alert("aborted!!!");
			return false;
				
			}
		}
		
	}
	function checkdata(){
		var oldpwd = document.getElementById("oldpwd").value;
		var newpwd = document.getElementById("newpwd").value; 
		var rnewpwd = document.getElementById("rnewpwd").value;
		if(oldpwd != "" && newpwd != "" && rnewpwd != ""){
			if(oldpwd == newpwd){
				alert("New Passwords cannot be the same! Please Check Again");
				return false;
			}else{
				if(newpwd != rnewpwd){
					alert("New Passwords Does Not Match! Please Check Again");
					return false;
				}
			}
			
		}
	}		
		
	</script>
</body>
</html>


  </div>

</div>



</div>
<?php include "don_dash_footer.php" ?>