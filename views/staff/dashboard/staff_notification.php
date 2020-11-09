<?php $page = 'home';
include "staff_header.php"; ?>
<link rel="stylesheet" href="<?= URL ?>public/css/staff-layout_style.css" />

<div class="grid-container">



  <div id="breadcrum">





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notification</title>
    <link rel="stylesheet" href="<?= URL ?>public/css/staff_dash_notify.css" />


	<style>
		.alert {
		  padding: 20px;
		  background-color: #d3180b;
		  color: white;
		  opacity: 1;
		  transition: opacity 0.6s;
		  margin-bottom: 15px;
		}
		
		.alert.success {background-color: #2dcf33;}
		.alert.info {background-color: #e247f0;}
		.alert.warning {background-color: #f0e10ce3;}
		
		.closebtn {
		  margin-left: 15px;
		  color: white;
		  font-weight: bold;
		  float: right;
		  font-size: 22px;
		  line-height: 20px;
		  cursor: pointer;
		  transition: 0.3s;
		}
		
		.closebtn:hover {
		  color: black;
		}
		</style>
		
</head>
<body>
	<nav>
		<div class="log"> Your Notifications </div>
		
        <div class="icon" onclick="toggleNotifi()">
        <img src="<?= URL ?>public/images/bell.png" alt=""/>
			 <span>4</span>
		</div>  </nav>
		


		<div class="alert info">
			<span class="closebtn">&times;</span>  
			<div class="notifi-item">    <img src="<?= URL ?>public/images/donate.png" alt="img"/>
			<div class="text">
			   <h4>Donation</h4>
			   <p>There is a donation campaign on 5th November 2020 at public library Hambantota</p>
			</div> 
		  </div>
		</div>
		  <div class="alert warning">
			<span class="closebtn">&times;</span>  
			<div class="notifi-item">
            <img src="<?= URL ?>public/images/letter.png" alt="img"/>
				<div class="text">
				   <h4>Leave request reply</h4>
				   <p>Approve your leave request on 27th December 2020</p>
			    </div> 
			</div>
		  </div>
		  
		  <div class="alert success">
			<span class="closebtn">&times;</span>  
			<div class="notifi-item">
            <img src="<?= URL ?>public/images/img_lady.png" alt="img"/>
			
				<div class="text">
				   <h4>MS.Helen; St.28</h4>
				   <p>Send a message </p>
			    </div> 
			</div>
		  </div>
		  
		  <div class="alert">
			<span class="closebtn">&times;</span>  
			<div class="notifi-item">
            <img src="<?= URL ?>public/images/img_avatar.png" alt="img"/>
			
				<div class="text">
				   <h4>Commissioner</h4>
				   <p> Check your April Month report again! </p>
			    </div> 
			</div>
		  </div>
		
		  <script>
		  var close = document.getElementsByClassName("closebtn");
		  var i;
		  
		  for (i = 0; i < close.length; i++) {
			close[i].onclick = function(){
			  var div = this.parentElement;
			  div.style.opacity = "0";
			  setTimeout(function(){ div.style.display = "none"; }, 600);
			}
		  }
		  </script>
	
    <script type="text/javascript" src="../../public/js/notify.js"></script>
</body>
</html>
</div>
</div>

<?php include "staff_footer.php" ?>