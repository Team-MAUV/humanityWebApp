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

    <input type="date" name="dob" placeholder="Date of Birth" id="dob" required>
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
    <select name="gender">

      <option value="male ">Male</option>
      <option value="female ">Female</option>
      <option value="other ">Other</option>
    </select>
    <div class="validation-error ">
    </div>

    <button class="btn btnreg " type="submit " name="register ">
      <p style="font-weight: 800;"> Submit</p>
    </button>





  </form>
</div>

<?php include "regForm-footer.php"; ?>