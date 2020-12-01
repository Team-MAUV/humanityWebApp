
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
                  src="<?= URL ?>public/images/man.png"
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
                  <svg height="100" width="72">
  <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="green" fill="50%"/>
                  </svg>

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
               
               <p>25</p>
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
                  <p>30</p>
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
                  <p>35</p>
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

          <div class="notification_wrap">  
          <div class="notification_icon">
			<i class="fas fa-bell"></i><span style="color:red">4</span>
		</div>
    <div class="dropdown">
    
			<div class="notify_item">
				<div class="notify_img">
        <img src="<?= URL ?>public/images/badge1.jpg" alt="img" style="width: 50px"/>

				</div>
				<div class="notify_info">
					<p>Approved as Permanent Volunteer<span>Commissioner</span></p>
					<span class="notify_time">10 minutes ago</span>
				</div>
			</div>
			<div class="notify_item">
				<div class="notify_img">
          <img src="<?= URL ?>public/images/badge1.jpg" alt="img" style="width: 50px"/>

				</div>
				<div class="notify_info">
					<p>Activity added<span>Blood donation</span></p>
					<span class="notify_time">55 minutes ago</span>
				</div>
			</div>
			<div class="notify_item">
				<div class="notify_img">
          
          <img src="<?= URL ?>public/images/badge1.jpg" alt="img" style="width: 50px"/>

				</div>
				<div class="notify_info">
					<p>Your points reached<span>Congratulation!</span></p>
					<span class="notify_time">2 day ago</span>
				</div>
			</div>
			<div class="notify_item">
				<div class="notify_img">
          <img src="<?= URL ?>public/images/badge1.jpg" alt="img" style="width: 50px"/>
				</div>
				<div class="notify_info">
					<p>Message<span>Private</span></p>
					<span class="notify_time">6 days ago</span>
				</div>
			</div>
		</div>
          </div>



          </div>
          <div class="profile-main">
            <button
              class="profile-main__setting focus--box-shadow"
              type="button"
            >
              <img
                class="profile-main__photo"
                src="<?= URL ?>public/images/man.png" 
                alt="Profile photo"
              />
            </button>
            <h1 class="profile-main__name"><?= $_SESSION['name'] ?></h1>
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
    <script>
		$(document).ready(function(){
			$(".notification_icon .fa-bell").click(function(){
				$(".dropdown").toggleClass("active");
			})
		});
	</script>
  </body>


    </div>

</div>



</div>
</html>











<?php include "vol_dash_footer.php" ?>
