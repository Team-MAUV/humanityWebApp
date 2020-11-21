<?php $page = 'product';
$title = 'Product';
$style = 'buy-pages.css';
$jsFile = 'buyer.js';
include "buyer_header.php"; ?>

            
           <div class="product-container">
            
               <div class="product-col-2">
                   <div>
                       <h3>Product Id : pl20120510</h3>
                        <h2>Recycled Plastic Products</h2>
                       
                   </div>
                   <div>
                        <img src="<?= URL?>public/images/p-plastic.jpg" alt="">
                   </div>
                   <div>
                        <ul>
                            <li>Tzu-Chi Volunteers collected, cleaned and orederd these products. This consistes Plastic bottles. 
                            </li>
                            <li>Quantity : 10kg </li>
                            <li>Bidding date : 2020.12.05</li>
                            <li>Minimum Bid : Rs 8000.00</li>
                        </ul>
                   </div>
               </div>
               <div class="product-col-2">
                    <div class="place-bid">
                        <div class="bid-btn-con">
                            <h4>Place Your bids here: <button class="bid-btn">Bid</button></h4>
                            
                        </div>
                        
                        <div class="value">
                            <label for="bid">Rs <input type="text"> . <input type="text"></label>
                        </div>
                        
                    </div>
                    
                    <div class="bid-detail">
                        <h4>Current bid session details :</h4>
                        <ul>
                            <li>Time Remaining : 02 h 31 min 02 s</li>
                            <li>Current maximum bid : Rs 8321.00</li>
                            <li>Your maximum bid : Rs 8038.00</li>
                        </ul>
                    </div>
                    
                </div>
                
           </div>

            
            
            <div class="ft"></div>

        </div>


<?php include "buyer_footer.php" ?>
