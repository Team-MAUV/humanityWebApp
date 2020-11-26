<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tzu-chi-market</title>
        <link rel="stylesheet" href="<?= URL ?>public/css/donor-index.css" />
        <script src="<?= URL ?>public/js/donor.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
    </head>

    <body>
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
                    <button class="dropbtn">Hi, <?= $_SESSION['name'] ?>
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="#">Edit Profile</a>
                        <a href="<?= URL ?>">Logout</a>
                    </div>
                </div>    
            </div>
     
        </header> 



        <div class="container">

            <div class="side-panal">
                             
                <div class="profile">
                    <div class="pro-pic">
                        <img src="<?= URL ?>public/images/avatar.png">
                    </div>
                    <div class="pro-details">
                        <ul>
                            <li>A.B.C.Perera</li>
                            <li>No-12 , Main Rd, Colombo 04</li>
                            <li>0715428963</li>
                            <li>abc@mail.com</li>
                        </ul>
                    </div>
                    <div class="pro-update">
                        <a href="<?= URL?>">Update details</a>
                    </div>
                   
                    <div class="log-out">
                        <a href="<?= URL?>">Log-out</a>
                    </div>

                    <div class="more-details">
                        <h4>Help & Suport</h4>
                        <a href="<?= URL?>">read more about us</a>
                    </div>
                </div>
                <div class="invitations" style="display: none;">
                    invitations
                </div>
            </div>