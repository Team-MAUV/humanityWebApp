<?php $page = 'donorIndex';
$title = 'Donor';
$style = 'donor_index.css';
$jsFile = 'donor.js';
include "don_dash_header.php"; ?>

            <div class="donation-container" style="display:bloclk">
                <div class="donate-here">

                

                    





                            <!-- <form method="post" action="Donor/Donationpayment"> -->

                                   <!-- Recording the Status of the Transactio through the Payment Gateway -->
                              <input type="hidden" name="paymentStatus" value="<?= $_GET['state'];?>">
                              <input type="hidden" name="donorTableId" value="<?= $donorid;?>">
                               <?php echo $donorid;?>

                                <div class="add-donation">
                                  <div class="view1" id="donateView" style="display: block;">
                                        <h4>Select an amount</h4>
                                        <ul class="select-value">
                                            <li><button type="button" id="btn1" class="don-value" onclick="insert50()">Rs:50.00</button> </li>
                                            <li><button type="button" id="btn2" class="don-value" onclick="insert100()">Rs:100.00</button> </li>
                                            <li><button type="button" id="btn3" class="don-value" onclick="insert500()">Rs:500.00</button> </li>
                                            <li><button type="button" id="btn4" class="don-value" onclick="insert1000()">Rs:1000.00</button> </li>
                                            <li><button type="button" id="btn5"class="don-value" onclick="insert5000()">Rs:5000.00</button> </li>
                                            <button onclick="showOther();" id="otherBtn" class="don-value">Other</button>

                                        </ul>
                                        <div style="display:none" class="cust-amount" id="cust-amount">
                                            <label for="amount">Donate other amount (Rs) : </label>
                                            <input type="text" id="inputAmount" name="amount"class="amount" value="" >   
                                            <button type="button" id="btn5"class="don-value" onclick="getInputVal()">Add Amount</button>
                                            <br>
                                                
                                        </div>

                                        <div class="cust-amount"> <label for="amount">Donating Amount (Rs) : </label>
                                            <input class="amount" type="text" id="textField" value="" required></input> 
                                        </div>
                                  

                                        <div class="donate-for">
                                            <label for="use-donation">Use my donation for :</label>
                                            <select name="select-donation" id="select-donation">
                                                <option value="Charity">Charity</option>
                                                <option value="Disaster Relief">Disaster Relief</option>
                                                <option value="Development">Development</option>
                                            </select>
                                        </div>

                                    <div class="dedicate-donation">
                                        <input type="checkbox" id="dedicate" onclick="showDedicateDonation()">
                                        <label for="dedicate"> Dedicate this to a loved one</label> 
                                        <div class="remark" id="dedication" style="display: none;">
                                            <label for="donation-remark"></label>
                                            <input class="donation-remark" name="dedication" type="text" ></input>
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
                                        <input  class="don-value" type="submit" value="Pay Now">   

                                    </form> 

                                    <div class="donate">
                                        <button type="submit" class="donate-btn">Donate</button>
                                        
                                    </div>

                            <!-- </form>  -->


                            
                            
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
            


<script>
                function insert50(){
                    document.getElementById("textField").value =50.00;
                    document.getElementById("amount").value =50.00;
                    document.getElementById('cust-amount').style.display='none';
                }

                function insert100(){
                    document.getElementById("textField").value =100.00;
                    document.getElementById("amount").value =100.00;
                    document.getElementById('cust-amount').style.display='none';
                }

                function insert500(){
                    document.getElementById("textField").value =500.00;
                    document.getElementById("amount").value =500.00;

                    document.getElementById('cust-amount').style.display='none';
                }

                function insert1000(){
                    document.getElementById("textField").value =1000.00;
                    document.getElementById("amount").value =1000.00;
                    document.getElementById('cust-amount').style.display='none';
                }

                function insert5000(){
                    document.getElementById("textField").value =5000.00;
                    document.getElementById("amount").value =5000.00;
                    document.getElementById('cust-amount').style.display='none';
                }



                function getInputVal(){
                    var inputVal = document.getElementById('inputAmount').value;
                    document.getElementById("textField").value =inputVal;
                    document.getElementById("amount").value =inputVal;


                }


                function showOther() {
                                // get the Div
                        var getDiv = document.getElementById('cust-amount');

                                // get the current value of the div's display property
                        var displaySetting = getDiv.style.display;

                                //get the  button, so we can change what it says
                            var otherBtn = document.getElementById('otherBtn');

                    // now toggle the clock and the button text, depending on current state
                            if (displaySetting == 'block') {
                                    // clock is visible. hide it
                                    getDiv.style.display = 'none';
                                    // change button text
                                    otherBtn.innerHTML = 'Show Other';
                            }
                            else {
                                        // clock is hidden. show it
                                        getDiv.style.display = 'block';
                                        // change button text
                                        otherBtn.innerHTML = 'Hide Other';
                            }
                    }
</script>