<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>market</title>
        <link rel="stylesheet" href="<?=URL?>public/css/market.css" />
        <link rel="stylesheet" href="<?=URL?>public/css/buyer-profile.css">
         <link rel="stylesheet" href="<?=URL?>public/css/m-header.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= URL ?>public/css/buy-layout_style.css" />



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
            <a href="<?= URL ?>Volunteer/logout">Logout</a>

          </div>
        </div>
      </div>
    </header>


   

