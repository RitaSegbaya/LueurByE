<?php
//connect to the user account class
include("../Classes/food_class.php");

//sanitize data




//--INSERT--//

function insert_food_ctr($email,$Password,$Number,$name,$Businessname,$student_id,$user_role)
{
    $insertfood= new customer_class();

    return $insertfood->customer_register_cls($email,$Password,$Number,$name,$Businessname,$student_id,$user_role);
}


function select_food_ctr($date,$email,$time, $contact)
{

    $selefood= new customer_class();
    
    return $selefood->select_food_cls($date,$email,$time,$contact);
}


?>