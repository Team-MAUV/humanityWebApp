<?php $page = 'media_gallary';
include "sess_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">

<!--
<style>
    .jlr{
        font-size: 0;
    }
    .jlr .jlr_item{
        font-size: 1rem;
        display: inline-block;
        box-sizing: border-box;
        padding: 6px;
    }
    .jlr img.jlr_img{
        height:200px;
        opacity: 0;
    }
    .jlr img.jlr_loaded {
         -webkit-transition: opacity 1s ease-in;
        -moz-transition: opacity 1s ease-in;
        -o-transition: opacity 1s ease-in;
        -ms-transition: opacity 1s ease-in;
        transition: opacity 1s ease-in;
        opacity: 1;
     }
    </style>

</head>
<body>
 <center> 
<h2>Image Upload </h2></center> 

<div class="row">
    <div class="column">
        <form action="#">
        <img src="<?= URL ?>public/images/form.png" alt="img" width="200px" height="150px"/>
         <br>
            <label for="event_Id">Event_Id: </label>
          <br>  <input type="text" id="eId" name="eId"><br><br>
        
            <label for="event_name">EventName: </label>
            <br>   <input type="text" id="ename" name="ename"><br><br>

  <input type="submit" value="Submit"> <br>   <br>  <br> 
           
            </form>
            <button class="btn"><i class="fa fa-upload"></i> Upload </button>
    </div>
    <div class="column">
        <div class="container">
            <h1 style="margin-top:70px;"> Image gallery </h1>
          
            <div id="jLightroom" class="jlr">
            <img src="<?= URL ?>public/images/abc.jpg" class="jlr_img"/>
<button class="btn"><i class="fa fa-trash"></i> Clear </button>
<a href="<?= URL ?>public/images/abc.jpg" data-lightbox="lb1" class="jlr_item"> <img src="<?= URL ?>public/images/abc.jpg" class="jlr_img"/> </a><br>
<button class="btn"><i class="fa fa-trash"></i> Clear </button>
<a href="<?= URL ?>public/images/abc.jpg" data-lightbox="lb1" class="jlr_item"> <img src="<?= URL ?>public/images/abc.jpg" class="jlr_img"/> </a><br>
<button class="btn"><i class="fa fa-trash"></i> Clear </button>
<a href="<?= URL ?>public/images/abc.jpg" data-lightbox="lb1" class="jlr_item"> <img src="<?= URL ?>public/images/abc.jpg" class="jlr_img"/> </a><br>
<button class="btn"><i class="fa fa-trash"></i> Clear </button>
<a href="<?= URL ?>public/images/abc.jpg" data-lightbox="lb1" class="jlr_item"> <img src="<?= URL ?>public/images/abc.jpg" class="jlr_img"/> </a><br>

  </div>
      </div>
      </div>
       
    </div>
  
  
  <script type="text/javascript" src="../../public/js//jquery.min.js"></script>
      <script type="text/javascript" src="../../public/js/imagesloaded.pkgd.min.js"></script>
      <script type="text/javascript" src="../../public/js/lightbox.min.js"></script>
      <script type="text/javascript" src="../../public/js/jquery.lightroom.js"></script>

  <script type="text/javascript">
      $("#jLightroom").lightroom({
          image_container_selector: ".jlr_item",
          img_selector: "img.jlr_img",
          img_class_loaded: "jlr_loaded",
          img_space: 5,
          img_mode: 'min',
          init_callback: function(elem){$(elem).removeClass("gray_out")}
      }).init();
  </script>
     
    -->

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
