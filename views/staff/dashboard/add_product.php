<?php $page = 'add_product';
include "staff_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">
  <!DOCTYPE html>
<html>
<head> <title> Add Product </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
body{
  overflow: hidden;
}
input[type=text], select, textarea ,input[type=number],input[type=datetime-local]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit],input[type=reset]  {
  background-color: #050458;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
input[type=file]{
    
    padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
input[type=submit]:hover {
  background-color: #1506a0;
}
input[type=reset]:hover {
  background-color: #1506a0;
} 
.container {
  border-radius: 5px;
  background-color: #4d5bd8;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit],input[type=reset] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<h2>Add Product</h2>


<div class="container">
  <form action="run_add_product" method="POST" enctype="multipart/form-data" >
    <div class="row">
      <div class="col-25">
        <label for="name">Product Name:</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Category">Category:</label>
      </div>
      <div class="col-75">
        <input type="text" id="category" name="category">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="volume">Quantity (kg):</label>
      </div>
      <div class="col-75">
        <input type="number" id="volume" name="volume">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="volume">Starting Bid (Rs):</label>
      </div>
      <div class="col-75">
        <input type="number" id="startingbid" name="starting_bid">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Bidding Date">Bidding Date:</label>
      </div>
      <div class="col-75">
        <input type="datetime-local" id="Bidding Date" name="bidding_date">

      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="subject">Description:</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="description" placeholder="Write something about product..." style="height:150px"></textarea>
      </div>
    </div>
    <div class="row">
        <div class="col-25"> 
        <label for="image">Choose Image</label>
      <input type="file" name="product_image" accept="image/*" id="proimage">
        
        </div>
    </div>

   

    <div class="row">
        <input type="reset" value="Reset">
    
    </div>
    <div class="row">
  <br>  <input type="submit" value="Submit"> </div>
  </form>
  <p><?= $msg ?></p>

</div>

</body>
</html>

  </div>
</div>

<?php include "staff_footer.php" ?>