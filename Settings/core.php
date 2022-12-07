<?php

session_start();
ob_start();

//function to check login
function check_login(){
    if(isset($_SESSION['id'])){
        header('location:../Login/logout.php');
    }
}

//check for login index 
function check_login_index(){
    if($_SESSION['role'] == 2)
    {
        return $_SESSION['role'];
      header('location:../View/index.php');
    }else{
        return false;
    }
}


function check_admin()
{
    if($_SESSION['role'] == 1)
    {
        return $_SESSION['role'];
        header('location:../Admin/index.php');
    }
}
?>