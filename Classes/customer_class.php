<?php

/**
 * This class hanldes all the database functions 
 */
require("../Settings/db_class.php");

class customer_class  extends db_connection{

    //this function performs the insertion function
    function customer_register_cls($email,$Password,$Number,$name,$Businessname,$student_id,$user_role){
		$mysql = "INSERT INTO `customer`(`email`, `Password`, `Number`, `Name`, `Businessname`, `customer_id`, `student_id`, `user_role`) VALUES (' $email','$Password','$Number','$name','$Businessname','$student_id','$user_role','2')";

		
		return $this->db_query($mysql);
		// return $mysql;
		
		
	}

	

	function select_customer_cls($email,$Password){
		
		$mysql ="SELECT * FROM `customer` WHERE `email` = '$email'AND `Password` ='$Password'";
		
		return $this->db_query($mysql);
	}
	
	
}
?>