<?php $title = 'Donor Registration';
$style = 'register-donRegForm.css';
include "regForm-header.php"; ?>

   


   
    <div class="login" style="background-image: url('http://localhost/humanity/public/images/regbg22.jpg') ;">
        <h1>Welcome to Donor Registration</h1>
        <div id="error"></div>
        <form action="run_don_register" method="POST" id="form2" >

            <label for="fullname">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="name" placeholder="Full Name" id="name" required>

            <label for="nic">
                <i class="fa fa-id-card "></i>
            </label>
            <input type="text" name="nic" placeholder="National Id Number" id="nic" pattern="^(?:19|20)?\d{2}(?:[0-35-8]\d\d(?<!(?:000|500|36[7-9]|3[7-9]\d|86[7-9]|8[7-9]\d)))\d{4}(?:[vVxX])$"required>

            <label for="emailaddress">
                <i class="fas fa-envelope"></i>
            </label>
            <input type="text" name="email" placeholder="Email Address" id="email" required>
            <div class="validation-error">
            </div>

            <label for="permanentaddress">
                <i class="fa fa-address-book  "></i>
            </label>
            <input type="text" name="address" placeholder="Permanent Address" id="address" required>
            <div class="validation-error">
            </div>
            <label for="contact">
                <i class="fa fa-phone-square "></i>
            </label>
            <input type="text" name="contact" placeholder="Contact Number" id="contact" required>
            <div class="validation-error">
            </div>
            <label for="username">
                <i class="fa fa-address-book  "></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <div class="validation-error">
            </div>

            <label for="password">
                <i class="fa fa-address-book  "></i>
            </label>
            <input type="password" name="password" placeholder="Your Password" id="password" 
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
            <div class="validation-error">
            </div>
            <label for="repassword">
                <i class="fa fa-address-book  "></i>
            </label>
            <input type="password" name="repassword" placeholder="Retype your Password" id="repassword" 
                 pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                  title="Re - Type your password here" required>
            <div class="validation-error">
            </div>
            

            <button class="btn btnreg " type="submit " name="register " onclick="return validation();">
                <p style="font-weight: 800;"> Submit</p>
            </button>

        </form>
        <div class="messages"> <?= $msg ?></div> 
    </div>

    <script>

function validation() {
    var name = document.getElementById("name").value;
    var nic = document.getElementById("nic").value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var repassword =document.getElementById("repassword").value;
    var contact = document.getElementById("contact").value;
    var at = email.indexOf("@");
    var dot = email.lastIndexOf(".");
    var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if((name==null ||name=="")||(nic==null ||nic=="")||(email==null ||email=="")||(address==null ||address=="")||(contact==null ||contact=="")||(username==null ||username=="")||(password==null ||password=="")||(repassword==null ||repassword=="")){
      swal({
            title: "Registration Failed!",
            text: "Please fill the required fields",

            icon: "error",

        });
    }
    else{
      if ((contact.length != 10) || (isNaN(contact))) {
        swal({
            title: "Registration Failed!",
            text: "Please enter a valid Phone Number!",

            icon: "error",

        });
        return false;
      } else {
        if (at < 1 || dot < at + 2 || dot + 2 > email.length) {
            swal({
                title: "Registration Failed",
                text: "Please enter a valid Email!",

                icon: "error",

            });
            return false;
        } else {
          
           
              if(nic.match(/^(?:19|20)?\d{2}(?:[0-35-8]\d\d(?<!(?:000|500|36[7-9]|3[7-9]\d|86[7-9]|8[7-9]\d)))\d{4}(?:[vVxX])$/)){
                  
                if(password.match(passw)){
                  if(password != repassword){
                      swal({
                      
                      title: "Registration Failed",
                      text: "Passwords do not match",

                      icon: "error",

                    });
                    return false;
                  }else{
                    swal({
                    title: "Registration Successful!",
                    text: "Thank you for joining us!",
                    icon: "success",

                    });
                    
                  }
                }else{
                  swal({
                    title: "Registration Failed",
                    text: "Invalid password pattern",
                    icon: "error",

                  });
                  return false;
                }
                
              }
              else {
                swal({
                    title: "Registration Failed",
                    text: "Invalid format in NIC",
                    icon: "error",

                });
                return false;
              }
            

          
        } 
    }
  }
}

</script>
    <?php include "regForm-footer.php"; ?>