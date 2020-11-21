<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>donation Home </title>
    <link rel="stylesheet" href="<?= URL ?>public/css/donation_home_header.css" />
    <link rel="stylesheet" href="<?= URL ?>public/css/homepage_donation.css" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
  .column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #FFA500;
}
</style>
 
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
    

<div class="wrapper">
        

        <!-- LANDING PAGE -->

        <div class="landing">
            <div class="landingText" data-aos="fade-up" data-aos-duration="1000">
                <h1>Welcome to Tzuchi Donation Module <span style="color:#e0501b;font-size: 4vw">Spread Love & hope.</span> </h1>
                <h3> Your donations will make another person's life a miracle. <br>  Donate today and ignite the fire within!</h3>
                <div class="btn">
                    <a href="#">Register</a>
                </div>
            </div>
            <div class="landingImage" data-aos="fade-down" data-aos-duration="2000">
                <img src="<?= URL ?>public/images/bg.png" alt="">
            </div>
        </div>

        <!-- ABOUT SECTION -->

        <div class="about">
        <div class="img-slider">
      <div class="slide active">
        <img src="<?= URL ?>public/images/don1.jpg" alt="">
        <div class="info">
          <h2>Slide 01</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="slide">
        <img src="<?= URL ?>public/images/d.jpg" alt="">
        <div class="info">
          <h2>Slide 02</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="slide">
        <img src="<?= URL ?>public/images/don3.jpg" alt="">
        <div class="info">
          <h2>Slide 03</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="slide">
        <img src="4.jpg" alt="">
        <div class="info">
          <h2>Slide 04</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="slide">
        <img src="5.jpg" alt="">
        <div class="info">
          <h2>Slide 05</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
      </div>
    </div>

    <script type="text/javascript">
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        });
      });

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 10000);
      }
      repeater();
    }
    repeat();
    </script>

        </div>

        <!-- INFO SECTION -->

        <div class="infoSection">
        <div class="row">
  <div class="column">
    <div class="card">
      <h3>Blood Donation</h3>
      <p style="color: #B22222;">Give Blood </p>
      <p style="color: #B22222;">Save life </p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Non Profit donation </h3>
      <p style="color:#000080;" >Use PAYPAL</p>
      <p>Donate atleast RS1.00</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Donate Recycle Products</h3>
      <p style="color:#2E8B57;">Be a part of the solution! </p>
      <p style="color:#2E8B57;">Not a part of the pollution!</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Donate basic needs</h3>
      <p>Share your extras! </p>
      <p>Spread equality!</p>
    </div>
  </div>
</div>
<br> <br> <br> 
<h3 style="color:#D2691E;">
We are the Buddhist Tzu Chi foundation,
  an international humanitarian organization whose mission is to releive the suffering of those 
in need while creating a better world for all through compassion, love and hope.For 30 years, Tzu Chi, SriLanka 
has provided relief with compassion and love to those needing it most. 
From victims of hurricanes, wildfires and flooding to those who fall below the poverty line, our volunteers help provide relief 
that includes shelter, food, cash cards… and it all comes with our love and compassion with hope to build a better world.
Tzu Chi’s compassion transcends the boundaries of race, nation, language, color and religion. Combing social ministry with spiritual ministry,
u Chi spread the universal value of compassion, and bring the humanistic spirit heritage rooted in Chinese culture to its highest point. 
The current missions are called “The Four Great Missions”, which include charity, medical care, education and humanities. 
Moreover, Tzu Chi is also devoted to international disaster relief, bone marrow donation, community volunteering and environmental protection.
Together they are called the “Eight Dharma Seals”.</span>
</h2></div>
<div class="main">
 <center><h1>Recent Donation projects</h1></center> 
  <ul class="cards">
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="<?= URL ?>public/images/blood.jpg" alt="img></div>
        <div class="card_content">
          <h2 class="card_title">Blood Donation</h2>
          <p class="card_text">Visit Organiation and Donate on 20.12.2020 </p>
        
        </div>
      </div>
    </li>

   
   
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="<?= URL ?>public/images/covid.jfif" alt="img""></div>
        <div class="card_content">
          <h2 class="card_title">Corana Quarantine Donation</h2>
          <p class="card_text">Donate through Paypal! </p>
        
        </div>
      </div>
    </li>
  </ul>
</div>



     


        <!-- BANNER AND FOOTER -->

        <div class="banner">
       
        </div>

        <div class="footer">Powered by<h4>Humanity2020&copy;</div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
            AOS.init();
    </script>

</body>
</html>







