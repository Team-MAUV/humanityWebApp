<?php $page = 'vol_activities';
$title = 'Volunteer Participated activities';
include "com-dash-header.php"; ?>


<link rel="stylesheet" href="<?= URL ?>public/css/vol_dash_participate.css" />

<div class="grid-container">
 <div id="breadcrum">
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
</head>



<body>

    <h1>Participated Activities</h1>
    <hr>

    <table>
        <tr id="header">
            <th> Activity Name </th>
            <th>Date</th>
            <th> Points</th>
            
        </tr>
        <?php foreach ($activities as $activity) : ?>
        <tr>
            <td><?=$activity['name']?> </td>
            <td><?=$activity['start_date_time']?> </td>
            <td><?=$activity['point']?> </td>
         
        </tr>
        <?php endforeach; ?>
        

    </table>

</body>




























 
 </div>

</div>

<?php include "com-dash-footer.php" ?>