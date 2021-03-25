<?php $page = 'donorIndex';
$title = 'Donor';
$style = 'donor_index.css';
$jsFile = 'donor.js';
include "don_dash_header.php"; ?>

            <div class="donation-container" style="display:bloclk">
                <div class="donate-here">
                            <form method="post" action="">
                                <div class="add-donation">
                                  <div class="view1" id="donateView" style="display: block;">
                                        <h4>Select an amount</h4>
                                        <ul class="select-value">
                                            <li><button type="button" id="btn1" class="don-value" onclick="insert50()">Rs:50.00</button> </li>
                                            <li><button type="button" id="btn2" class="don-value" onclick="insert100()">Rs:100.00</button> </li>
                                         
                                         

                                        </ul>
                                       
            </div>


<?php include "don_dash_footer.php" ?>            
            

