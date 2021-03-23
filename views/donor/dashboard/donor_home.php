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

                            <form method="post" action="https://sandbox.payhere.lk/pay/checkout">   
                                <input type="hidden" name="merchant_id" value="1216578">    <!-- Replace your Merchant ID -->
                                <input type="hidden" name="return_url" value="<?= URL ?>Donor?state=done">
                                <input type="hidden" name="cancel_url" value="<?= URL ?>Donor?state=canceled">
                                <input type="hidden" name="notify_url" value="<?= URL ?>Donor?state=notify">  
                                <!-- <br><br>Item Details<br> -->
                                <input type="hidden" name="order_id" value="ItemNo12346">
                                <input type="hidden" name="items" value="Door bell wirdeless"><br>
                                <input type="hidden" name="currency" value="LKR">
                                <input type="hidden" name="amount" value="150">  
                                <!-- <br><br>Customer Details<br> -->
                                <input type="hidden" name="first_name" value="Saman">
                                <input type="hidden" name="last_name" value="Perera"><br>
                                <input type="hidden" name="email" value="samanp@gmail.com">
                                <input type="hidden" name="phone" value="0771234567"><br>
                                <input type="hidden" name="address" value="No.1, Galle Road">
                                <input type="hidden" name="city" value="Colombo">
                                <input type="hidden" name="country" value="Sri Lanka"><br><br> 
                                <input class="paybtn" type="submit" value="Pay Now">   

                            </form> 

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
                                    
                                    <?php foreach ($donation as $donations) : ?>
                                    
                                        <li>Your total Contribution(Rs) : <?=$donations['contribution']?></li>
                                        <?php endforeach; ?>
                                        <?php foreach ($maxcon as $maxcons) : ?>
                                        <li>Largest Contribution(Rs) : <?=$maxcons['maxim']?></li>
                                        <?php endforeach; ?>
                                        <?php foreach ($latestcon as $latestcons) : ?>
                                        <li>Latest Contribution on : <?=$latestcons['maximd']?></li>
                                        <?php endforeach; ?>
                                    </ul>
                            
                                </div>
                                <div class="don-stats">
                                    <h2>Humanty Donation Stat</h2>
                                    <ul>
                                    <?php foreach ($donnum as $donnums) : ?>
                                        <li>Total number of Donors : <?=$donnums['donc']?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="latest-donations">
                                <h2>Your Latest Donations </h2>
                                <?php foreach ($latedon as $latedons) : ?>
                               <div class="view-last-donation">
                               
                                    <p>Donated Rs <?=$latedons['amount']?> for <?=$latedons['type']?> on <?=$latedons['date']?></p>

                               </div>
                               <?php endforeach; ?>
                               
                                
                            </div>
                            
                            </div>
                        </div>
                </div>
            </div>


<?php include "don_dash_footer.php" ?>            
            



