<?php
//connect to the user account class
include("../Classes/cloth_class.php");

//sanitize data




//--INSERT--//
function insert_cloth_ctr($email,$Password,$Number,$name,$Businessname,$student_id,$user_role)
{
    $insertcloth= new customer_class();

    return $insertcloth->customer_register_cls($email,$Password,$Number,$name,$Businessname,$student_id,$user_role);
}



function select_cloth_ctr($date,$email,$time, $contact){

    $selcloth= new customer_class();
    
    return $selcloth->select_customer_cls($date,$email,$time,$contact);
}


?>