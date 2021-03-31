<?php $page = 'donorIndex';
$title = 'Donor';
$style = 'donor_index.css';
$jsFile = 'donor.js';
include "don_dash_header.php"; ?>

            <div class="donation-container" style="display:bloclk">
                <div class="donate-here">

                                   <!-- Recording the Status of the Transactio through the Payment Gateway -->
                              <input type="hidden" name="paymentStatus" value="<?= $_GET['state'];?>">
                              <input type="hidden" name="donorTableId" value="<?= $donorid;?>">
                          

                                <div class="add-donation">
                                  <div class="view1" id="donateView" style="display: block;">
                                        
                                    <div class="payment-method">
                                        <a href="#"><img src="<?= URL ?>public/images/pay-here-logo.png"></a>
                                    </div>

                                    <form method="post" action="https://sandbox.payhere.lk/pay/checkout">   
                                        <input type="hidden" name="merchant_id" value="1216578">    <!-- Replace your Merchant ID -->
                                        <input type="hidden" name="return_url" value="<?= URL ?>Donor?state=done">
                                        <input type="hidden" name="cancel_url" value="<?= URL ?>Donor?state=canceled">
                                        <input type="hidden" name="notify_url" value="<?= URL ?>Donor?state=notify">  
                                        <!-- <br><br>Item Details<br> -->
                                        <input type="hidden" id="order_id" name="order_id" value="<?= $donorId ?>">
                                        <input type="hidden" id="items" name="items" value="Donation"><br>
                                        <input type="hidden" id="currency"  name="currency" value="LKR">
                                        <input type="hidden" id="amount"  name="amount" value="">  
                                        <!-- <br><br>Customer Details<br> -->
                                        <input type="hidden" id="first_name"  name="first_name" value="Saman">
                                        <input type="hidden" id="last_name" name="last_name" value="Perera"><br>
                                        <input type="hidden" id="email" name="email" value="<?= $donorEmail ?>">
                                        <input type="hidden" id="phone" name="phone" value="<?= $donorContact ?>"><br>
                                        <input type="hidden" id="address" name="address" value="<?= $donorAddress ?>">
                                        <input type="hidden" id="city" name="city" value="Colombo">
                                        <input type="hidden" id="country" name="country" value="Sri Lanka"><br><br> 
                                        <button  class="don-value" type="submit" >Checkout</button> 

                                    </form> 

                                        <div class="donate">
                                           <button type="submit" class="donate-btn">Complete Donation</button>
                                        
                                         </div>
              

                
               <a href="receipt" target="_blank">Gen Report</a>

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
            

