
   <?php 
$title = 'Forgot Password';
$style = 'userLogin-forgotPassword';
include "userLogin-header.php"; ?>

<div class="login">

         <h1>Reset Your Password!</h1>
         <form action="" method="post"  >
         <div class="inputContainer">  <h3>Enter your Email address!</h3></div>

            <div class="inputContainer"> 
                <label><strong><i class="fas fa-envelope-open-text"></i></strong></label><br /><br />
                <input type="email" name="email" id="email" placeholder="username@email.com" required/>
              
            </div>

            <div class="inputContainer" id="ic2"> 
                <input type="button" name="submit" id="submit"  value="Reset Password" />  
            </div>
                
               

         </form>

       
        
          <!-- The Modal -->
          <div id="myModal" class="modal">

               Modal content
               <div class="modal-content">
          
                 <div class><span id="error_message" class="error-msg"></span>  </div>
                 <div> <span id="success_message" class="success-msg"></span></span> </div>
                 <div class="msg-nav"><span class="close">Ok</span></div> 
               
               </div>

          </div>
             


</div>






<?php include "userLogin-footer.php" ?>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("submit");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";

}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
     modal.style.display = "none";
     $('#error_message').html("");
     $('#success_message').html("");
  
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    
    modal.style.display = "none";
    $('#error_message').html("");
    $('#success_message').html("");
  }
}
</script>

<script>  
 $(document).ready(function(){  
      
     



      $('#submit').click(function(){  
           var email = $('#email').val(); 
           var msg =  $('#msg').val();
            
           if(email == '')  
           {  
                 $('#error_message').html("Enter a valid Email Address!");  
                
           }  
           else  
           {  
                $('#error_message').html('');  
                $.ajax({  
                     url:"run_check_email",  
                     method:"POST",  
                     data:{email:email},
                     
                     success:function(data){  
                           $("form").trigger("reset");  
                          $('#success_message').fadeIn().html(data);  
                         //  setTimeout(function(){  
                         //       $('#success_message').fadeOut("Slow");  
                         //  },10000);  
                     }  
                });  
           }  
      });   
 }

 );  
 </script>  

