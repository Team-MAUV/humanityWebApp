<?php $page = 'edit_profile';
$title = 'Edit profile';
$style = 'com_dash_editprofile.css';
include "com-dash-header.php"; ?>


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
      			<div class="left" > </div>  
      			<div class="right">
					<h2>Edit Profile </h2>
					<form action="run_edit_profile" method="POST" id="form">
							<?php foreach ($data as $comdata) : ?>
									<label for="name">Contact Number:</label>
									<input type="text" class="field"  name="contact" id="contact" value="<?= $comdata['contact'] ?>" pattern ="(?=.*\d).{10}" required>
									<label for="name">Address:</label>
									<input type="textareaa" class="field" name="address" id="address" value="<?= $comdata['address'] ?>" required>
									<label for="password">Password:</label>
									<input type="password" class="field" placeholder="password" name="pwd" id = "pwd" required>

									<button type="submit " class="btn"  name="update" onclick="return validation();">Update</button>
								
									
							<?php endforeach; ?>
						</form>  
					<h2>Change Password</h2>  
					<form name="updpwdata" action="change_password" method="POST" enctype="multipart/form-data" >	
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
						<button onclick = "return checkdata();" class="btn" value="Submit">Submit</button>
					
					</form> 
					<a href = "<?= URL?>volunteer/index"><button class="btn" type = "button">Back</button></a> 



				
				</div>
		</div>
	</div>


	<script>
       function validation(){
		var password = document.getElementById("pwd").value;  
		var contact = document.getElementById("contact").value; 
		var address = document.getElementById("address").value; 
		
		if( password == "" || contact == "" ||address == ""){
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
  <?php include "com-dash-footer.php" ?>