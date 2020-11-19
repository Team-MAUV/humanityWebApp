<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>donation Home </title>
    <link rel="stylesheet" href="<?= URL ?>public/css/donation_home_header.css" />
    <link rel="stylesheet" href="<?= URL ?>public/css/homepage_donation.css" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    


    <style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  overflow: scroll;
}

/* Header/logo Title */
.head {
  padding: 80px;
  text-align: center;
  background: #EC460C;
  color: white;
}

/* Increase the font size of the heading */
.head h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color:lightsalmon;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
  align-items: center;
  justify-content: center;
  background: #262626;
}
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 400px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Footer */
#more {display: none;}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */


/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
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
    <div class="head">
  <h1>Welcome to Tzu-chi Donation module </h1>
  <p> Your donations will make another person's life a miracle.</p>
</div>

<div class="navbar">
<marquee behavior="scroll" direction="left">Joing us today and be a great community service!</marquee>

</div>

<div class="side">
  <ul>
  <li><a href="#"><i class="fab fa-facebook-f"> </i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
<li><a href="#"><i class="fab fa-youtube"></i></a></li>
</ul>
</div>

<div class="row">
  <div class="column" style="background-color:orange">
    <h2>Who We are? </h2>
    <p>We are the Buddhist Tzu Chi foundation,
  an international humanitarian organization whose mission is to releive the suffering of those 
in need while creating a better world for all through compassion, love and hope.For 30 years, Tzu Chi, USA has provided relief with compassion and 
love to those needing it most. From victims of hurricanes, wildfires and flooding to those who fall below the poverty line, our volunteers help provide relief 
that includes shelter, food, cash cards… and it all comes with our love and compassion with hope to build a better world.Tzu Chi’s compassion transcends the 
boundaries of race, nation, language, color and religion. Combing social ministry with spiritual ministry, Tzu Chi spread the universal value of compassion, 
and bring the humanistic spirit heritage rooted in Chinese culture to its highest point. The current missions are called “The Four Great Missions”, 
which include charity, medical care, education and humanities. Moreover, Tzu Chi is also devoted to international disaster relief, bone marrow donation, 
community volunteering and environmental protection.
 Together they are called the “Eight Dharma Seals”.Support prosperity and love for all.<span id="dots">...</span><span id="more">
Your generous donation will help Tzu Chi provide emergency relief when disaster strikes, distribute food to ease hunger,
 offer medical care to those who can’t afford it, support students, and more. Being able to help others is a true blessing,
  and giving can become a way of life once you discover the joy of improving someone’s situation or bringing hope to replace despair.
   Giving on a regular basis ignites the compassion we all have within us, allowing us to pass on that torch to the people we meet each and every day. 
   Together, we’re unstoppable in our power to ease suffering and change the world for the better. </span> <button onclick="myFunction()" id="myBtn">Read more</button>
Donate today and ignite the fire within!</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>
</div>














<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>