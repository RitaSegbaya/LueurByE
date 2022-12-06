<?php

/**
 * This class hanldes all the database functions 
 */
require("../Settings/db_class.php");

class customer_class  extends db_connection{

    function insert_snacks_cls($date,$email,$time,$contact,$Business_name)
    {
        $mysql= "INSERT INTO `Clothes`(`date`, `email`, `time`, `contact`) VALUES ('$date','$email','$time','$contact','$Business_name')";
        return $this->db_query($mysql);
    }
    function select_snacks_cls($date,$email,$time,$contact,$Business_Name){    
            $mysql ="SELECT * FROM `Clothes` WHERE `date` = '$date' , `email` = '$email', `time`= '$time' AND `contact` ='$contact'";
            
            return $this->db_query($mysql);
        }
    

}
?>