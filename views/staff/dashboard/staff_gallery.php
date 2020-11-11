<?php $page = 'home';
include "staff_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">


  <!DOCTYPE html>
<html>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>
<body>

<!-- Header -->
<div class="header">
  <h1> Image Grid</h1>
  <p> Tzu chi Organization Event image Gallary </p>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
   
    <a href="<?= URL ?>public/images/clean.jpg"> <img src="<?= URL ?>public/images/clean.jpg" style="width:100%" /> </a>
    <a href="<?= URL ?>public/images/discuss.jpg"> <img src="<?= URL ?>public/images/discuss.jpg" style="width:100%" /> </a>
    <a href="<?= URL ?>public/images/dengue.jpg"> <img src="<?= URL ?>public/images/dengue.jpg" style="width:100%" /> </a>
  </div>
  <div class="column">
  <a href="<?= URL ?>public/images/plant.jpg"> <img src="<?= URL ?>public/images/plant.jpg" style="width:100%" /> </a>
  <a href="<?= URL ?>public/images/clean.jpg"> <img src="<?= URL ?>public/images/clean.jpg" style="width:100%" /> </a>
  <a href="<?= URL ?>public/images/discuss.jpg"> <img src="<?= URL ?>public/images/discuss.jpg" style="width:100%" /> </a>
  </div>  
  <div class="column">
  <a href="<?= URL ?>public/images/plant.jpg"> <img src="<?= URL ?>public/images/plant.jpg" style="width:100%" /> </a>
    <a href="<?= URL ?>public/images/clean.jpg"> <img src="<?= URL ?>public/images/clean.jpg" style="width:100%" /> </a>
    <a href="<?= URL ?>public/images/dengue.jpg"> <img src="<?= URL ?>public/images/dengue.jpg" style="width:100%" /> </a>
  </div>
  <div class="column">
  <a href="<?= URL ?>public/images/clean.jpg"> <img src="<?= URL ?>public/images/clean.jpg" style="width:100%" /> </a>
    <a href="<?= URL ?>public/images/clean.jpg"> <img src="<?= URL ?>public/images/clean.jpg" style="width:100%" /> </a>
    <a href="<?= URL ?>public/images/clean.jpg"> <img src="<?= URL ?>public/images/clean.jpg" style="width:100%" /> </a>
  </div>
</div>

</body>
</html>

</div>
</div>
<?php include "staff_footer.php" ?>