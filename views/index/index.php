<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Humanity</title>

  <link rel="stylesheet" href="<?= URL ?>public/css/index-landingPage.css" />
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


              <div class="slideshow-container">

                <div class="mySlides fade">
                  <div class="numbertext">1 / 4</div>
                  <img src="<?=URL?>\public\images\img2.png" style="width:100%">
                  <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">2 / 4</div>
                  <img src="<?=URL?>\public\images\img4.png" style="width:100%">
                  <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">3 / 4</div>
                  <img src="<?=URL?>\public\images\img1.png" style="width:100%">
                  <div class="text">Caption Three</div>
                </div>

                
                <div class="mySlides fade">
                  <div class="numbertext">3 / 4</div>
                  <img src="<?=URL?>\public\images\img3.png" style="width:100%">
                  <div class="text">Caption Three</div>
                </div>

              </div>

              <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
              </div>

<!-- </div> -->



  <div id="myNav" class="overlay"><button class="explorebtn" onclick="scrollWin()">Explore More</a></button></div>


  <div class="btn-container">
      <div class="btnTop" id="btnv"> <a href="<?= URL ?>login">Volunteer Platform</a></div>
      <div class="btnTop" id="btnd"><a href="<?= URL ?>login">Donor Platform</a></div>
      <div class="btnTop" id="btnm"><a href="<?= URL ?>login">TzuChi Market</a></div>
  </div>
  <div class="platform-container">
  
    <div class="pf v">
      
      <div class="colimg"><img src="<?=URL?>\public\images\vol.png"></div>
      <div class="content">
      
      <h3>Volunteering with Tzu-Chi Organization provides you the benefits of helping our people who are in Sri Lanka. You will be rewarded with valuable certificates which add colours to your life. Join us today!</h3>
      </div>
      <div class="btn btnv"><a href="<?= URL ?>homePage\volunteering">Join Us!</a></div>
    </div>

    
    <div class="pf d">
      
      <div class="colimg"><img src="<?=URL?>\public\images\don.png"></div>
      <div class="content">
      <h3>Your donations will make another person's life a miracle. Contribute to this great communtiy service with us. Be a symbol of hope for those who are waiting. Joing us today and be a great community service!</h3>
      </div>
      <div class="btn btnd"><a href="<?= URL ?>homePage\index">Join Us!</a></div>
    </div>

    <div class="pf m">
    
      <div class="colimg"><img src="<?=URL?>\public\images\tzu.png"></div>
      <div class="content">
      <h3> Tzu-Chi Market sells various recycling products and many other products which are valuable for everyone.Visit the place to buy something valuable for you while helping us. Quickly Grab your product!</h3>
      </div>
      <div class="btn btnm"><a href="<?= URL ?>homePage\market">Join Us!</a></div>
    </div>
  </div>














  <div class="footer">Powered by<h4>Humanity2020&copy;</div>





  <script src="<?= URL ?>public/js/index.js"></script>
</body>



<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}

function scrollWin() {
  window.scrollBy(0, 640);
}
</script>
</html>