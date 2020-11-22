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
                <div class="column">


                    <div class="flipbox-inner">
                        <div class="flipbox-front">
                            <h2>01</h2>
                            <h3> Blood Donation Campaign </h3>
                        </div>
                        <div class="flipbox-back">
                            <ul class="event">
                                <li>Date : 07/12/2020 </li>

                                <li>Venue: Community Hall </li>

                                <li>Time : 8.00 a.m. - 3.00 p.m.</li>
                            </ul>
                            <button type="button" class="btn">View Invitation</button>

                        </div>




                    </div>

                </div>

                <div class="column">

                    <div class="flipbox-inner">
                        <div class="flipbox-front">
                            <h2>02</h2>
                            <h3>Tree plantation campaign</h3>

                        </div>
                        <div class="flipbox-back">

                            <ul class="event">

                                <li>Date : 05/11/2020</li>
                                <li> Venue: Rathnapura</li>
                                <li> Time : 8.00 a.m. - 3.00 p.m.</li>

                            </ul>
                            <button type="button" class="btn">View Invitation</button>

                        </div>

                    </div>

                </div>
                <div class="column">

                    <div class="flipbox-inner">
                        <div class="flipbox-front">
                            <h2>03</h2>
                            <h3>Beneficiery home visit 1 </h3>
                        </div>
                        <div class="flipbox-back">

                            <ul  class="event">
                                <li>Date : 05/11/2020</li>
                                <li> Venue: Rathnapura</li>
                                <li> Time : 8.00 a.m. - 3.00 p.m.</li>

                            </ul>
                            <button type="button" class="btn">View Invitation</button>

                        </div>

                    </div>
                </div>
                <div class="column">

                    <div class="flipbox-inner">
                        <div class="flipbox-front">
                            <h2>04</h2>
                            <h3>Beneficiery home visit 2</h3>
                        </div>
                        <div class="flipbox-back">

                            <ul class="event">

                                <li>Date : 30/10/2020</li>
                                <li>Venue: Hambantota </li>
                                <li>Time : 9.00 a.m.</li>
                            </ul>
                            <button type="button" class="btn">View Invitation</button>

                        </div>

                    </div>

                </div>
            </div>
        </form>
    </div>
    <div id="finished" class="tabcontent">
        <form action="#">
            <h1>Finished events</h1>
            <div class="row">
                <div class="column">


                    <div class="flipbox-inner">
                        <div class="flipbox-front">
                            <h2>01</h2>
                            <h3> Blood Donation Campaign </h3>
                        </div>
                        <div class="flipbox-back">
                            <ul class="event">
                                <li>Date : 07/12/2020 </li>

                                <li>Venue: Community Hall </li>

                                <li>Time : 8.00 a.m. - 3.00 p.m.</li>
                            </ul>
                            

                            <button type="button" class="btn">View Media</button> </div>



                    </div>

                </div>

                <div class="column">

                    <div class="flipbox-inner">
                        <div class="flipbox-front">
                            <h2>02</h2>
                            <h3>Tree plantation campaign</h3>

                        </div>
                        <div class="flipbox-back">

                            <ul class="event">

                                <li>Date : 05/11/2020</li>
                                <li> Venue: Rathnapura</li>
                                <li> Time : 8.00 a.m. - 3.00 p.m.</li>

                            </ul>
                           

                            <button type="button" class="btn">View Media</button> </div>


                    </div>

                </div>
                <div class="column">

                    <div class="flipbox-inner">
                        <div class="flipbox-front">
                            <h2>03</h2>
                            <h3>Beneficiery home visit 1 </h3>
                        </div>
                        <div class="flipbox-back">

                            <ul class="event">
                                <li>Date : 05/11/2020</li>
                                <li> Venue: Rathnapura</li>
                                <li> Time : 8.00 a.m. - 3.00 p.m.</li>

                            </ul>
                           

                            <button type="button" class="btn">View Media</button> </div>


                    </div>
                </div>
                </div>
                
            

        </form>
    </div>

    <script src="<?= URL ?>public/js/vol-viewevents.js"></script>
    </div>


<?php include "vol_dash_footer.php" ?>
</html>