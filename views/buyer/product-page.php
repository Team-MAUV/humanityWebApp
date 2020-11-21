<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tzu-chi-market</title>
        <link rel="stylesheet" href="<?= URL?>public/css/buy-pages.css" />
        <script src="<?= URL ?>public/js/buyer.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>

    <body>
        <header>
            <div class="nav-bar">
                <div class="logo-container">
    
    
                    <div class="logo"></div>
                </div>
    
                <div class="title-name">
    
                    <h3 class="logo-name">
                        <div class="tzu-logo"></div>
                        Tzu Chi Foundation | <span> Hambantota</span>
                    </h3>
                </div>
    
                <div class="log-sign" style="--i: 1.8s;">
    
                    <a href="<?= URL ?>index" class="back-btn" alt="Sun"><i class="fas fa-home"></i></a>
                </div>
    
            </div>
    
        </header> 



        <div class="container">

        <div class="side-panal">
                
                <div class="view-home" id="viewHome" style="display: block;">
                     <div class="next-bid">
                         <h4>Next bid session : </br> 2020.11.30</h4>
                     </div>
                     
                     <div class="profile">
                         <div class="pro-pic">
                             <img src="<?= URL?>public/images/avatar.png">
                         </div>
                         <div class="pro-details">
                             <ul>
                                 <li>A.B.C.Perera</li>
                                 <li>No-12 , Main Rd, Colombo 04</li>
                                 <li>0715428963</li>
                                 <li>abc@mail.com</li>
                             </ul>
                         </div>
                         <div class="pro-update">
                             <a href="<?= URL?>">Update details</a>
                         </div>
                         <div class="cart">
                             <a onclick="viewRecypts()">View Recepts</a>
                         </div>
                         <div class="log-out">
                             <a href="<?= URL?>">Log-out</a>
                         </div>
 
                         <div class="more-details">
                             <h4>Help & Suport</h4>
                             <a href="<?= URL?>">read more about us</a>
                         </div>
                     </div>
                     
 
                </div>
                <div class="view-recypt" id="viewRecypt" style="display: none;">
                    
                     <span onclick="closeRecypts()" class="close-btn">&times;</span>
                     <ul>
                         <li><a href="#"><img class="download-img" src="<?= URL?>public/images/down-arrow.png">2020-10-21-prd201002</a></li>
                         <li><a href="#"><img class="download-img" src="<?= URL?>public/images/down-arrow.png">2020-10-21-prd201002</a></li>
                         <li><a href="#"><img class="download-img" src="<?= URL?>public/images/down-arrow.png">2020-10-21-prd201002</a></li>
                     </ul>
                 </div>
            </div>

            
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




        <footer>
            <div class="footer">Powered by<h5>Humanity2020&copy;</div>
        </footer>    
    </body>

    
</html>