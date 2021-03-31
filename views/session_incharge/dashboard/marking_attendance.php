<?php $page = 'marking_attendance';
include "sess_header.php"; 
$style = 'sess_dash_markattendance.css';?>

<div class="grid-container">



  <div id="breadcrum">





<!DOCTYPE html>
<html lang="en">

<head>
<title>Table</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

 
    <link rel="stylesheet" href="<?= URL?> public/css/sess_dash_markattendance.css" />
</head>
<style>
  body{
	margin:0;
	padding:20px;
	font-family: sans-serif;
}

*{
	box-sizing: border-box;
}

.table{
	width: 100%;
	border-collapse: collapse;
}

.table td,.table th{
  padding:12px 15px;
  border:1px solid #ddd;
  text-align: center;
  font-size:16px;
}

.table th{
	background-color: darkblue;
	color:#ffffff;
}

.table tbody tr:nth-child(even){
	background-color: #f5f5f5;
}

/*responsive*/

@media(max-width: 500px){
	.table thead{
		display: none;
	}

	.table, .table tbody, .table tr, .table td{
		display: block;
		width: 100%;
	}
	.table tr{
		margin-bottom:15px;
	}
	.table td{
		text-align: right;
		padding-left: 50%;
		text-align: right;
		position: relative;
	}
	.table td::before{
		content: attr(data-label);
		position: absolute;
		left:0;
		width: 50%;
		padding-left:15px;
		font-size:15px;
		font-weight: bold;
		text-align: left;
	}
}
.checkbox{
position: absolute;
top: 0;
left: 0;
height: 25px;
width: 25px;
background-color:gray;
}

@media only screen and (max-width: 768px) {
    table {
        width: 90%;
    }
}
</style>

<body>

    <h1>Confirmed Participants attendance marking</h1>
    <hr>

   
    <table class="table">
     <thead>
            <th>Vol_id</th>
           
            <th>Present</th>
     </thead>


        <tbody>
        <?php foreach ($confirm as $confir) : ?>
        <tr>
      
            <td><?= $confir['vol_id'] ?>  </td>
           
            <td>  <input type="checkbox" id="present" name="present" value="present"></td>
            
           
        </tr>
        <?php endforeach; ?> 
        </tbody>
    </table>

</body>

</html>
<?php include "sess_footer.php" ?>