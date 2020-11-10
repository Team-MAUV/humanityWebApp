<?php $page = 'home';
include "staff_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<link href="css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> Image </title>
<style>
    body{
    margin:0px;
    height:100vh;
    width: 100vw;
    background: rgb(163, 163, 233);
}

.
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


        <div class="container">
            <h1 style="margin-top:70px;"> Image gallery </h1>
          
            <div id="jLightroom" class="jlr">
<a href="<?= URL ?>public/images/discuss.jpg" data-lightbox="lb1" class="jlr_item"><img src="<?= URL ?>public/images/discuss.jpg" class="jlr_img"/> </a>
<a href="<?= URL ?>public/images/discuss.jpg" data-lightbox="lb1" class="jlr_item"><img src="<?= URL ?>public/images/discuss.jpg" class="jlr_img"/> </a>
<a href="<?= URL ?>public/images/plant.jpg" data-lightbox="lb1" class="jlr_item"><img src="<?= URL ?>public/images/plant.jpg" class="jlr_img"/> </a>
<a href="<?= URL ?>public/images/student.jpg" data-lightbox="lb1" class="jlr_item"><img src="<?= URL ?>public/images/student.jpg" class="jlr_img"/> </a>
<a href="<?= URL ?>public/images/dengue.jpg" data-lightbox="lb1" class="jlr_item"><img src="<?= URL ?>public/images/dengue.jpg" class="jlr_img"/> </a>

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
</body>
</html>
</div>
</div>
<?php include "staff_footer.php" ?>