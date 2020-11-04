<!DOCTYPE html>
<html>
<head>
	<title>Staff Login Form</title>
	<link rel="stylesheet" href="<?= URL ?>public/css/staff_login.css" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<img class="wave" src="<?= URL ?>public/images/sky.svg"/>
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
	
	<div class="container">
		<div class="img">
			<img src="<?= URL ?>public/images/bg.svg"/>
		</div>
		<div class="login-content">
			<form action="index.html">
				<img src="<?= URL ?>public/images/avat.svg"/>
				<h2 class="title">Welcome to Staff Login</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
	</div>
	<footer>
        <div class="footer">Powered by<h4>Humanity2020&copy;</div>
    </footer>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<?php
unset($_SESSION["error"]);
?>