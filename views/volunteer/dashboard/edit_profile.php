<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

<link rel="stylesheet" href="<?= URL ?>public/css/com_dash_editprofile.css" />
</head>
<?php $page = 'edit_profile';
include "vol_dash_header.php"; ?>

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
                    <?php foreach ($data2 as $voldata2) : ?>
                <input type="text" class="field" name="password" id="password" value="<?= $voldata2['password']?>">
                <input type="text" class="field"  name="repassword" id="repassword" value="<?= $voldata2['password']?>">
				<input type="email" class="field"  name="email" id="email" value="<?= $voldata['email'] ?>">
        <input type="text" class="field"  name="contact" id="contact" value="<?= $voldata['contact'] ?>">
				<input type="text" class="field" name="address" id="address" value="<?= $voldata['address'] ?>">
                <button type="submit " class="btn"  name="update" onclick="validation();">Update</button>
                <?php endforeach; ?>
                <?php endforeach; ?>
                </form>
               
			</div>
		</div>
    </div>
  </div>

<script>
function validation() {
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;
    var contact = document.getElementById("contact").value;
    var password = document.getElementById("password").value;
    var repassword =document.getElementById("repassword").value;
    
    var at = email.indexOf("@");
    var dot = email.lastIndexOf(".");
    if((email==null ||email=="")||(address==null ||address=="")||(contact==null ||contact=="")(password==null ||password=="")||(repassword==null ||repassword=="")){
      swal({
            title: "Update Failed!",
            text: "Please fill the required fields",

            icon: "error",

        });
    }
else{
    if ((contact.length != 10) || (isNaN(contact))) {
        swal({
            title: "Update Failed!",
            text: "Please enter a valid Phone Number!",

            icon: "error",

        });

    } else {
        if (at < 1 || dot < at + 2 || dot + 2 > email.length) {
            swal({
                title: "Update Failed!",
                text: "Please enter a valid Email!",

                icon: "error",

            });
        } else {
          if (password!=repassword){
            swal({
              
              title: "Update Failed!",
              text: "Passwords do not match",

              icon: "error",

          });
          }
          else {
            if(nic.match(/^(?:19|20)?\d{2}(?:[0-35-8]\d\d(?<!(?:000|500|36[7-9]|3[7-9]\d|86[7-9]|8[7-9]\d)))\d{4}(?:[vVxX])$/)){
                swal({
                title: "Update Successfull!",
                text: "Thank you !",
                icon: "success",

            });
            }
          else {
            swal({
                title:"Update Failed!",
                text: "Invalid format in NIC",
                icon: "error",

            });
        }
    }
    }
  }
}
}
</script>
  <?php include "vol_dash_footer.php" ?>