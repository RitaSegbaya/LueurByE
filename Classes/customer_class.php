<?php

/**
 * This class hanldes all the database functions 
 */
require("../Settings/db_class.php");

class customer_class  extends db_connection{

    //this function performs the insertion function
    function customer_register_cls($name,$email,$Password,$user_role){
		$mysql = "INSERT INTO `user`(`full name`, `email`, `password`, `user_role`) VALUES ('$name','$email','$Password','2')";

		
		return $this->db_query($mysql);
		// return $mysql;
		
		
	}

	

	function select_customer_cls($email){
		
		$mysql ="SELECT * FROM `user` WHERE `email` = '$email'";
		
		return $this->db_fetch_one($mysql);
	}
	
	
}
?>