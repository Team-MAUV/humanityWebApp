
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

                  <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                   <span id="error_message" class="text-danger"></span>  
                   <span id="success_message" class="text-success"></span> 



         </form>
        

             


</div>


<?php include "userLogin-footer.php" ?>



<script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var email = $('#email').val();  
            
           if(email == '')  
           {  
                $('#error_message').html("All Fields are required");  
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
                        //   setTimeout(function(){  
                        //        $('#success_message').fadeOut("Slow");  
                        //   },10000);  
                     }  
                });  
           }  
      });  
 });  
 </script>  