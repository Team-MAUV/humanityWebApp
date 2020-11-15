<?php
class login_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function run_com()
    {

        $st = $this->db->prepare("SELECT * FROM user WHERE username= :login AND password = MD5(:password) ");
        $st->execute(array(
            ':login' => $_POST['username'],
            ':password' => $_POST['password']
        ));

        $user = $st->fetchAll();
        //print_r($user);


        foreach ($user as $usr) :
            $role = $usr['role'];
        endforeach;

        Session::init();

        $error = "Invalid Username or Password!";
        $_SESSION['name'] = $_POST['username'];
        $id = $_POST["id"];

        $count = $st->rowCount();
        if ($count > 0) {

            Session::set('loggedIn', true);
            Session::set('name', $_POST['username']);
            Session::set('id', $id);
            Session::set('loggedIn', true);

            //Redirecting User Based on Role
            if ($role == 'commissioner') {
                header('location: ../Commissioner');
            }



            if ($role == 'volunteer') {
                header('location: ../Volunteer');
            }

            if ($role == 'donor') {
                header('location: ../Donor');
            }

            if ($role == 'buyer') {
                header('location: ../Buyer/profile');
            }

            if ($role == 'staff') {
                header('location: ../Staff');
            }
            if ($role == 'session_incharge') {
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


            $url = "http://localhost/resetPW/create-new-password.php?selector=".$selector."&validator=".bin2hex($token);

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

            $message .= '<h4>-------------------------------------------------------------------------Humanity Web App - Powered by Team MAUV-----------------------------------------------------------------------</h4>';

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
}
