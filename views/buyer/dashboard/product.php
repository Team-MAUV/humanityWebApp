<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>market</title>
        <link rel="stylesheet" href="market.css" />
        <link rel="stylesheet" href="product.css">
         <link rel="stylesheet" href="m-header.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
    </head>

    <body>

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
                    <a href="#">Log-In</a>
                    <a href="#">Sign-In</a>
                    <a href="#">Help & Support</a>
                    
                </div>
                <div class="col-2">
                    <div class="search-bar">
                        <input type="text" placeholder="Search..." value="search">
                        <button class="src-btn" type="submit"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
                        <a href="#"><i class="fa fa-user fa-lg">Profile</i></a>
                        <a href="#"><i class="fa fa-shopping-cart fa-lg">Cart</i></a>
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
                    <div class="col-7">
                        <a href="#">Recycled Products</a>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="product-container">
            <div class="p-name">
                <h1>Product 0001 by tzu-chi-volunteers</h1>
            </div>
            <div class="pd-row">
                <div class="pd-col-2">
                    <div class="p-img">
                        <img src="squre.png">
                        <ul>
                            <li>00000</li>
                            <li>Product Name</li>
                            <li>2020.11.05</li>
                            <li>Rs:2500.00</li>
                            <label class="add-featured"><input type="checkbox">Add to Favourites</label>
                        </ul>
                    </div>
                   <div>
                        <p>This is product 001.This is product 001.This is product 001.This is product 001.
                        This is product 001.This is product 001.This is product 001.This is product 001.
                        </p>
                   </div>

                </div>
                <div class="pd-col-2">
                        
                        <div class="bid-area">
                            <h1>Add your bids here <i class="fa fa-coins fa-lg"></i> </h1>
                            <label for="biding">Rs.</label>
                            <input class="rupees" type="text" value="" placeholder="">
                            <label for="biding">.</label>
                            <input class="cents" type="text" value="" placeholder="00">
                            <button type="submit" class="bid-btn"></i>Bid</button>
                            
                        </div>

                        <div class="bid-stats">
                            <table class="bid-stats">
                                <tr>
                                    <td>Product id :</td>
                                    <td>0001</td>    
                                </tr>
                                <tr>
                                    <td>Current heighest bid :</td>
                                    <td>00000.00 </td>
                                </tr>
                                
                                <tr>
                                    <td>Your highest bid :</td>
                                    <td>00000.00 </td>
                                </tr>
                                <tr>
                                    <td>Time remaning :</td>
                                    <td>14h 25min</td>
                                </tr>
                            </table>
                            <button type="submit" class="refresh-btn"><i class="fa fa-sync-alt fa-lg"></i></button>
                            
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