
<?php $page = 'home';
include "vol_dash_header.php"; ?>

<link rel="stylesheet" href="<?= URL ?>public/css/vol-home.css" />
<link rel="stylesheet" href="<?= URL ?>public/css/vol_dash_home.css" />

<div class="grid-container">



  <div id="breadcrum">
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Portfolio dashboard</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
   
  </head>
  <body>
    <div class="wrapper">
     
      <main class="main">
        <header class="header">
          <div class="header__wrapper">
           <h2>Welcome to Volunteer portal</h2>
            <div class="profile">
              <button class="profile__button">
                <span class="profile__name"><?= $_SESSION['name'] ?></span>
                <img
                  class="profile__img"
                  src="<?= URL ?>public/images/img_lady.png"
                  alt="Profile picture"
                  loading="lazy"
                />
              </button>
            </div>
          </div>
        </header>
        <section class="section">
          <header class="section__header">
            <h2 class="section__title">You are doing great Job!</h2>
            <!-- have to think about link-->
           
          </header>
          <ul class="team">
            <li class="team__item">
              <a class="team__link focus--box-shadow" href="#">
                <div class="team__header">
                  
                 <h3>Level:</h3>
                </div>
                <div class="team__inform">
                  <p class="team__name"> <?= $_SESSION['level'] ?></p>
                 <input type="submit"class="btn" value="Apply for Staff">
 
                </div>
              </a>
            </li>
            <li class="team__item">
              <a class="team__link focus--box-shadow" href="#">
                <div class="team__header">
                <h3>Points :</h3>
                </div>
                <div class="team__inform">
                  <p class="team__name">  <?= $_SESSION['vol_points'] ?></p>
                

                </div>
              </a>
            </li>
            
        </section>
        <section class="section">
          <header class="section__header">
            <h2 class="section__title">Participated recent  Activities </h2>
            <div class="section__control">
          
            </div>
          </header>
          <ul class="project">
            <li class="project__item">
              <a href="#" class="project__link focus--box-shadow">
                <div class="project__wrapper">
                  <div class="project__element project__icon">
                  <img src="<?= URL ?>public/images/blood.jpg" alt="img"/>
                  </div>
                  <div class="project__element project__inform">
                    <span class="project__inform-name"
                      >Blood Donation </span
                    >
                  </div>
                
                  <div class="project__element project__date">
                    <time class="date" datetime="2020-05-05T10:00:00"
                      >05 May, 2020</time
                    >
                  </div>
                  <div class="project__element project__status">
                    <span class="status status--published">aaa</span>
                  </div>
                  <div class="project__element project__setting">
                    <button
                      class="setting setting--rotate focus--box-shadow"
                      type="button"
                    >
                      <svg
                        enable-background="new 0 0 515.555 515.555"
                        height="512"
                        viewBox="0 0 515.555 515.555"
                        width="512"
                        xmlns="http://www.w3.org/2000/svg"
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
                </div>
              </a>
            </li>
            <li class="project__item">
              <a href="#" class="project__link focus--box-shadow">
                <div class="project__wrapper">
                  <div class="project__element project__icon">
                  <img src="<?= URL ?>public/images/plant.jpg" alt="img"/>
                  </div>
                  <div class="project__element project__inform">
                    <span class="project__inform-name">Tree planting Campaign</span>
                  </div>
                 
                  <div class="project__element project__date">
                    <time class="date" datetime="2020-05-05T10:00:00"
                      >13 February, 2020</time
                    >
                  </div>
                  <div class="project__element project__status">
                    <span class="status status--published">aaa</span>
                  </div>
                  <div class="project__element project__setting">
                    <button
                      class="setting setting--rotate focus--box-shadow"
                      type="button"
                    >
                      <svg
                        enable-background="new 0 0 515.555 515.555"
                        height="512"
                        viewBox="0 0 515.555 515.555"
                        width="512"
                        xmlns="http://www.w3.org/2000/svg"
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
                </div>
              </a>
            </li>
            <li class="project__item">
              <a href="#" class="project__link focus--box-shadow">
                <div class="project__wrapper">
                  <div class="project__element project__icon">
                  <img src="<?= URL ?>public/images/recy1.jpg" alt="img"/>
                  </div>
                  <div class="project__element project__inform">
                    <span class="project__inform-name">Collect Recycle products</span>
                  </div>
                 
                  <div class="project__element project__date">
                    <time class="date" datetime="2020-05-05T10:00:00"
                      >01 February, 2020</time
                    >
                  </div>
                  <div class="project__element project__status">
                    <span class="status status--published">aaa</span>
                  </div>
                  <div class="project__element project__setting">
                    <button
                      class="setting setting--rotate focus--box-shadow"
                      type="button"
                    >
                      <svg
                        enable-background="new 0 0 515.555 515.555"
                        height="512"
                        viewBox="0 0 515.555 515.555"
                        width="512"
                        xmlns="http://www.w3.org/2000/svg"
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
                </div>
              </a>
            </li>
          </ul>
        </section>
      </main>
      <aside class="aside">
        <section class="section">
          <div class="aside__control">
            <button
              class="aside__button focus--box-shadow"
              type="button"
              aria-label="Close profile settings"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                role="presentation"
              >
                <path
                  d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"
                />
              </svg>
            </button>
            <button
              class="aside__button aside__button--notification focus--box-shadow"
              type="button"
              aria-label="You have new feedback"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                role="presentation"
              >
                <path
                  d="M18,13.18V10a6,6,0,0,0-5-5.91V3a1,1,0,0,0-2,0V4.09A6,6,0,0,0,6,10v3.18A3,3,0,0,0,4,16v2a1,1,0,0,0,1,1H8.14a4,4,0,0,0,7.72,0H19a1,1,0,0,0,1-1V16A3,3,0,0,0,18,13.18ZM8,10a4,4,0,0,1,8,0v3H8Zm4,10a2,2,0,0,1-1.72-1h3.44A2,2,0,0,1,12,20Zm6-3H6V16a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z"
                />
              </svg>
            </button>
          </div>
          <div class="profile-main">
            <button
              class="profile-main__setting focus--box-shadow"
              type="button"
            >
              <img
                class="profile-main__photo"
                src="<?= URL ?>public/images/img_lady.png" 
                alt="Profile photo"
              />
            </button>
            <h1 class="profile-main__name"<?= $_SESSION['name'] ?>></h1>
          </div>
          <ul class="statistics">
            <li class="statistics__entry">
              <a class="statistics__entry-description" >ID:</a
              ><span class="statistics__entry-quantity">  <?= $_SESSION['id'] ?></span>
            </li>
            <li class="statistics__entry">
              <a class="statistics__entry-description" href="#">Activities</a
              ><span class="statistics__entry-quantity">3</span>
            </li>
            <li class="statistics__entry">
              <a class="statistics__entry-description" href="#">Leaderboard</a
              ><span class="statistics__entry-quantity">12</span>
            </li>
          </ul>
          <div class="banner">
            <h3 class="banner__title">Your Badges</h3>
            <img src="<?= URL ?>public/images/badge1.jpg" alt="img"/ width=70px height=70px>
            <p class="banner__description">Earn More!</p>
        
          </div>
        </section>
      </aside>
    </div>
  </body>
</html>

    </div>

</div>



</div>
</html>











<?php include "vol_dash_footer.php" ?>
