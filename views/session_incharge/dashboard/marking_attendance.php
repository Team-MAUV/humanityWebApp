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


<body>

    <h1>Confirmed Participants attendance marking</h1>
    <hr>

   
    <table class="table">
     <thead>
            <th>Vol_id</th>
            <th>Volunteer  name</th>
            <th>Present</th>
     </thead>


        <tbody>
        <tr>
            <td>VOLHB001 </td>
            <td>Perera</td>
            <td>  <input type="checkbox" id="present" name="present" value="present"></td>
            

        </tr>
        <tr>
            <td>VOLHB010 </td>
            <td>Doe </td>
            <td><input type="checkbox" id="present" name="present" value="present"></td>
           

        </tr>
        <tr>
            <td>VOLHB035 </td>
            <td>John </td>
            <td><input type="checkbox" id="present" name="present" value="present"></td>
           

        </tr>
        <tr>
            <td>VOLHB006 </td>
            <td>Jakadish</td>
            <td><input type="checkbox" id="present" name="present" value="present"></td>
         

        </tr>
        <tr>
            <td>VOLHB040</td>
            <td>Shakthi</td>
            <td><input type="checkbox" id="present" name="present" value="present"></td>
            

        </tr>
        <tr>
            <td>VOLHB015</td>
            <td>Michel </td>
            <td><input type="checkbox" id="present" name="present" value="present"></td>
        

        </tr>
        </tbody>
    </table>

</body>

</html>
<?php include "sess_footer.php" ?>