<?php $page = 'donorIndex';
$title = 'Donor';
$style = 'donor_index.css';
$jsFile = 'donor.js';
include "don_dash_header.php"; ?>

            <div class="donation-container" style="display:bloclk">
                <div class="donate-here">
                    
                    <div class="add-donation">
                       <div class="view1" id="donateView" style="display: block;">
                            <h4>Select an amount</h4>
                            <ul class="select-value">
                                <li><button type="button" class="don-value">Rs:50.00</button> </li>
                                <li><button type="button" class="don-value">Rs:250.00</button> </li>
                                <li><button type="button" class="don-value">Rs:500.00</button> </li>
                                <li><button type="button" class="don-value">Rs:1000.00</button> </li>
                                <li><button type="button" class="don-value">Rs:5000.00</button> </li>
                                <li><button type="button" class="don-value">Other</button> </li>
                                
                            </ul>
                            <div class="cust-amount">
                                <label for="amount">Donate other amount (Rs) : </label>
                                <input class="amount" type="text">         
                            </div>
                            <div class="donate-for">
                                <label for="use-donation">Use my donation for :</label>
                                <select name="select-donation" id="select-donation">
                                    <option value="">Charity-Provide continous hepl tp those in need</option>
                                    <option value="">Desaster-</option>
                                    <option value="">Development-</option>
                                </select>
                            </div>
                            <div class="dedicate-donation">
                                <input type="checkbox" id="dedicate" onclick="showDedicateDonation()">
                                <label for="dedicate"> Dedicate this to a loved one</label> 
                                <div class="remark" id="dedication" style="display: none;">
                                    <label for="donation-remark"></label>
                                    <textarea class="donation-remark" type="text" ></textarea>
                                </div>
                            </div>
                            <div class="payment-method">
                                <a href="#"><img src="<?= URL ?>public/images/pay-here-logo.png"></a>
                            </div>
                            <div class="donate">
                                <button class="donate-btn">Donate</button>
                                
                            </div>
                            
                            
                        </div>
                        <div class="view2" id="viewDonations" style="display: none;">
                            <span onclick="closeMyDonations()" class="close-btn">&times;</span>
                            <div class="stats">
                                <div class="my-donations">
                                    <h2>Donor ID : <?=$_SESSION['id']?></h2>
                                    <ul>
                                        <li>Your Contribution(Rs) : 3550.00</li>
                                        <li>Largest Contribution(Rs) : 500.00</li>
                                        <li>Last Contribution on : 2020.10.10</li>
                                    </ul>
                            
                                </div>
                                <div class="don-stats">
                                    <h2>Humanty Donation Stats</h2>
                                    <ul>
                                        <li>Total number of Donors : 251</li>
                                        <li>Total Donations in last 30 days(Rs) : 12258.12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="latest-donations">
                                <h2>Your Latest Donations </h2>
                               <div class="view-last-donation">
                                    <p>Donated Rs 50.00 for Charity on 2020.10.10</p>
                               </div>
                               <div class="view-last-donation">
                                    <p>Donated Rs 50.00 for Charity on 2020.10.10</p>
                               </div>
                               <div class="view-last-donation">
                                    <p>Donated Rs 50.00 for Charity on 2020.10.10</p>
                               </div>
                                
                            </div>
                            
                            </div>
                        </div>
                </div>
            </div>


<?php include "don_dash_footer.php" ?>            
            



