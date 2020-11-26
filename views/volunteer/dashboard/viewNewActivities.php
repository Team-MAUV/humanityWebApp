<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Simple Layouts</title>

  <link rel="stylesheet" href="<?= URL ?>public/css/vol-viewnewactivity.css" />


</head>
<?php $page = 'viewevent';
include "vol_dash_header.php"; ?>


<div class="grid-container">



<div class="row">
<button class="tab tab-upcoming" onclick="openpage('upcoming',this)" id="defaultOpen">Upcoming Events</button>
    <button class="tab tab-finished" onclick="openpage('finished',this)">Finished Events</button></div>
    <div id="upcoming" class="tabcontent">
        <form action="#">
            <h1>Upcoming events</h1>
            <div class="row">
            <?php foreach ($upcoming as $coming) : ?>
                <div class="column">


                    <div class="flipbox-inner">
                        <div class="flipbox-front">
                            <h2><?= $coming['id'] ?></h2>
                            <h3> <?= $coming['name'] ?> </h3>
                        </div>
                        <div class="flipbox-back">
                            <ul class="event">
                                <li>Started : <?= $coming['start_date_time'] ?> </li>

                                <li>Ended   : <?= $coming['end_date_time'] ?> </li>

                                <li>Venue   : <?= $coming['venue'] ?></li>
                            </ul>
                            <button type="button" class="btn">View Invitation</button>

                        </div>




                    </div>

                </div>
                <?php endforeach; ?>
                
            </div>
        </form>
    </div>
    <div id="finished" class="tabcontent">
        <form action="#">
            <h1>Finished events</h1>
            <div class="row">
            <?php foreach ($finished as $finish) : ?>
                <div class="column">


                    <div class="flipbox-inner">
                        <div class="flipbox-front">
                            <h2><?= $finish['id'] ?></h2>
                            <h3> <?= $finish['name'] ?> </h3>
                        </div>
                        <div class="flipbox-back">
                            <ul class="event">
                                <li>Start : <?= $finish['start_date_time'] ?> </li>

                                <li>End   : <?= $finish['end_date_time'] ?> </li>

                                <li>Venue : <?= $finish['venue'] ?></li>
                            </ul>
                            <button type="button" class="btn">View Invitation</button>

                        </div>

                    </div>

                </div>
                <?php endforeach; ?>
                
            </div>
        </form>
    </div>

    <script src="<?= URL ?>public/js/vol-viewevents.js"></script>
    </div>


<?php include "vol_dash_footer.php" ?>
</html>