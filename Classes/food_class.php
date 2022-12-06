<?php

/**
 * This class hanldes all the database functions 
 */
require("../Settings/db_class.php");

class customer_class  extends db_connection{
    function insert_food_cls($date,$email,$time,$contact,$Business_name)
    {
        $mysql= "INSERT INTO `Food`(`date`, `email`, `time`, `contact`) VALUES ('$date','$email','$time','$contact','$Business_name')";
        return $this->db_query($mysql);
    }

    function select_food_cls($date,$email,$time,$contact){    
            $mysql ="SELECT * FROM `Food` WHERE `date` = '$date' , `email` = '$email', `time`= '$time' AND `contact` ='$contact'";
            
            return $this->db_query($mysql);
        }
    

}
?>