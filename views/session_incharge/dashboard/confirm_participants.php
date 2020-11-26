<?php $page = 'confirm_participants';
include "sess_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>

<style>
    body {
        padding: 0px;
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    
    table {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    #header {
        background-color:#008B8B;
        color: #fff;
    }
    
    h1 {
        font-weight: 600;
        text-align: center;
        background-color:#008B8B;
        color: #fff;
        padding: 10px 0px;
    }
    
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
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

    <h1>Confirmed Participants</h1>
    <hr>

    <table>
        <tr id="header">
            <th>Vol_id</th>
            <th>Volunteer  name</th>
            <th>Present</th>
        
        </tr>
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

    </table>

</body>

</html>
<?php include "sess_footer.php" ?>