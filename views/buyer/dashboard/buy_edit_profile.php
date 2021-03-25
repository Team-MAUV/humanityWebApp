
<?php $page = 'product';
$title = 'Product';
$style = 'buy-pages.css';
$jsFile = 'buyer.js';
include "buyer_header.php"; ?>

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
				<h2>Edit Profile Details</h2>
				<?php foreach ($data as $dt) : ?>
			
				<form name="updusrdata" action="save_new_profile_details" method="POST" enctype="multipart/form-data" >	
					
					<label for="name">Username:</label>
					<input type="text" class="field" placeholder="User Name" name="username" value="<?= $dt['username'] ?>">
					<label for="name">Contact Number:</label>
					<input type="text" class="field" placeholder="Phone" name="contact" value="<?= $dt['contact'] ?>">
					<label for="name">Address:</label>
					<textarea placeholder="Address" class="field" name="address" ><?= $dt['address'] ?></textarea>
					<label for="password">Password:</label>
					<input type="password" class="field" placeholder="old password" name="pwd" id = "pwd">
					<button onclick = "return checkpw();" class="submit" value="Submit">Update</button>
					
				</form>
				<?php endforeach; ?>
				<p><?= $msg ?></p>
				
				<button class="btn">Change Username / Password</button>
				<h2>Change Username Password</h2>
				
				<form name="updpwdata" action="save_new_pw_details" method="POST" enctype="multipart/form-data" >	
					<label for="password">Old Password:</label>
					<input type="password" class="field" placeholder="old password" name="oldpwd" id="oldpwd" >
					<label for="newpw">New Password:</label>
					<input type="password" class="field" placeholder="new password" name="newpwd" id="newpwd" >
					<label for="newpw">Re Enter New Password:</label>
					<input type="password" class="field" placeholder="new password" name="rnewpwd" id="rnewpwd" >
					<button onclick = "return checkdata();" class="submit" value="Submit">Submit</button>
				
				</form>
				<a href = "<?= URL?>buyer/index"><button class="abc" type = "button">Back</button></a>
				

			</div>
			
		</div>
	</div>
	<script>
	function checkpw(){
		var password = document.getElementById("pwd").value; 
		if(password == ""){
			alert("Please enter your password!");
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
		if(oldpwd == ""){
			alert("Enter Your Password!");
			return false;
		}else{
			if(newpwd == ""){
				alert("Enter Your New Password!");
				return false;
			}else{
				if(rnewpwd == ""){
					alert("Re-Enter Your New Password!");
					return false;
				}else{
					if(rnewpwd == newpwd){
						var conf = confirm("conformation");
            			if(conf == false){
               				 alert("aborted!!!");
							return false;
            			}
					}else{
						alert("New Passwords Does Not Match! Please Check Again");
						return false;
					}
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
<?php include "buyer_footer.php" ?>