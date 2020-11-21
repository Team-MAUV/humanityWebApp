<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tzu-chi-market</title>
        <script src="<?= URL ?>public/js/vol-index.js"></script>
        <link rel="stylesheet" href="<?= URL ?>public/css/vol-index-page-styles.css" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
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
            <div class="hd"></div>
            <div class="page-body">
                <div class="img-container">
                    <img class="background" src="<?= URL ?>public/images/foodcrp.jpg">
                    <div class="pg-name"><h2>Tzu-Chi Volunteers</h2></div>
                    <div class="btns">
                        <a class="log" href="#">Log-In</a>
                        <a class="reg" href="#">Register</a>
                    </div>
                </div>
                
                <div class="media-container">
                    <div class="selection-panal">
                        <button class="h-btn" onclick="showAbout()">About us</button>  
                        <button class="h-btn" onclick="showAct()">Volunteering Activities</button>   
                        <button class="h-btn" onclick="showImg()">Images</button>
                        
                    </div>
                    <div class="about-us" id="aboutUs" style="display: block">
                        <p>We are tzu-chi volunteers.tzu-chi foundation started in taiwan as a vision of master cheng yeng. we came to sri lanka after 2004 tzunami disaster and heplped
                            the victams to get back their feet. with the help of local donors and volunteers we still helping over 10000
                            people who need help.
                        </p>
                        <h4>how to become a tzu-chi volunteer</h4>
                        <p>fill up the registration form</p>
                        <h4>volunteer levels</h4>
                        <p>thers are 3 volunteer levels</p>
                        <h4>volunteer points generating system</h4>
                        <p>get points for the volunteering you do. more points can get you higher level</p>
                    </div>
                    <div class="vol-activities" id="volAct" style="display: none;">
                        <p>we are conducting various volunteering activities through out the year.
                            any volunteer can join to them.
                        </p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic est magni fugit esse provident. 
                            Magnam quos labore tempore eum corporis animi! Facilis animi laudantium corrupti odio quisquam, 
                            assumenda facere a.</p>
                        <h4>Blod Donation Camp</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic est magni fugit esse provident. 
                            Magnam quos labore tempore eum corporis animi! Facilis animi laudantium corrupti odio quisquam, 
                            assumenda facere a.</p>
                        <h4>Monthly Food Distributions</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic est magni fugit esse provident. 
                            Magnam quos labore tempore eum corporis animi! Facilis animi laudantium corrupti odio quisquam, 
                            assumenda facere a.</p>
                        <h4>Health Camps</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic est magni fugit esse provident. 
                            Magnam quos labore tempore eum corporis animi! Facilis animi laudantium corrupti odio quisquam, 
                            assumenda facere a.</p>
                        <h4>Tree Planting Campaign</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic est magni fugit esse provident. 
                            Magnam quos labore tempore eum corporis animi! Facilis animi laudantium corrupti odio quisquam, 
                            assumenda facere a.</p>
                        <h4>Collecting Recyclables</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic est magni fugit esse provident. 
                            Magnam quos labore tempore eum corporis animi! Facilis animi laudantium corrupti odio quisquam, 
                            assumenda facere a.</p>
                    </div>
                    <div class="images" id="image-page" style="display: none;">
                        <div class="view-img">
                            <span onclick="this.parentElement.style.display='none'" class="close-btn">&times;</span>
                            <img id="bigImg" style="width:100%">
                            <div id="img-data"></div>
                        </div>
                        <div class="row">
                            <div class="column">
                                <img src="<?= URL ?>public/images/recy1.jpg" alt="Collecting recycled products. 2020-04-31" onclick="galleryViewImg(this)">
                            </div>
                            <div class="column">
                                <img src="<?= URL ?>public/images/recy2.jpg" alt="Collecting recycled products. 2020-04-31" onclick="galleryViewImg(this)">
                            </div>
                            <div class="column">
                                <img src="<?= URL ?>public/images/recy3.jpg" alt="Collecting recycled products. 2020-04-31" onclick="galleryViewImg(this)">
                            </div>
                            <div class="column">
                                <img src="<?= URL ?>public/images/recy1.jpg" alt="Collecting recycled products. 2020-04-31" onclick="galleryViewImg(this)">
                            </div>
                            <div class="column">
                                <img src="<?= URL ?>public/images/recy2.jpg" alt="Collecting recycled products. 2020-04-31" onclick="galleryViewImg(this)" >
                            </div>
                            <div class="column">
                                <img src="<?= URL ?>public/images/recy1.jpg" alt="Collecting recycled products. 2020-04-31" onclick="galleryViewImg(this)">
                            </div>
                            <div class="column">
                                <img src="<?= URL ?>public/images/recy1.jpg" alt="Collecting recycled products. 2020-04-31" onclick="galleryViewImg(this)">
                            </div>
                            <div class="column">
                                <img src="<?= URL ?>public/images/recy3.jpg" alt="Collecting recycled products. 2020-04-31" onclick="galleryViewImg(this)">
                            </div>
                            <div class="column">
                                <img src="<?= URL ?>public/images/recy2.jpg" alt="Collecting recycled products. 2020-04-31" onclick="galleryViewImg(this)">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>



           
            
            




        <footer>
            <div class="footer">Powered by<h5>Humanity2020&copy;</div>
        </footer>    
    </body>

    
</html>