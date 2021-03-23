<?php $page = 'update_product';
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
  background-color: #6495ED;
  padding: 20px;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
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


<?php foreach ($data as $dt) : ?>
<h2>Update Product : <?= $dt['product_id'] ?></h2>

<div class="container">
  <form name="addprd" action="save_update_product?pid=<?= $dt['id'] ?>" method="POST" enctype="multipart/form-data" >
  <h3>Change details of the product</h3>
    <div class="row">
      <div class="col-25">
        <label for="name">Product Name:</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" value ="<?= $dt['name'] ?> " >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Category">Category: <?= $dt['type'] ?></label>
      </div>
      <div class="col-75">
        
        
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Description:</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="description" placeholder="Write something about product..." style="height:150px"><?= $dt['description'] ?></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="volume">Quantity (kg):</label>
      </div>
      <div class="col-75">
        <input type="number" id="volume" name="volume" value = "<?= $dt['volume'] ?>">
      </div>
    </div>

    <h3>Change product Image</h3>
    <img src="<?= URL ?>public/<?= $dt['product_path'] ?>" alt="img"class="shoe show" />

    <div class="row">
        <div class="col-25"> 
        <label for="image">Choose new Image</label>
      <input type="file" name="product_image" accept="image/*" id="proimage">
        
        </div>
    </div>
    <h3>Change bidding details of the product</h3>
    <div class="row">
      <div class="col-25">
        <label for="volume">Set New Starting Bid (Rs):</label>
      </div>
      <div class="col-75">
        <input type="number" id="startingbid" name="starting_bid" value = "<?= $dt['starting_bid'] ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Bidding Date">Set New Bidding Start Time:</label>
      </div>
      <div class="col-75">
        <input type="datetime-local" id="BiddingStartDate" name="bidding_start_date" value = "<?= str_replace(' ', 'T', $dt['date']) ?>" REQUIRED>

      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Bidding Date">Set New Bidding End Time:</label>
      </div>
      <div class="col-75">
        <input type="datetime-local" id="BiddingEndDate" name="bidding_end_date" value ="<?= str_replace(' ', 'T', $dt['bid_end_time']) ?>" REQUIRED>

      </div>
    </div>
    
    
    

   

    
    <div class="row">
  <br>   </div>
    <button class="submit" value="Submit" onclick="return addvalidprd();">
    <p style="font-weight: 800;"> Submit</p>
            </button>
  </form>
  <?php endforeach; ?> 
  <p><?= $msg ?></p>

</div>
<script>
function addvalidprd(){
    
    var prdname = document.getElementById("name").value; 
    var sttme = document.getElementById("BiddingStartDate").value;
    var edtme = document.getElementById("BiddingEndDate").value;
    var stbid = document.getElementById("startingbid").value;
    var qtty = document.getElementById("volume").value;
    var dsp = document.getElementById("subject").value;
    var d = new Date();
    var dsec = d.getTime();
    var stsec = Date.parse(sttme);
    var edsec = Date.parse(edtme);
    
    
    if(prdname == ""){
     alert("Please enter product name.");
     return false;
    }else{
      if(qtty <= 0){
        alert("Invalid Quantty");
        return false;
      }else{
        if(stbid <= 0){
          alert("invalid starting bid");
          return false;
        }else{
          if(dsp == ""){
            alert("Add discription");
            return false;
          }else{
            if(sttme == ""){
              alert("Add Bid session start time");
              return false;
            }else{
              if(edtme == ""){
                alert("Add Bid session end time");
                return false;
              }else{
                if(edsec < stsec){
                  alert("Bid end time is invalid");
                  return false;
                }else{
                  if(stsec < dsec){
                    alert("Bid shoud start in future!!!");
                    return false;
                  }
                }
              }
            }
          }
        }
      }
    }

    
   
}
</script>

</body>
</html>

  </div>
</div>

<?php include "staff_footer.php" ?>