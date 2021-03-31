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
                                <h2> Payment Method : </h2>
                                  <div class="view1" id="donateView" style="display: block;">
                                        
                                 

                                   
                                    
                                    <button type="submit" class="don-value" id="Complete">Finish</button>
                                    <button type="submit" class="don-value" id="Cancel">Cancel</button>
                                    
                                        
                                        
              

                
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
            

