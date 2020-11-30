<!--<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tzu-chi-market</title>
        <link rel="stylesheet" href="<?= URL?>public/css/buy-pages.css" />
        
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet" />
        <script src="<?= URL ?>public/js/buyer.js"></script>
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
    
                <div class="log-sign" style="--i: 1.8s;">
    
                    <a href="<?= URL ?>index" class="back-btn" alt="Sun"><i class="fas fa-home"></i></a>
                </div>
    
            </div>
    
        </header> 



        <div class="container">
            <div class="side-panal">
                
               <div class="view-home" id="viewHome" style="display: block;">
                    <div class="next-bid">
                        <h4>Next bid session : </br> 2020.11.30</h4>
                    </div>
                    
                    <div class="profile">
                        <div class="pro-pic">
                            <img src="<?= URL?>public/images/avatar.png">
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
                        <div class="cart">
                            <a onclick="viewRecypts()">View Recepts</a>
                        </div>
                        <div class="log-out">
                            <a href="<?= URL?>">Log-out</a>
                        </div>

                        <div class="more-details">
                            <h4>Help & Suport</h4>
                            <a href="<?= URL?>">read more about us</a>
                        </div>
                    </div>
                    

               </div>
               <div class="view-recypt" id="viewRecypt" style="display: none;">
                   
                    <span onclick="closeRecypts()" class="close-btn">&times;</span>
                    <ul>
                        <li><a href="#"><img class="download-img" src="<?= URL?>public/images/down-arrow.png">2020-10-21-prd201002</a></li>
                        <li><a href="#"><img class="download-img" src="<?= URL?>public/images/down-arrow.png">2020-10-21-prd201002</a></li>
                        <li><a href="#"><img class="download-img" src="<?= URL?>public/images/down-arrow.png">2020-10-21-prd201002</a></li>
                    </ul>
                </div>
           </div>
           -->

           

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $page?></title>
  <link rel="stylesheet" href="<?= URL ?>public/css/buyer-pages.css" />
  <link rel="stylesheet" href="<?= URL ?>public/css/<?php echo $style ?>" />

</head>

<body>
  <div class="main-container">

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
            <a href="<?= URL ?>Buyer/logout">Logout</a>

          </div>
        </div>
      </div>
    </header>


    <div class="body">
    <a href="<?= URL ?>Buyer/index"></a>
      
        

        
      </div>