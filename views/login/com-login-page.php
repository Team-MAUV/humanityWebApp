<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Commissioner Login</title>
    <link rel="stylesheet" href="<?= URL ?>public/css/com-login-page-style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <img class="bgimage" src="" />
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

                <a href="<?= URL ?>index" class="back-btn">Home Page</a>
            </div>

        </div>



    </header>
    <div class="container">
        <div class="img">
            <img src="<?= URL ?>public/images/undraw_progress_indicator_p84k.svg" />
        </div>
        <div class="login-container">
            <form action="#" id="form" class="form">
                <img class="avatar" src="<?= URL ?>public/images/Commissioner.png" />
                <h2>Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input class="input" type="text" name="username" />
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>
                    </div>
                </div>

                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input class="input" type="password" name="password" />
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>
                    </div>
                </div>
                <div class="forgotpw"><a href="#">Forgot Password</a></div>

                <input type="submit" class="btn" value="Login" />
            </form>
        </div>
    </div>
    <footer>
        <div class="footer">Powered by<h4>Humanity2020&copy;</div>
    </footer>
    <script type="text/javascript" src="<?= URL ?>public/js/main.js"></script>
</body>

</html>