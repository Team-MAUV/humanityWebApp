<?php $page = 'donorIndex';
$title = 'Donor';
$style = 'don-index.css';
$jsFile = 'donor.js';
include "don_dash_header.php"; ?>

            <div class="donation-container">
                <div class="donate-here">
                    <img class="background-img" src="<?= URL ?>public/images/donation1.jpg">
                    <div class="add-donation">
                       <div class="view1" id="donateView" style="display:none;">
                            <h4>Select an amount</h4>
                            <ul class="select-value">
                                <li><button type="button" class="don-value">Rs:50.00</button> </li>
                                <li><button type="button" class="don-value">Rs:250.00</button> </li>
                                <li><button type="button" class="don-value">Rs:500.00</button> </li>
                                <li><button type="button" class="don-value">Rs:1000.00</button> </li>
                                <li><button type="button" class="don-value">Rs:5000.00</button> </li>
                                
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
                                    <label for="donation-remark">Add dedication</label>
                                    <textarea class="donation-remark" type="text"></textarea>
                                </div>
                            </div>
                            <div class="payment-method">
                                <a href="#"><img src="<?= URL ?>public/images/pay-here-logo.png"></a>
                            </div>
                            <div class="donate">
                                <button class="donate-btn">Donate</button>
                            </div>
                       </div>
                       <div class="view2" id="viewDonations" style="bisplay:block;">
                        <span onclick="closeMyDonations()" class="close-btn">&times;</span>
                           your donations
                       </div>
                    </div>
                </div>
            </div>


<?php include "don_dash_footer.php" ?>            
            



