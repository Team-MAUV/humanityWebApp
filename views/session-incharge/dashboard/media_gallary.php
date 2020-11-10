<?php $page = 'home';
include "staff_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">





<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?= URL ?>public/css/sess_dash_gallary.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<link href="css/font-awesome.min.css" rel="stylesheet"/>

    <script type="text/javascript" src="../../public/js/upload-img.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="<?= URL ?>public/css/sess_dash_imagesample.css" />
<title> Image </title>

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
     





</body>
</html>

</div>
</div>

<?php include "staff_footer.php" ?>