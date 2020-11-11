<?php $page = 'home';
include "staff_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">
  
<body>

<h2>Add Product</h2>


<div class="container">
  <form action="#">
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
        <input type="text" id="Category" name="Category">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="volume">Quantity:</label>
      </div>
      <div class="col-75">
        <input type="number" id="volume" name="volume">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Bidding Date">Bidding Date:</label>
      </div>
      <div class="col-75">
        <input type="datetime-local" id="Bidding Date" name="Bidding Date">

      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="End Date">End Date:</label>
      </div>
      <div class="col-75">
        <input type="datetime-local" id="End Date" name="End Date">

      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Description:</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something about product..." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
        <div class="col-25"> 
        <input type="file" id="myFile" name="filename">
        
        </div>
    </div>

   

    <div class="row">
        <input type="reset" value="Reset">
    
    </div>
    <div class="row">
  <br>  <input type="submit" value="Submit"> </div>
  </form>
</div>

</body>
</html>

  </div>
</div>

<?php include "staff_footer.php" ?>