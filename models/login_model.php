<?php
class login_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function run_com()
    {

        $pwd = $_POST['password'];
        $hashPw = password_hash($pwd, PASSWORD_DEFAULT);

        echo $pwd;
        echo $hashPw;
        $st = $this->db->prepare("SELECT * FROM user WHERE username= :login ");
        $st->execute(array(
            ':login' => $_POST['username']
        ));

        $user = $st->fetchAll();
        //print_r($user);


        foreach ($user as $usr) :
            $role = $usr['role'];
            $stored_pw = $usr['password'];
        endforeach;

    

        Session::init();

        $error = "Invalid Username or Password!";
        $_SESSION['name'] = $_POST['username'];
        $id = $_POST["id"];

       
        if (password_verify($_POST['password'],  $stored_pw))
        {
          /* The password is correct. */
      
           // Session::set('loggedIn', true);
            Session::set('name', $_POST['username']);
            Session::set('id', $id);
          

            //Redirecting User Based on Role
            if ($role == 'commissioner') {
                Session::set('loggedIn-com', true);
                header('location: ../Commissioner');
            }



            if ($role == 'volunteer') {
                Session::set('loggedIn-vol', true);
                header('location: ../Volunteer');
            }

            if ($role == 'donor') {
                Session::set('loggedIn-don', true);
                header('location: ../Donor');
            }

            if ($role == 'buyer') {
                Session::set('loggedIn-buy', true);
                header('location: ../Buyer');
            }

            if ($role == 'staff') {
                Session::set('loggedIn-stf', true);
                header('location: ../Staff');
            }
            if ($role == 'session_incharge') {
                Session::set('loggedIn-sin', true);
                header('location: ../Session_incharge');
            }

        } else {
            // show error
            Session::set('error', $error);
            header('location: ../login');
        }
    }

    public function run_check_email(){
        echo "In login model";
   
        if (!isset($_POST["reset"])){

        

          

           $st = $this->db->prepare("SELECT email,name,userlogin_id FROM volunteer WHERE email= :entered_email");

           $st->execute(array(
             ':entered_email' => $_POST["email"]
           ));

           $row_count = $st->rowCount();
           $user_details =$st->fetchAll();

        

       

           if($row_count >0){

               
        foreach ($user_details as $usr) :
            $userlogin_id = $usr['userlogin_id'];
            $email = $usr['email'];
            $name =  $usr['name'];
        endforeach;

        echo $name;
        
            $selector = bin2hex(random_bytes(8));
            $token = random_bytes(32);
            $hashedToken = password_hash($token, PASSWORD_DEFAULT);


            $url = URL."login/resetPassword?selector=".$selector."&validator=".bin2hex($token);

       

            $expires = date("U") + 1800;

            //Delete if email already exist in pwdReset Table
            $st = $this->db->prepare("DELETE FROM pwdReset WHERE pwdResetEmail=:email");

            $st->execute(array(
              ':email' => $_POST["email"]
            ));

            //Insert data into pwdReset Table

            $st = $this->db->prepare("INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES(:pwresetemail,:selector,:token,:expire)");

            $st->execute(array(
              ':pwresetemail' => $_POST["email"],
              ':selector' => $selector,
              ':token' => $hashedToken,
              ':expire' => $expires
            ));


            $to = $email;
            $subject = 'Reset your password for Humanity';
            $rec_name = $name;

           

            $message = '<h5> Hello '.$rec_name.', </h5>
            <p> We received a password reset request. The link to reset your password is here. If you don\'t make this request, please ignore this email </p>';

            $message .='<br>Here is your password reset link: </br>';
            $message .= '<a href="'.$url.'">'.$url.'</a></p>';

            $message .= '<h4>***Humanity Web App - Powered by Team MAUV***</h4>';

            $headers ="From: Humanity<tzuchihumanity@gmail.com>\r\n";
            $headers .="Reply-To: tzuchihumanity@gmail.com\r\n";
            $headers .= "Content-type: text/html\r\n";

            Email::email_send($to,$rec_name, $subject, $message, $headers);



           }else{
               echo "Email address doesn't exist!";
           }

        }else{
            echo "Enter a valid Email!";
        }

    
    }


    public function run_resetPassword(){
            echo "Reset password here";

            if (isset($_POST["reset-password-submit"])){

                $selector = $_POST["selector"];
                $validator = $_POST["validator"];
                $password = $_POST["pwd"];
                $passwordRepeat = $_POST["pwd-repeat"];
              
              
                if(empty($password) || empty($passwordRepeat)){
              
                  header("Location: ../login/resetPassword?newpwd=empty" );
                  exit();
                }else if($password !=$passwordRepeat){
                    header("Location: ../login/resetPassword?newpwd=pwdnotsame" );
                    exit();
                }

                $currentDate = date("U");
                echo $currentDate;

                $st = $this->db->prepare("SELECT * FROM pwdReset WHERE pwdResetSelector=:selector AND pwdResetExpires >= :pwdExpire");

                $st->execute(array(
                    ':selector' => $selector,
                    ':pwdExpire' => $currentDate
                ));

                $row_count = $st->rowCount();
         


                if($row_count >0){
                    $pwdReset_details =$st->fetchAll();
                    foreach ($pwdReset_details as $tmp) :
                        $reset_email = $tmp['pwdResetEmail'];
                        $pwdResetToken = $tmp['pwdResetToken'];
                      
                    endforeach;

                    echo $reset_email;
                    echo $pwdResetToken;

                    $tokenBin = hex2bin($validator);
                    $tokenCheck = password_verify($tokenBin,$pwdResetToken);

                    if($tokenCheck ===false){
                        echo "You need to re-submit your reset request";
                        exit();
                      }elseif($tokenCheck === true){
                        

                        $st= $this->db->prepare("SELECT * FROM volunteer WHERE email=:email" );

                        $st->execute(array(
                            ':email' => $reset_email
                        ));
        
                        $count = $st->rowCount();
                       

                        
                        if($count >0){
                            $user_details =$st->fetchAll();
                            foreach ($user_details as $tmp) :
                                $userlogin_id = $tmp['userlogin_id'];
                            endforeach;
                            $newPwdHash = password_hash($password, PASSWORD_DEFAULT);

                            $st= $this->db->prepare("UPDATE user SET password=:newPassword WHERE id=:id" );

                            $st->execute(array(
                                ':id' => $userlogin_id,
                                ':newPassword' => $newPwdHash
                            ));
                         

                            header("Location: ../login/pwUpdateSuccess?newpwd=passwordupdated");
                        }else{
                            echo "There was an error!";
                            exit();
                        }

                      }

                }else{
                    echo "You need to re-submit your request";
                    exit();
                }

    }




}



}
