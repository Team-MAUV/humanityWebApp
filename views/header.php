<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="public/css/default.css"/> -->
    <link rel="stylesheet" href="<?= URL ?>public/css/index-header.css" />
    <link rel="stylesheet" href="<?= URL ?>public/css/index-homebody.css" />

    <link rel="stylesheet" href="<?= URL ?>public/css/index-footer.css" />
    <title>Humanity</title>
    <link rel="stylesheet" href="css/index-header_style.css" />
    <script src="https://kit.fontawesome.com/c0d2632e91.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>

    <?php Session::init(); ?>
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
            <div class="dropdown">
                <button class="dropbtn">Admin

                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="<?= URL ?>login">Commissioner</a>
                    <a href="#">Staff</a>

                </div>
            </div>
        </div>
    </header>
    <div id="content">