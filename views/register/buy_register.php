<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buyer Registration</title>
    <link rel="stylesheet" href="http://localhost/humanity/public/css/don-register-page-style.css" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>
    <img class="bgimage" src="<?= URL ?>public/images/bgreg1.svg">
    <header>
    <div class="nav-bar">
      <div class="logo-container">


        <div class="logo"></div>
      </div>

      <div class="title-name">

        <h3 class="logo-name">
          <div class="tzu-logo"></div>
          Tzu Chi Foundation | <span> Hambantota</span>
        </h3>
      </div>

      <div class="log-sign" style="--i: 1.8s;">

        <a href="<?= URL ?>index" class="back-btn" alt="Sun"><i class="fas fa-home"></i></a>
      </div>

        </div>

    </header>
    <div class="login" style="background-image: url('<?= URL ?>public/images/bgreg1.svg') ;">
        <h1>Welcome to Buyer Registration</h1>
        <div id="error"></div>
        <form action="buy_register\buy_register" method="POST" id="form3">

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


            <label for="username">
                <i class="fa fa-address-book  "></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <div class="validation-error">
            </div>


            <label for="password">
                <i class="fa fa-address-book  "></i>
            </label>
            <input type="text" name="password" placeholder="Password" id="password" required>
            <div class="validation-error">
            </div>


            <label for="gender">
                <div class="i " style="align-items: left; justify-content: flex-start; ">
                    &nbsp<i class="fa fa-male fa-2x "> </i>
                    </div>
                </label>
            <select name="gender"> 

                <option value="male ">Male</option> 
                <option value="female " >Female</option> 
                <option value="other ">Other</option> 
              </select>
            <div class="validation-error ">
            </div>

            <button class="btn btnreg " type="submit " name="register "><p style="font-weight: 800;"> Submit</p></button>





        </form>
    </div>

    <footer>
    <div class="footer">Powered by<h4>Humanity2020&copy;</h4></div>
  </footer>
    <script type="text/javascript" src="../../public/js/error.js"></script>


</body>

</html>