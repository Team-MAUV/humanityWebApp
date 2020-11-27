<?php $page = 'staff_report';
include "staff_header.php"; ?>
<link rel="stylesheet" href="<?= URL ?>public/css/staff-layout_style.css" />

<div class="grid-container">



  <div id="breadcrum">





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report Upload </title>
    
    <link rel="stylesheet" href="<?= URL ?>public/css/staff_dash_report.css" />


<style>
	* {
  box-sizing: border-box;
}
body{
	overflow: hidden;
}

 .column {
  float: left;
  width: 40%;
  padding: 10px;
  height: 250px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;

}
</style>
</head>
<body>
    <div class="row">
	<div class="column">

        <h2 style="color: brown;">Select the Date:</h2>
        <input type="date" id="myDate" value="2020-10-09"> 
      
		<button class="btn"> Submit</button>

	
        
        </div>
     <div class="column"></div>
    </div>
	 <div class="row">
	 <div class="column"></div>

        <div class="column">
         
<div class="wrapper">
	<div class="title">
		Report Upload
	</div>
	<div class="file_upload_list">
		<ul>
			<li>
				<div class="file_item">
					<div class="format">
						<p>Doc</p>
					</div>
					<div class="file_progress">
						<div class="file_info">
							<div class="file_name">
								 blood donation.docx
							</div>
							<div class="file_size_wrap">
								<div class="file_size">2KB</div>
								<div class="file_close">X</div>
							</div>
						</div>
						<div class="progress">
							<div class="inner_progress" style="width: 90%;"></div>
						</div>
					</div>
				</div>
			</li>
			
			<li>
				<div class="file_item">
					<div class="format">
						<p>PDF</p>
					</div>
					<div class="file_progress">
						<div class="file_info">
							<div class="file_name">
								volunteer_Attendance.pdf
							</div>
							<div class="file_size_wrap">
								<div class="file_size">15MB</div>
								<div class="file_close">X</div>
							</div>
						</div>
						<div class="progress">
							<div class="inner_progress" style="width: 66%;"></div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="file_item">
					<div class="format">
						<p>DOC</p>
					</div>
					<div class="file_progress">
						<div class="file_info">
							<div class="file_name">
								New Appointant.doc
							</div>
							<div class="file_size_wrap">
								<div class="file_size">10MB</div>
								<div class="file_close">X</div>
							</div>
						</div>
						<div class="progress">
							<div class="inner_progress" style="width: 50%;"></div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="file_item">
					<div class="format">
						<p>ZIP</p>
					</div>
					<div class="file_progress">
						<div class="file_info">
							<div class="file_name">
                                Annual report.zip
							</div>
							<div class="file_size_wrap">
								<div class="file_size">200KB</div>
								<div class="file_close">X</div>
							</div>
						</div>
						<div class="progress">
							<div class="inner_progress" style="width: 25%;"></div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="choose_file">
		<label for="choose_file">
			<input type="file" id="choose_file">
			<span>Choose Files</span>
		</label>
	</div>
</div>
</div>

</div>
</div>
<script>
    function myFunction() {
      var x = document.getElementById("myDate").value;
      document.getElementById("demo").innerHTML = x;
    }
    </script>
    
</body>



<?php include "staff_footer.php" ?>
</html>