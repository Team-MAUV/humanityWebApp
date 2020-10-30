<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Simple Layouts</title>
  <link rel="stylesheet" href="<?= URL ?>public/css/layout_style.css" />

  <script src="https://kit.fontawesome.com/c0d2632e91.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  <div class="main-container">


    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>

    <div class="sidebar">
      <div class="text">
        <h5>Commissioner Dashboard</h5>
      </div>
      <ul>
        <li class="active">
          <a href="#"><i class="fas fa-home"></i> Home</a>
        </li>

        <li>
          <a href="#" class="feat-btn"><i class="far fa-id-card"></i> Profiles
            <span class="fas fa-caret-down first"></span>
          </a>
          <ul class="feat-show">
            <li><a href="#">Volunteer</a></li>
            <li><a href="#">Staff</a></li>
            <li><a href="#">Buyer</a></li>
            <li><a href="#">Donor</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="serv-btn"><i class="fas fa-praying-hands"></i> Volunteer Activity
            <span class="fas fa-caret-down second"></span>
          </a>
          <ul class="serv-show">
            <li><a href="#">+ New</a></li>
            <li><a href="#">View Activity</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><i class="fas fa-file-contract"></i> Project Reports</a>
        </li>
        <li>
          <a href="#"><i class="fas fa-id-card-alt"></i> Leave Requests</a>
        </li>
        <li>
          <a href="#"><i class="fas fa-street-view"></i> Session In-charge</a>
        </li>
        <li>
          <a href="#"><i class="fas fa-hands-helping"></i> Beneficiary Cases</a>
        </li>
        <li>
          <a href="#"><i class="fas fa-photo-video"> </i> Media</a>
        </li>


      </ul>
    </div>


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
            <a href="#">Edit Profile</a>
            <a href="<?= URL ?>dashboard/logout">Logout</a>

          </div>
        </div>
      </div>
    </header>


    <div class="grid-container">



      <div id="breadcrum">Home></div>
      <main>Main </main>

      <div id="content1">C ontent1</div>
      <div id="content2">Content2</div>
      <div id="content3">Content3</div>





      <footer>
        <div class="footer">Powered by<h4>Humanity2020&copy;</div>
      </footer>

    </div>
  </div>
  <script>
    $(".feat-btn").click(function() {
      $("div ul .feat-show").toggleClass("show");
      $("div ul .first").toggleClass("rotate");
    });
    $(".serv-btn").click(function() {
      $("div ul .serv-show").toggleClass("show1");
      $("div ul .second").toggleClass("rotate");
    });
    $("div ul li").click(function() {
      $(this).addClass("active").siblings().removeClass("active");
    });
  </script>


</body>

</html>