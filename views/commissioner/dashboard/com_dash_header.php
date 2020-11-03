<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Simple Layouts</title>
  <link rel="stylesheet" href="<?= URL ?>public/css/com-layout_style.css" />
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
            <a href="<?= URL ?>Commissioner/logout">Logout</a>

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
          <h5>Commissioner Dashboard</h5>
        </div>
        <ul>
          <li class="<?php if ($page == 'home') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>Commissioner/index"><i class="fas fa-home"></i> Home</a>
          </li>

          <li class="<?php if ($page == 'Profiles') {
                        echo 'active';
                      } ?>">
            <a href="#" class="feat-btn"><i class="far fa-id-card"></i> Profiles
              <span class="fas fa-caret-down first"></span>
            </a>
            <ul class="feat-show">
              <li class="<?php if ($page == 'volunteer') {
                            echo 'active';
                          } ?>"><a href="<?= URL ?>Commissioner/volunteer">Volunteer</a></li>
              <li class="<?php if ($page == 'staff') {
                            echo 'active';
                          } ?>"><a href="<?= URL ?>Commissioner/staff">Staff</a></li>
              <li class="<?php if ($page == 'buyer') {
                            echo 'active';
                          } ?>"><a href="<?= URL ?>Commissioner/buyer">Buyer</a></li>
              <li class="<?php if ($page == 'donor') {
                            echo 'active';
                          } ?>"><a href="<?= URL ?>Commissioner/donor">Donor</a></li>
            </ul>
          </li>
          <li class="<?php if ($page == 'volunteerActivity') {
                        echo 'active';
                      } ?>">
            <a href="#" class="serv-btn"><i class="fas fa-praying-hands"></i> Volunteer Activity
              <span class="fas fa-caret-down second"></span>
            </a>
            <ul class="serv-show">
              <li class="<?php if ($page == 'newVolActivity') {
                            echo 'active';
                          } ?>"><a href="<?= URL ?>Commissioner/newVolActivity">New Activity</a></li>
              <li class="<?php if ($page == 'viewVolActivity') {
                            echo 'active';
                          } ?>"><a href="<?= URL ?>Commissioner/viewVolActivity">View Activity</a></li>
            </ul>
          </li>
          <li class="<?php if ($page == 'projectReports') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>Commissioner/projectReports"><i class="fas fa-file-contract"></i> Project Reports</a>
          </li>
          <li class="<?php if ($page == 'leaveRequests') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>Commissioner/leaveRequests"><i class="fas fa-id-card-alt"></i> Leave Requests</a>
          </li>
          <li class="<?php if ($page == 'sessionIncharge') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>Commissioner/sessionIncharge"><i class="fas fa-street-view"></i> Session In-charge</a>
          </li>
          <li class="<?php if ($page == 'beneficiaryCases') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>Commissioner/beneficiaryCases"><i class="fas fa-hands-helping"></i> Beneficiary Cases</a>
          </li>
          <li class="<?php if ($page == 'media') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>Commissioner/media"><i class="fas fa-photo-video"> </i> Media</a>
          </li>


        </ul>
      </div>