<?php
include ('../Controllers/customer_controller.php');
include ('../Settings/core.php');


/**
 * Get the data from the login form and pass it ot the Login controller function
 */
if (isset($_POST['Login'])){
    $email = $_POST['Email'];
    $Password = $_POST['Password'];

    $check = select_customer_ctr($email,$Password);
    
    if ($check)
    {
        //Start session and set session id
        session_start();
        $_SESSION['id'] = $check['id'];
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
        
