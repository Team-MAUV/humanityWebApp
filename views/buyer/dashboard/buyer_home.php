<?php $page = 'buyerHome';
$title = 'Market Home';
$style = 'buy-pages.css';
$jsFile = 'buyer.js';
include "buyer_header.php"; ?>


            
            <div class="sm-container">
                <div class="prd">
                    <h4>Plastic</h4>
                    <a href="<?= URL?>buyer/view_product"><img src="<?= URL?>public/images/p-plastic.jpg"></a>
                </div>
                <div class="prd">
                    <h4>Paper</h4>
                    <a href="<?= URL?>buyer/view_product"><img src="<?= URL?>public/images/p-paper.jpg"></a>
                </div>
                
                <div class="prd">
                    <h4>Glass</h4>
                    <a href="<?= URL?>buyer/view_product"><img src="<?= URL?>public/images/p-glass.jpg"></a>
                </div>
                <div class="prd">
                    <h4>Electronic</h4>
                    <a href="<?= URL?>buyer/view_product"><img src="<?= URL?>public/images/ewaste.jpeg"></a>
                </div>
            </div>
            <div class="ft"></div>

        </div>

<?php include "buyer_footer.php" ?>


       