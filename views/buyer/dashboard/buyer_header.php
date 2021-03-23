
           

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
            <a href="<?= URL ?>Buyer/edit_profile?id=<?= $_SESSION['idp'] ?>">Edit Profile</a>
            <a href="<?= URL ?>Buyer/logout">Logout</a>

          </div>
        </div>
      </div>
    </header>


    <div class="body">
    <a href="<?= URL ?>Buyer/index"></a>
      
        

        
      </div>