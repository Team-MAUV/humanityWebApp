<?php $page = 'media_gallary';
include "sess_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">


    <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Media</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL ?>public/css/sess_dash_media.css" />
  </head>
  <body>

    <div class="gallery-section">
      <div class="inner-width">
        <h1> Gallery</h1>
        <div class="border"></div>
        <div class="gallery">

          <a href="<?= URL ?>public/images/plant.jpg"  class="image">
           
            <img src="<?= URL ?>public/images/plant.jpg" alt="img"/>
          </a>

          <a href="<?= URL ?>public/images/dengue.jpg"  class="image">
            <img src="<?= URL ?>public/images/dengue.jpg" alt="img"/>
          </a>

          <a href="<?= URL ?>public/images/discuss.jpg"  class="image">
            <img src="<?= URL ?>public/images/discuss.jpg" alt="img"/>
          </a>

          <a href="<?= URL ?>public/images/dengue.jpg"  class="image">
            <img src="<?= URL ?>public/images/dengue.jpg" alt="img"/>
          </a>

          <a href="<?= URL ?>public/images/plant.jpg"  class="image">
            <img src="<?= URL ?>public/images/plant.jpg" alt="img"/>
          </a>

          <a href="<?= URL ?>public/images/clean.jpg"  class="image">
            <img src="<?= URL ?>public/images/clean.jpg" alt="img"/>
          </a>

          <a href="<?= URL ?>public/images/plant.jpg"  class="image">
          
            <img src="<?= URL ?>public/images/plant.jpg" alt="img"/>
          </a>

          <a href="<?= URL ?>public/images/collect plastic.jpg" class="image">
            <img src="<?= URL ?>public/images/collect plastic.jpg" alt="img"/>
          </a>

        </div>
      </div>
    </div>


  <script>
    $(".gallery").magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery:{
        enabled: true
      }
    });
  </script>

  </body>


































</div>
</div>

<?php include "sess_footer.php" ?>
</html>
