<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tzu-chi-market</title>
        <link rel="stylesheet" href="<?= URL ?>public/css/donor-index.css" />
        <script src="donor.js"></script>
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
                             
                <div class="profile">
                    <div class="pro-pic">
                        <img src="<?= URL ?>public/images/avatar.png">
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
                   
                    <div class="log-out">
                        <a href="<?= URL?>">Log-out</a>
                    </div>

                    <div class="more-details">
                        <h4>Help & Suport</h4>
                        <a href="<?= URL?>">read more about us</a>
                    </div>
                </div>
                <div class="invitations" style="display: none;">
                    invitations
                </div>
            </div>

            <div class="donation-container">
                <div class="donate-here">
                    <img class="background-img" src="<?= URL ?>public/images/donation1.jpg">
                    <div class="add-donation">
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
                </div>
            </div>


            
            




        <footer>
            <div class="footer">Powered by<h5>Humanity2020&copy;</div>
        </footer>    
    </body>

    
</html>