<?php
//connect to the user account class
include("../Classes/cloth_class.php");

//sanitize data




//--INSERT--//
function insert_snacks_ctr($email,$Password,$Number,$name,$Businessname,$student_id,$user_role)
{
    $insertsnacks= new customer_class();

    return $insertsnacks->customer_register_cls($email,$Password,$Number,$name,$Businessname,$student_id,$user_role);
}



function select_snacks_ctr($date,$email,$time, $contact){

    $selsnacks= new customer_class();
    
    return $selsnacks->select_customer_cls($date,$email,$time,$contact);
}


?>