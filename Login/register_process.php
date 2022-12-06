<?php
include("../Controllers/customer_controller.php");

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $name = $_POST['fullname'];
    $Password = $_POST["password"];
    $Password=password_hash($Password,PASSWORD_DEFAULT);
   
    $user_role=2;

    $check=customer_register_ctr($name,$email,$Password,$user_role);

    // return $check;

    if($check){
        echo "Record inserted";
        header ('Location:login.php');
        
    }else{
        echo"Insertion Failed";
        
    }


    }


    
   ?> 