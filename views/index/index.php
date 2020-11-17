<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Humanity</title>

  <link rel="stylesheet" href="<?= URL ?>public/css/index_style.css" />
  <script src="https://kit.fontawesome.com/c0d2632e91.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>



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
      <button class="dropbtn"><i class="fas fa-users-cog"></i>
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="<?= URL ?>login">Commissioner</a>
        <a href="<?= URL ?>login">Staff</a>

      </div>
    </div>
  </div>

  <div class="carousel">
  <div class="slides">
    
    <img src="<?=URL?>\public\images\car1.png" style="width:100%">
    
  </div>
  <div class="slides">
    
    <img src="<?=URL?>\public\images\containerbg.png" style="width:100%">
    
  </div>
  <div class="slides">
   
    <img src="<?=URL?>\public\images\city.jpg" style="width:100%">
    
  </div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>



  <div id="myNav" class="overlay">blabla</div>




  <div class="platform-container">

    <div class="pf v">
      <div class="btn btnv"> <a href="<?= URL ?>login">Volunteer Platform</a></div>
      <div class="colimg1"></div>
      <div class="content">
      
      Volunteering with Tzu-Chi Organization provides you the benefits of helping our people who are in Sri Lanka. You will be rewarded with valuable certificates which add colours to your life. Join us today!
      </div>
      <div class="btn btnv"><a href="<?= URL ?>register">Register</a></div>
    </div>
    <div class="pf d">
      <div class="btn btnd"><a href="<?= URL ?>login">Donor Platform</a></div>
      <div class="colimg2"></div>
      <div class="content">
      Your donations will make another person's life a miracle. Contribute to this great communtiy service with us. Be a symbol of hope for those who are waiting. Joing us today and be a great community service!
      </div>
      <div class="btn btnd"><a href="<?= URL ?>homePage">Register</a></div>
    </div>
    <div class="pf m">
      <div class="btn btnm"><a href="<?= URL ?>login">TzuChi Market</a></div>
      <div class="colimg3"></div>
      <div class="content">
      Tzu-Chi Market sells various recycling products and many other products which are valuable for everyone.Visit the place to buy something valuable for you while helping us. Quickly Grab your product!
      </div>
      <div class="btn btnm"><a href="<?= URL ?>Buyer">Register</a></div>
    </div>
  </div>














  <div class="footer">Powered by<h4>Humanity2020&copy;</div>





  <script src="<?= URL ?>public/js/index.js"></script>
</body>

</html>