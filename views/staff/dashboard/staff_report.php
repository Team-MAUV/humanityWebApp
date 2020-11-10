<?php $page = 'home';
include "staff_header.php"; ?>
<link rel="stylesheet" href="<?= URL ?>public/css/staff-layout_style.css" />

<div class="grid-container">



  <div id="breadcrum">





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Report Upload </title>
    
    <link rel="stylesheet" href="<?= URL ?>public/css/staff_dash_report.css" />


<style>
	* {
  box-sizing: border-box;
}


 .column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px;
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
        <h3 style="color: brown;">Select the Date for uploading report:</h3>
        <input type="date" id="myDate" value="2020-10-09"> <br> <br><br> <br>
        <div class="column"> <img src="<?= URL ?>public/images/report.png" alt="img" width="200px" height="150px"/>	
        <h3 style="color: brown;"> To view Uploaded Reports: </h3> <a href="upload_reports.php" target="_blank">
            Uploaded Reports </a>
        
        
        </div>
        
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
<script>
    function myFunction() {
      var x = document.getElementById("myDate").value;
      document.getElementById("demo").innerHTML = x;
    }
    </script>
    
</body>
</html>


<?php include "staff_footer.php" ?>
