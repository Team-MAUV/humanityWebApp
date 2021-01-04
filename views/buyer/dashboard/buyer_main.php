<?php $page = 'home';
include "buyer_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">
  <!Doctype html>
<html>

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Staff Home</title>
    <link rel="stylesheet" href="<?= URL ?>public/css/buy-pages.css" />
    <link rel="stylesheet" href="<?= URL ?>public/css/buyer_dash_home.css" />
    <link rel="stylesheet" href="<?= URL ?>public/css/buyer_dash_index.css" />


    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>
   

    <div class="wrapper">
      <lav class="lav">
        <ul class="lav__list" role="menubar">
 
        </ul>
      </lav>
      <main class="main">
        <header class="header">
          <div class="header__wrapper">
         <h1 style="font-size:60px;">Welcome to market Module!</h1>
            <div class="profile">
              <button class="profile__button">
                <span class="profile__name"><?=$_SESSION['name']?></span>

                <img
                  class="profile__img"
                  src="<?= URL ?>public/images/3r1.png"
                  alt="Profile picture"
                  loading="lazy"
                />
              </button>
            </div>
          </div>
        </header>
        <section class="section">
          <header class="section__header">
            <h2 class="section__title">Satistics</h2>
            <a href="#" class="section__link"></a>
          </header>
          <ul class="team">
            <li class="team__item">
              <a class="team__link focus--box-shadow" href="#">
                <div class="team__header">
                 
                  <button
                    class="setting setting--absolute focus--box-shadow"
                    type="button"
                  >
                   
                      <path
                        d="m303.347 18.875c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                      <path
                        d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                      <path
                        d="m303.347 405.541c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                    </svg>
                  </button>
                </div>
                <div class="team__inform">
                  <p class="team__name"> Total bids: <?=$_SESSION['totalbids']?></p>
                  <p class="team__name"> Products Bid : 2</p>
                  <p class="team__name"> Bids won : 2</p>
                  
                </div>
              </a>
            </li>
            <li class="team__item">
              <a class="team__link focus--box-shadow" href="#">
                <div class="team__header">
              
                  <button
                    class="setting setting--absolute focus--box-shadow"
                    type="button"
                  >
                  
                      <path
                        d="m303.347 18.875c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                      <path
                        d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                      <path
                        d="m303.347 405.541c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                    </svg>
                  </button>
                </div>
                <div class="team__inform">
                <p class="team__name">    Products available now: </p>
                  <p class="team__name"> Recycled Glass </p>
                </div>
              </a>
            </li>
           
          </ul>
        </section>
        <section class="section">

        <div class="available"> 
           <h2>Available Products:</h2>
           <a href="<?= URL?>buyer/view_plastic"><button class="banner__button" type="button" >
          Recycled Plastic
            </button></a>  
            <a href="<?= URL?>buyer/view_glass"><button class="banner__button" type="button" >
           Recycled Glass
            </button></a>  
            <a href="<?= URL?>buyer/view_paper"><button class="banner__button" type="button" >
            Recycled Paper
            </button></a>
            <a href="<?= URL?>buyer/view_electronic"><button class="banner__button" type="button" >
          Recycled Electronics
            </button></a>
            <a href="<?= URL?>buyer/view_other"><button class="banner__button" type="button" >
           Other
            </button></a>
          
        </div>


          <header class="section__header">
            <h2 class="section__title">Last Bid won</h2>
            
          </header>
          <ul class="project">
            <li class="project__item">
              <a href="#" class="project__link focus--box-shadow">
                <div class="project__wrapper">
                  <div class="project__element project__icon">
                <img  src="<?= URL ?>public/images/3r2.png" alt="img"/>
                  </div>
                  <div class="project__element project__inform">
                    <span class="project__inform-name"
                      >Mr.S.M.Haris Romio</span
                    >
                  </div>
                  <div class="project__element project__photo">
                   <p> 5000.00</p>
                  </div>
                  <div class="project__element project__date">
                    <time class="date" datetime="2020-05-05T10:00:00"
                      >05 May, 2020</time
                    >
                  </div>
                  <div class="project__element project__status">
                    <span class="status status--published">Plastic</span>
                  </div>
                  <div class="project__element project__setting">
                    
                  </div>
                </div>
              </a>
            </li>
            <li class="project__item">
              <a href="#" class="project__link focus--box-shadow">
                <div class="project__wrapper">
                  <div class="project__element project__icon">
                  <img  src="<?= URL ?>public/images/3r2.png" alt="img"/>

                  </div>
                  <div class="project__element project__inform">
                    <span class="project__inform-name"> Ms.Selomi Ganesarasa</span>
                  </div>
                  <div class="project__element project__photo">
                  <p> 7895.00</p>
                  </div>
                  <div class="project__element project__date">
                    <time class="date" datetime="2020-05-05T10:00:00"
                      >13 February, 2020</time
                    >
                  </div>
                  <div class="project__element project__status">
                    <span class="status status--published">Glass</span>
                  </div>
                  <div class="project__element project__setting">
                  
                  </div>
                </div>
              </a>
            </li>
            <li class="project__item">
              <a href="#" class="project__link focus--box-shadow">
                <div class="project__wrapper">
                  <div class="project__element project__icon">
                  <img  src="<?= URL ?>public/images/3r2.png" alt="img"/>
    
                  </div>
                  <div class="project__element project__inform">
                    <span class="project__inform-name"
                      >Mr.N.M.Torendo</span
                    >
                  </div>
                  <div class="project__element project__photo">
                  <p> 6980.00</p>
                  </div>
                  <div class="project__element project__date">
                    <time class="date" datetime="2020-05-05T10:00:00"
                      >01 February, 2020</time
                    >
                  </div>
                  <div class="project__element project__status">
                    <span class="status status--published">Papers</span>
                  </div>
                  <div class="project__element project__setting">
                   
                  </div>
                </div>
              </a>
            </li>
          </ul>
          
    
        </section>
      </main>
      <aside class="aside">
        <section class="section">
          <div class="aside__control">
          
           
          </div>
          <div class="profile-main">
            <button
              class="profile-main__setting focus--box-shadow"
              type="button"
            >
              <img
                class="profile-main__photo"
                src="<?= URL ?>public/images/3r1.png" alt="img"
                alt="Profile photo"
              />
            </button>
            <h1 class="profile-main__name"><?=$_SESSION['name']?></h1>
            <h1 class="profile-main__name"><?=$_SESSION['id']?></h1>
<h4> Next session : 15.12.2020 10.00 </h4>
          </div>
          <ul class="statistics">
           
          <li class="statistics__entry">
              <a class="statistics__entry-description" ></a
              ><span class="statistics__entry-quantity"> </span>
            </li>
            <li class="statistics__entry">
              <a class="statistics__entry-description" >Won bid</a
              ><span class="statistics__entry-quantity">2</span>
            </li>
            <li class="statistics__entry">
              <a class="statistics__entry-description" href="#">You pay</a
              ><span class="statistics__entry-quantity">Rs 4800.00 </span>
            </li>
          </ul>
          <div class="banner">
            <h3 class="banner__title">Go Green!</h3>
            <p class="banner__description">Thank you for your contribution!</p>
           
            <p class="banner__description"></p>
          </div>
        
        </section>
      </aside>
    </div>
  </body>
</html>



























  <?php include "buyer_footer.php" ?>