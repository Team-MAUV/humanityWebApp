<?php $page = 'projectReports';
$title = 'Project Reports';
$style = 'com-dash-projectReports.css';
include "com-dash-header.php"; ?>


<div class="grid-container">

 <h1>Project Reports</h1>
    <div class="row">
        <div class="column">


            <div class="flipbox-inner">
                <div class="flipbox-front">
                    <h2>01</h2>
                    <h3 class="head1">Beneficiery Case </h3>
                </div>
                <div class="flipbox-back">
                    <button onclick="viewreport()" class="btn">View Report</button>
                    <button class="dbtn"><i class="fa fa-download"></i></button>
                    <div class="confirm"> <input type="radio" id="accept" name="confirmreq" value="accept"> Accept&nbsp; <input type="radio" id="reject" name="confirmreq" value="reject">Reject<br>
                        <button type="button" class="btn">Submit</button> </div>
                </div>
            </div>

        </div>

        <div class="column">

            <div class="flipbox-inner">
                <div class="flipbox-front">
                    <h2>02</h2>
                    <h3 class="head1">Donation Report</h3>

                </div>
                <div class="flipbox-back">

                    <button onclick="viewreport()" class="btn">View Report</button>
                    <button class="dbtn"><i class="fa fa-download"></i></button>
                    <div class="confirm"> <input type="radio" id="accept" name="confirmreq" value="accept"> Accept &nbsp;<input type="radio" id="reject" name="confirmreq" value="reject">Reject<br>
                        <button type="button" class="btn">Submit</button> </div>
                </div>
            </div>

        </div>
        <div class="column">

            <div class="flipbox-inner">
                <div class="flipbox-front">
                    <h2>03</h2>
                    <h3 class="head1">Beneficiery Case </h3>
                </div>
                <div class="flipbox-back">

                    <button onclick="viewreport()" class="btn">View Report</button>
                    <button class="dbtn"><i class="fa fa-download"></i></button>
                    <div class="confirm"> <input type="radio" id="accept" name="confirmreq" value="accept"> Accept &nbsp;<input type="radio" id="reject" name="confirmreq" value="reject">Reject<br>
                        <button type="button" class="btn">Submit</button> </div>

                </div>
            </div>
        </div>
        <div class="column">

            <div class="flipbox-inner">
                <div class="flipbox-front">
                    <h2>04</h2>
                    <h3 class="head1">Salary Report</h3>
                </div>
                <div class="flipbox-back">

                    <button onclick="viewreport()" class="btn">View Report</button>
                    <button class="dbtn"><i class="fa fa-download"></i></button>
                    <div class="confirm"> <input type="radio" id="accept" name="confirmreq" value="accept"> Accept&nbsp; <input type="radio" id="reject" name="confirmreq" value="reject">Reject<br>
                        <button type="button" class="btn">Submit</button> </div>
                </div>
            </div>

        </div>
    </div>




</div>


<?php include "com-dash-footer.php" ?>