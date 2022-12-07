<?php
include ('../Controllers/customer_controller.php');
// include ('../Settings/core.php');


/**
 * Get the data from the login form and pass it ot the Login controller function
 */
if (isset($_POST['Login'])){
    $email = $_POST['email'];
    $Password = $_POST['password'];
    

    $check = select_customer_ctr($email);
   
    
    if ($check)
    {
        if(password_verify($Password,$check['password'])){
            echo "Success";
        }
        //Start session and set session id
        session_start();
        $_SESSION['cid'] = $check['id'];
        $_SESSION['role'] = $check['user_role'];

        if ($_SESSION['role']==2){
            header ('Location:../View/index.php');
        }
        else{
            header('location:../Admin/index.php');
        }
    }
    else{
            echo"Login Unsuccessful";
        }
        
}
        
