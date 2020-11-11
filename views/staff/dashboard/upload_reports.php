<?php $page = 'home';
include "staff_header.php"; ?>
<link rel="stylesheet" href="<?= URL ?>public/css/staff-layout_style.css" />

<div class="grid-container">



  <div id="breadcrum">



<!Doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Uploaded Reports</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/upload-reports.css">
    <script src="https://kit.fontawesome.com/c0d2632e91.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        body {
          font-family: Arial;
        }
        
        * {
          box-sizing: border-box;
        }
        
        form.example input[type=text] {
          padding: 10px;
          font-size: 17px;
          border: 1px solid grey;
          float: left;
          width: 80%;
          background: #f1f1f1;
        }
        
        form.example button {
          float: left;
          width: 20%;
          padding: 10px;
          background: #2196F3;
          color: white;
          font-size: 17px;
          border: 1px solid grey;
          border-left: none;
          cursor: pointer;
        }
        
        form.example button:hover {
          background: #0b7dda;
        }
        
        form.example::after {
          content: "";
          clear: both;
          display: table;
        }
        </style>
</head>


<body>
    <h1>Reports</h1>
    <button onclick="viewlist()" class="grid">
        <i class="fa fa-bars"></i> List
    </button>
    <button onclick="viewgrid()" class="grid">
        <i class="fa fa-th-large"></i> Grid
    </button> 
    <button onclick="myFunction()" class="grid">Date:</button> <p id="demo" style="color: black; "></p>
    <form class="example" action="" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
<br>       

    <div class="row">
        <div class="column">
            <h2>Blood Donation.pdf <button type="button" class="btn" onclick="remove()">Remove</button><button type=" button " class="btn " onclick="viewReport()">View Report</button></h2>

        </div>
        <div class="column">
            <h2>Annual Report.zip <button type="button" class="btn" onclick="remove()">Remove</button><button type=" button " class="btn " onclick="viewReport()">View Report</button></h2>

        </div>
    </div>
    <div class="row">
        <div class="column">
            <h2> Tree Planting.docx <button type="button" class="btn" onclick="remove()">Remove</button><button type=" button " class="btn " onclick="viewReport()">View Report</button></h2>

        </div>
        <div class="column">
            <h2>March_Report.pdf<button type="button" class="btn" onclick="remove()">Remove</button><button type=" button " class="btn " onclick="viewReport()">View Report</button></h2>

        </div>
    </div>
    <div class="row">
        <div class="column">
            <h2> April_Report.pdf <button type="button" class="btn" onclick="remove()">Remove</button><button type=" button " class="btn " onclick="viewReport()">View Report</button></h2>

        </div>
        <div class="column">
            <h2> CleaningCampaign.pdf <button type="button" class="btn" onclick="remove()">Remove</button><button type=" button " class="btn " onclick="viewReport()">View Report</button></h2>

        </div>
        
        
    </div>


    <script type="text/javascript" src="../../public/js/grid-list.js"></script>

    <script>
        function myFunction() {
          var x = document.getElementById("myDate").value;
          document.getElementById("demo").innerHTML = x;
        }
        </script>
        

</body>

</html>


<?php include "staff_footer.php" ?>