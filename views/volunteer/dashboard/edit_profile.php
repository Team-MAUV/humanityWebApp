<?php $page = 'edit_profile';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Contact us</title>
    <!--  <link rel="stylesheet" type="text/css" href="style.css">   -->
      <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
      <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

  <!--  <link rel="stylesheet" href="<?= URL ?>public/css/com_dash_editprofile.css" /> -->
    </head>


<body>
    <div class="grid-container">
      <div id="breadcrum">  </div>
      <div class="container">
        <div class="contact-box">
          <div class="left" > </div>  
                <div class="right">
                    <h2>Edit Profile </h2>
                    <form action="run_edit_profile" method="POST" id="form">
                        <?php foreach ($data as $voldata) : ?>
                                <label for="name">Contact Number:</label>
                                <input type="text" class="field"  name="contact" id="contact" value="<?= $voldata['contact'] ?>" pattern ="(?=.*\d).{10}" required>
                                <label for="name">Address:</label>
                                <input type="text" class="field" name="address" id="address" value="<?= $voldata['address'] ?>" required>
                                <label for="password">Password:</label>
                                <input type="password" class="field" placeholder="password" name="pwd" id = "pwd" required>

                                <button type="submit " class="btn"  name="update" onclick="return validation();">Update</button>
                              
					            
                        <?php endforeach; ?>
                    </form>    
                    <form name="updpwdata" action="save_new_pw" method="POST" enctype="multipart/form-data" >	
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
                    <a href = "<?= URL?>volunteer/index"><button class="btn" type = "button">Back</button></a>           
                </div>
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
    </script>
<?php include "vol_dash_footer.php" ?>