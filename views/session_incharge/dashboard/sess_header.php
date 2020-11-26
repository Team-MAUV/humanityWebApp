<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>header</title>
  <link rel="stylesheet" href="<?= URL ?>public/css/staff-layout_style.css" />

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
         
            <a href="<?= URL ?>Session_incharge/logout">Logout</a>

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
          <h5 style="background-color: blue;">Session Dashboard</h5>
        </div>
        <ul>
          <li class="<?php if ($page == 'home') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>session_incharge/index"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="<?php if ($page == 'media_upload') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>session_incharge/media_upload"><i class="fas fa-file-contract"></i> Media upload</a>
          </li>

         
          
          <li class="<?php if ($page == 'media_gallary') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>session_incharge/media_gallary"><i class="fas fa-file-contract"></i> Gallery</a>
          </li>
          
          <li class="<?php if ($page == 'marking_attendance') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>session_incharge/marking_attendance"><i class="fas fa-id-card-alt"></i> Marking attendance</a>
          </li>

          <li class="<?php if ($page == 'unconfirm_attendance') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>session_incharge/unconfirm_attendance"><i class="fas fa-id-card-alt"></i> unconfirm attendance</a>
          </li>
          
        
        

        </ul>
      </div>