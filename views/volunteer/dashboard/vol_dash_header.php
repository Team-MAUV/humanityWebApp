<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Volunteer</title>
  <link rel="stylesheet" href="<?= URL ?>public/css/vol-layout_style.css" />



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
            <a href="<?= URL ?>Volunteer/edit_profile">Edit Profile</a>
            <a href="<?= URL ?>Volunteer/logout">Logout</a>

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
          <h5>Volunteer Dashboard</h5>
        </div>
        <ul>
          <li class="<?php if ($page == 'home') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>Volunteer/index"><i class="fas fa-home"></i> Home</a>
          </li>


          <li class="<?php if ($page == 'viewevent') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>Volunteer/volviewevent" class="serv-btn"><i class="fas fa-praying-hands"></i> Volunteer Activity

            </a>

          </li>
          <li class="<?php if ($page == 'addnewbene') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>Volunteer/voladdbene"><i class="fas fa-file-contract"></i> Add New Beneficiary</a>
          </li>

          <li class="<?php if ($page == 'volleaderboard') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>Volunteer/volleaderboard"><i class="fa fa-trophy" ></i>Leaderboard</a>
          </li>
          <li class="<?php if ($page == 'volpartcipate') {
                        echo 'active';
                      } ?>">
            <a href="<?= URL ?>Volunteer/volpartcipate"><i class="fa fa-star-half-o"></i>Partcipated Activities</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</body>

</html>