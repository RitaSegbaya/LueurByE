<?php
//connect to the user account class
include("../Classes/customer_class.php");

//sanitize data




//--INSERT--//
function customer_register_ctr($name,$email,$Password,$user_role)
{
    $newuser_added= new customer_class();

    return $newuser_added->customer_register_cls($name,$email,$Password,$user_role);
}
//Select
function select_customer_ctr($email){

    $add= new customer_class();
    
    return $add->select_customer_cls($email);
}


?>