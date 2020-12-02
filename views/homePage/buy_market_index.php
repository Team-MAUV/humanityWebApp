<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tzu-chi-market</title>
        <link rel="stylesheet" href="<?= URL ?>public/css/buy_market_index_styles.css" />
        <script src="<?= URL ?>public/js/buyer-indexpage.js"></script>
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
                <div class="head-container">
                    
                    
                    <div class="pg-name">
                        <h2>Welcome to Tzu-Chi Market Module</h2>
                        <div class="btns">
                            <a class="log" href="<?= URL ?>login?pf=buy">Log-In</a>
                            <a class="reg" href="<?= URL ?>register/buyRegForm">Register</a>
                        </div>
                    </div>
                    <div class="home-img">
                        <img src="<?= URL ?>public/images/online-auction.jpg">
                    </div>
                </div>

                <div class="about">
                    <div class="img-slider">
                        <div class="slide active">
                            <img src="<?= URL ?>public/images/don1.jpg" alt="">
                            <div class="info">
                                <h2>Slide 01</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="<?= URL ?>public/images/d.jpg" alt="">
                            <div class="info">
                                <h2>Slide 02</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="<?= URL ?>public/images/don3.jpg" alt="">
                            <div class="info">
                                <h2>Slide 03</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="<?= URL ?>public/images/d.jpg" alt="">
                            <div class="info">
                                <h2>Slide 04</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="<?= URL ?>public/images/don3.jpg" alt="">
                            <div class="info">
                                <h2>Slide 05</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="navigation">
                            <div class="btn active"></div>
                            <div class="btn"></div>
                            <div class="btn"></div>
                            <div class="btn"></div>
                            <div class="btn"></div>
                        </div>
                    </div>

            <script type="text/javascript">
                var slides = document.querySelectorAll('.slide');
                var btns = document.querySelectorAll('.btn');
                let currentSlide = 1;

                // Javascript for image slider manual navigation
                var manualNav = function(manual){
                slides.forEach((slide) => {
                    slide.classList.remove('active');

                    btns.forEach((btn) => {
                    btn.classList.remove('active');
                    });
                });

                slides[manual].classList.add('active');
                btns[manual].classList.add('active');
                }

                btns.forEach((btn, i) => {
                btn.addEventListener("click", () => {
                    manualNav(i);
                    currentSlide = i;
                });
                });

                // Javascript for image slider autoplay navigation
                var repeat = function(activeClass){
                let active = document.getElementsByClassName('active');
                let i = 1;

                var repeater = () => {
                    setTimeout(function(){
                    [...active].forEach((activeSlide) => {
                        activeSlide.classList.remove('active');
                    });

                    slides[i].classList.add('active');
                    btns[i].classList.add('active');
                    i++;

                    if(slides.length == i){
                    i = 0;
                    }
                    if(i >= slides.length){
                    return;
                    }
                    repeater();
                }, 10000);
                }
                repeater();
                }
                repeat();
            </script>

                </div>




                <div class="media-container">
                    <div class="selection-panal">
                        <button onclick="showAboutProducts()">Products</button>
                        <button onclick="showAboutBids()">Bidding Process</button>
                    </div>
                    <div class="about-products" id="about-products" style="display: block;">
                        
                       <div class="about-img-text">
                            <p>Tzu-Chi volunteers collects recyclable items and sort them in to four catagorys. </p>
                       </div>
                        
                        <h4>product categories</h4>
                        <div class="images">
                            <div class="row">
                                
                                <div class="column">
                                    <div class="prd-cat-img">
                                        <img src="<?= URL ?>public/images/recycled-glass.jpg">
                                        <div class="text-box">
                                            <div class="prd-name"><h3>Recycled Glass</h3></div>  
                                            <p>These are the recyclable glass items Tzu-Chi volunteers collected. 
                                            They are cleaned and sorted to get most value for them. These includes glass bottles, 
                                            plain glases. Log in to your Tzu-Chi Market profile to see more about them.</p>                                         
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="column">
                                    <div class="prd-cat-img">
                                        <img src="<?= URL ?>public/images/recycled-paper.jpg">
                                        <div class="text-box">
                                            <div class="prd-name"><h3>Recycled Paper</h3></div> 
                                            <p>These are recyclable paper items Tzu-Chi volunteers collected. They are cleaned and sorted. 
                                            they are collected as bundles of papers.  Log in to your Tzu-Chi Market profile to see more about them. </p>                                          
                                            
                                        </div>
                                    </div>
                                </div> 
                                
                                <div class="column">
                                    <div class="prd-cat-img">
                                        <img src="<?= URL ?>public/images/recycled-plastic.jpg">
                                        <div class="text-box">
                                            <div class="prd-name"><h3>Recycled Plastic</h3></div>                                           
                                            <p>These are recyclable plastic items collected by our Tzu-Chi volunteers. They are cleaned and sorted to get
                                            more value. These includes mpstly plastic bottles, plastuc bags and cups.  Log in to your Tzu-Chi Market profile to see more about them. </p>
                                        </div>
                                    </div>
                                </div>    

                                <div class="column">
                                    <div class="prd-cat-img">
                                        <img src="<?= URL ?>public/images/recycled-tronic.jpg">
                                        <div class="text-box">
                                            <div class="prd-name"><h3>Recycled Electronics</h3></div>                                           
                                            <p>These are recyclable plastic items collected by Tzu-Chi volunteers. They are cleaned and sorted to gain
                                            more value. Log in to your Tzu-Chi Market profile to see more about them.  </p>
                                        </div>
                                    </div>
                                </div>    
                                
                            </div>
                        </div>

                        <h4>collecting & sorting process</h4>
                        
                        <p>Tzu-Volunteers collect recyclable items every week.</p>
                        <p>After collecting they are washed abd cleaned. Then all the items will be sorted in to their 
                        respective catagorys.  </p>
                        <p>After some considerable amount of recyclable products colleted Tzu-Chi hambanthota will add 
                        them to the Tzu-Chi market.</p>
                        
                       
                        
                        
                    </div>
                    <div class="bid-sessions" id="bid-sessions" style="display: none;">
                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat atque repellendus
                            , nesciunt sit unde repudiandae voluptatibus, corporis, fuga 
                            molestiae impedit iure? Natus officia ipsam provident voluptates, accusamus cum doloribus ea!
                        </p>
                        
                        <h4>How to bid</h4>
                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga laborum sit odio mollitia iure necessit
                            atibus, tenetur placeat at, provident eaque odit natus incidunt assumenda consectetur sed quos expedita, 
                            autem minus?</p>
                        
                        <h4>rules nad regulations</h4>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni velit quibusdam facilis 
                            labore eveniet! Mollitia perspiciatis impedit ea optio neque numquam, 
                            sapiente ipsa asperiores libero magnam ducimus molestias reprehenderit dolor.</p>
                        
                        <h4>anouncing winners & reciving recipts</h4>
                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio in, iste sapiente sequi, ab, accus
                            antium quas officia ips
                            a ducimus ut consequatur repellat ullam sed tempora nemo maxime voluptate et hic.</p>    
                    </div>
                </div>

                
            </div>



           
            
            




        <footer>
            <div class="footer">Powered by<h5>Humanity2020&copy;</div>
        </footer> 
        
        
    </body>

    
</html>