<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>market</title>
        <link rel="stylesheet" href="<?= URL ?>public/css/market-buyer-profile.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
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


        
        <div class="top-nav">
            <div class="row">
                <div class="col-2">
                    
                    <a href="<?= URL ?>buyer/help_sup">Help & Support</a>
                    
                </div>
                <div class="col-2">
                    <div class="search-bar">
                        <input type="text" placeholder="Search..." value="search">
                        <button class="src-btn" type="submit"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
                        <a class="active" href="<?= URL ?>buyer/profile"><i class="fa fa-user fa-lg">Profile</i></a>
                        <a href="<?= URL ?>buyer/cart"><i class="fa fa-shopping-cart fa-lg">Cart</i></a>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="cat-links">
                    <div class="col-7">
                        <a href="#">Recycled Products</a>
                    </div>
                    <div class="col-7">
                        <a href="#">Recycled Products</a>
                    </div>
                    <div class="col-7">
                        <a href="#">Recycled Products</a>
                    </div>
                    <div class="col-7">
                        <a href="#">Recycled Products</a>
                    </div>
                    <div class="col-7">
                        <a href="#">Recycled Products</a>
                    </div>
                    <div class="col-7">
                        <a href="#">Recycled Products</a>
                    </div>
                    <div class="col-7">
                        <a href="#">Recycled Products</a>
                    </div>
                   
                </div>
            </div>

        </div>
        </header>
        <div class="pro-container">
            <div class="p-row">
                <div class="p-col-2">
                    <div class="b-pro">
                        <div class="b-propic">
                            <img src="<?= URL ?>public/images/squre.png">
                        </div>
                        <div class="b-details">
                            <ul>
                                <li>Name: A. B. C. Perera </li>
                                <li>Address: No 321, main streat , Hambanthota</li>
                                <li>Contact No: 0321458796</li>
                                <li>E-mail: abcperera@gmail.com</li>

                            </ul>   
                        </div>
                        <div class="chng-details">
                            <a href="#"><i class="fa fa-user-edit fa-lg"></i>Update Details</a>
                        </div>
                        <div class="chng-uname">
                            <a href="#"><i class="fa fa-key fa-lg"></i>Change Username and Password</a>
                        </div>
                        <div class="crt-link">
                            <i class="fa fa-shopping-cart fa-lg"></i>
                            <p><a href="#">View Cart</a> to see the items you bought.</p>
                        </div>
                    </div>
                </div>
                
                
                <div class="p-col-2">
                    <div class="favourites">
                        <h3>My Favourites</h3>
                        <div class="p-row-2">
                            <div class="p-col-2-2">
                                <a href="bid-product.html"><img src="<?= URL ?>public/images/squre.png"></a>
                                <ul>
                                    <li> Available on : 2020.10.24</li>
                                    <li> Starting bid : 25000.00 </li>                                   
                                </ul>  
                            </div>
                            <div class="p-col-2-2">
                                <a href="#"><img src="<?= URL ?>public/images/squre.png"></a>
                                <ul>
                                    <li> Available on : 2020.10.24</li>
                                    <li> Starting bid : 2500.00 </li>                                   
                                </ul>  
                            </div>
                            <div class="p-col-2-2">
                                <a href="#"><img src="<?= URL ?>public/images/squre.png"></a>
                                <ul>
                                    <li> Available on : 2020.10.31 </li>
                                    <li> Starting bid : 10000.00 </li>                                   
                                </ul>  
                            </div>
                            <div class="p-col-2-2">
                                <a href="#"><img src="<?= URL ?>public/images/squre.png"></a>
                                <ul>
                                    <li> Available on : 2020.10.31</li>
                                    <li> Starting bid : 3000.00</li>                                   
                                </ul>  
                            </div>
                            <div class="p-col-2-2">
                                <a href="#"><img src="<?= URL ?>public/images/squre.png"></a>
                                <ul>
                                    <li> Available on : 2020.10.31</li>
                                    <li> Starting bid : 3000.00</li>                                   
                                </ul>  
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>


    </body>
    <footer>
        <i>
            <div class="bfooter">Powered by
                <h4>Humanity2020&copy;</h4>
            </div>
        </i>
    </footer>
</html>