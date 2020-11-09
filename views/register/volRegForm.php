<?php $title = 'Volunteer Registration';
$style = 'register-volRegForm.css';
include "regForm-header.php"; ?>




<div class="login">
  <h1>Welcome to Volunteer Registration</h1>
  <div id="error"></div>
  <form action="register/run_vol_register" method="POST" id="form">

    <label for="fullname">
      <i class="fas fa-user"></i>
    </label>
    <input type="text" name="name" placeholder="Full Name" id="name" required>

    <label for="nic">
      <i class="fa fa-id-card "></i>
    </label>
    <input type="text" name="nic" placeholder="National Id Number" id="nic" required>

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
    <label for="dob">
      <i class="fa fa-calendar "></i>
    </label>

    <input  name="dob" placeholder="Date of Birth" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="dob" required>
    <div class="validation-error">
    </div>
    <label for="contact">
      <i class="fa fa-info-circle "></i>
    </label>
    <input type="text" name="prev_vol_exp" placeholder="Previous Volunteer Experience" id="prev_vol_exp">
    <div class="validation-error">
    </div>
    <label for="gender">
      <div class="i " style="align-items: left; justify-content: flex-start; ">
        &nbsp<i class="fa fa-male fa-2x "> </i>
      </div>
    </label>
    <select name="gender" id="gender">

      <option value="male ">Male</option>
      <option value="female ">Female</option>
      <option value="other ">Other</option>
    </select>
    <div class="validation-error ">
    </div>

    <button class="btn btnreg " type="submit " name="register " onclick="validation();">
      <p style="font-weight: 800;"> Submit</p>
    </button>





  </form>
  
  
</div>
<script>
function validation() {
    
    var nic = document.getElementById("nic").value;
    var email = document.getElementById("email").value;
   
    var contact = document.getElementById("contact").value;
 
    var at = email.indexOf("@");
    var dot = email.lastIndexOf(".");

    if ((contact.length != 10) || (isNaN(contact))) {
        swal({
            title: "Registration Faied!",
            text: "Please enter a valid Phone Number!",

            icon: "error",

        });

    } else {
        if (at < 1 || dot < at + 2 || dot + 2 > email.length) {
            swal({
                title: "Registration Failed",
                text: "Please enter a valid Email!",

                icon: "error",

            });
        } else {

            swal({
                title: "Registration Successful!",
                text: "Please wait for the confirmation email, Thank you!",
                icon: "success",

            });

        }
    }

}
</script>
<?php include "regForm-footer.php"; ?>