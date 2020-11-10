

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>header</title>
  <link rel="stylesheet" href="http://localhost/humanity/public/css/staff-layout_style.css" />
  <link rel="stylesheet" href="<?= URL ?>public/css/com-dash-vol.css" />

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
            <a href="<?= URL ?>Staff/logout">Logout</a>

          </div>
        </div>
      </div>
    </header>


    <div class="body">
      <input type="checkbox" id="check">
      <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
      </label>

      <div class="sidebar">
        <div class="text">
          <h5 style="background-color: blue;">Staff Dashboard</h5>
        </div>
        <ul>
          <li class="<?php if ($page == 'home') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>staff/index"><i class="fas fa-home"></i> Home</a>
          </li>

          <li class="<?php if ($page == 'Market_Module') {
                        echo 'active';
                      } ?>">
            <a href="#" class="feat-btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Market Module
              <span class="fas fa-caret-down first"></span>
            </a>
            <ul class="feat-show">
              <li class="<?php if ($page == 'add_product') {
                            echo 'active';
                          } ?>"><a href="<?= URL ?>staff/add_product">Add product  </a></li>
              <li class="<?php if ($page == 'access_product') {
                            echo 'active';
                          } ?>"><a href="<?= URL ?>staff/access_product">Access product</a></li>
              
            </ul>
          </li>
          
          <li class="<?php if ($page == 'staff_report') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>staff/staff_report"><i class="fas fa-file-contract"></i> Reports</a>
          </li>
          <li class="<?php if ($page == 'requestleave') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>staff/requestleave"><i class="fas fa-id-card-alt"></i> Request Leave</a>
          </li>

          <li class="<?php if ($page == 'staff_gallery') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>Staff/staff_gallery"><i class="fas fa-photo-video"> </i> Media</a>
          </li>
          <li class="<?php if ($page == 'staff_notification') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>staff/staff_notification"><i class="fa fa-bell" aria-hidden="true"></i> Notification</a>
                    </li>
        

        </ul>
      </div>