<?php $page = 'home';
$title = 'Volunteer Activities';
$style = 'com-dash-profiles-volunteer.css';
$jsFile = 'tab-changing';
include "com-dash-header.php"; ?>

<div class="grid-container">

<div id="breadcrum">

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

<style>
.button {
  border-radius: 4px;
  background-color:  #4d79ff;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 12px;
  padding: 16px;
  width: 80px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button:hover  {
 background-color: #000000;
}



  </style>
  </head>
<body>
  <div class="grid-body">

    <div class="pageTitle">
      <h1>Volunteer Activities</h1>
    </div>

    <div class="tab-section">
      <ul>
        <li><a id="tab1" href="#" class="active">Upcoming</a></li>
        <li><a id="tab2" href="#"> Finished</a></li>
        <div class="search-container">
          <form action="search_volunteer_activity" method="POST">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </ul>


      <hr>
    </div>


    <div id="tab1C" class="tab-container">

          <div class="content read">

            <table>
              <thead>
              <tr>
              <td>#</td>
              <td>Activity ID</td>
              <td>Name</td>
              <td>Venue</td>
              <td>Starting Date</td>
              <td>Ending Date</td>
              <td>Expecting Participant Count</td>
              <td>confirmed Participant Count</td>
              
              <td></td>
            </tr>
              </thead>
              <tbody>

                <?php foreach ($contacts as $contact) : ?>
                  <tr>
                    <td><?= $contact['id'] ?></td>
                    <td><?= $contact['activity_id'] ?></td>
                    <td><?= $contact['name'] ?></td>
                    <td><?= $contact['venue'] ?></td>
                    <td><?= $contact['start_date_time'] ?></td>
                    <td><?= $contact['end_date_time'] ?></td>
                    <td><?= $contact['participant_count'] ?></td>
                    <td><?= $contact['confirm_participant_count'] ?></td>
                    <td class="actions">
                    <a href="update.php?id=<?= $contact['id'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
<a href="delete.php?id=<?= $contact['id'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>


            <div class="pagination">
              <?php if ($page_no > 1) : ?>
                <a href="volunteer?page=<?= $page_no - 1 ?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
              <?php endif; ?>
              <?php if ($page_no * $records_per_page < $num_contacts) : ?>
                <a href="volunteer?page=<?= $page_no + 1 ?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
              <?php endif; ?>
            </div>
          </div>

    </div>

    <div id="tab2C" class="tab-container">
      <div class="content read">

        <table>
          <thead>
            <tr>
            <td>#</td>
              <td>Activity ID</td>
              <td>Name</td>
              <td>Venue</td>
              <td>Started Date</td>
              <td>Ended Date</td>
              <td>Number of participants</td>
              <td></td>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($newReq as $req) : ?>
              <tr>
                 
              <td><?= $req['id'] ?></td>
                    <td><?= $req['activity_id'] ?></td>
                    <td><?= $req['name'] ?></td>
                    <td><?= $req['venue'] ?></td>
                    <td><?= $req['start_date_time'] ?></td>
                    <td><?= $req['end_date_time'] ?></td>
                    <td><?= $req['participant_count'] ?></td>
             
                <td class="actions">
                 <!-- <a href="update.php?id=<?= $req['id'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>-->
                  <a href="#" ><button class="button">View Media</button></a>


                  <a href="delete.php?id=<?= $req['id'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

       
      </div>    
    </div>

  </div>
  </body>
  <?php include "com-dash-footer.php" ?>