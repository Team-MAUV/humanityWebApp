
   <?php 
$title = 'Forgot Password';
$style = 'userLogin-forgotPassword';
include "userLogin-header.php"; ?>

<div class="login">

         <h1>Password Reset Successful!</h1>
      
     

         <div class="inputContainer" id="ic2"> 
               <div class="successlog">   <i class="far fa-check-circle"></i></div>
            </div>
            <div class="inputContainer" id="ic2"> 
               <div class="usrbtn"> <a  href="<?= URL ?>login">Go to User Login</a></div>
            </div>

       
          
                
               

       
       
        
          <!-- The Modal -->
          <div id="myModal" class="modal">

               <!-- Modal content -->
               <div class="modal-content">
          
                 <div class><span id="error_message" class="error-msg"></span>  </div>
                 <div> <span id="success_message" class="success-msg"></span></span> </div>
                 <div class="msg-nav"><div class="close">Ok</div></div> 
               
               </div>

          </div>
             




<?php include "userLogin-footer.php" ?>




 


