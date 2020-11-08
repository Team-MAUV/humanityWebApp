<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>market</title>
        
        <link rel="stylesheet" href="<?= URL ?>public/css/buyer-cart.css">
         <link rel="stylesheet" href="<?= URL ?>public/css/buy-market-index.css">
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
                    
                    <a href="<?= URL ?>buyer/help_sup">Help & Support</a>
                    
                </div>
                <div class="col-2">
                    <div class="search-bar">
                        <input type="text" placeholder="Search..." value="search">
                        <button class="src-btn" type="submit"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
                        <a href="<?= URL ?>buyer/profile"><i class="fa fa-user fa-lg">Profile</i></a>
                        <a class="active" href="<?= URL ?>buyer/cart"><i class="fa fa-shopping-cart fa-lg">Cart</i></a>
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
        
        <div class="cart-container">
            <table class="cart">
                <tr>
                    <th><i class="fa fa-eye fa-lg"></i> Preview</th>
                    <th><i class="fa fa-shopping-bag fa-lg"> </i> Product</th>
                    <th><i class="fa fa-dollar-sign fa-lg"></i> Value</th>
                    <th><i class="fa fa-clock fa-lg"></i> Expire date</th>
                    <th><i class="fa fa-wpforms fa-lg"> </i> Recypt</th>
                </tr>
                <tr>
                    <td><a href="#"><img src="<?= URL ?>public/images/squre.png"></a></td>
                    <td>product 0001</td>
                    <td>10000.00</td>
                    <td>2020.11.21</td>
                    <td><a href="#"><i class="fa fa-file-download"></i> download</a></td>
                </tr>
                <tr>
                    <td><a href="#"><img src="<?= URL ?>public/images/squre.png"></a></td>
                    <td>product 0001</td>
                    <td>10000.00</td>
                    <td>2020.11.21</td>
                    <td><a href="#"><i class="fa fa-file-download"></i> download</a></td>
                </tr>
                <tr>
                    <td><a href="#"><img src="<?= URL ?>public/images/squre.png"></a></td>
                    <td>product 0001</td>
                    <td>10000.00</td>
                    <td>2020.11.21</td>
                    <td><a href="#"><i class="fa fa-file-download"></i> download</a></td>
                </tr>
            </table>
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