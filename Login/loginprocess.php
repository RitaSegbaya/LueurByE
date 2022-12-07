<?php
include ('../Controllers/customer_controller.php');
// include ('../Settings/core.php');


/**
 * Get the data from the login form and pass it ot the Login controller function
 */
if (isset($_POST['Login'])){
    $email = $_POST['Email'];
    $Password = $_POST['Password'];

    $check = select_customer_ctr($email);
    
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
        

<?php 
include ('../controllers/general_controller.php');
//1- check if the button was click (isset)


//2- Collect the data $GET and $POST
if (isset($_POST['loggedin'])) {
    $customer_email= $_POST['email'];
    $customer_pass= $_POST['password'];
    // echo $customer_email . " " . $customer_pass;
    $result = loginUser($customer_email);
    $encrypt = $result['customer_pass'];
    if(password_verify($customer_pass, $encrypt) AND $result['user_role'] == 2){
        session_start();
        $_SESSION['customer_id'] = $result['customer_id'];
        $_SESSION['c_name'] = $result['customer_name'];
        $_SESSION['c_email'] = $result['customer_email'];
        $_SESSION['user_role'] = $result['user_role'];
        header("Location:../index.php");
    
    }
    else
    if(password_verify($customer_pass, $encrypt) AND $result['user_role'] != 2){
        session_start();
        $_SESSION['customer_id'] = $result['customer_id'];
        $_SESSION['c_name'] = $result['customer_name'];
        $_SESSION['c_email'] = $result['customer_email'];
        $_SESSION['user_role'] = $result['user_role'];
        header("Location:../admin/brands.php");
}

else{
    // session_start();
    // $_SESSION['error'] = 'Invalid login details.';
    // echo "no user found";
    // header("Location:../login/login.php");
    echo "no user";

}
    // if ($result) {
    //     echo "<script>alert('Success')</script>";
    // }
    // else {
    //     echo "failed";
    // }

}

