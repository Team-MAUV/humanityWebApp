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
    <img class="bgimage" src="<?= URL ?>public/images/undraw_progress_indicator_p84k.svg" />

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
    <div class="login">
        <h1>Welcome to Commissioner Login</h1>
        <img class="avatar" src="<?= URL ?>public/images/Commissioner.png" />
        <form action="login/run_com" method="post">

            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <div class="validation-error">
                <?php
                session_start();

                if (isset($_SESSION["error"])) {
                    $error = $_SESSION["error"];
                    echo "<h1>$error</h1>";
                }
                ?>
            </div>
            <div class="forgotpw"><a href="#">Forgot Password?</a></div>
            <input type="submit" class="btn" value="Login" />




        </form>
    </div>

    <footer>
        <div class="footer">Powered by<h4>Humanity2020&copy;</div>
    </footer>
</body>

</html>
<?php
unset($_SESSION["error"]);
?>