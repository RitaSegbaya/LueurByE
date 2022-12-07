<?php 
    require_once("../Settings/db_class.php");

    class Appointment extends db_connection{


        function createAppointment($uid,$title, $start_date,$date_created, $end_date){
            $sql = "INSERT INTO `calendar`(`uid`,`title`, `start_date`, `date_created`,`end_date`) VALUES ('$uid','$title','$start_date','$date_created','$end_date')";

            return $this->db_query($sql);
        }

        function deleteAppointment($id){
            $sql = "DELETE FROM `calendar` WHERE id='$id'";

            return $this->db_query($sql);
        }

        // function updateAppointment($appointment_id,$appointment_date, $appointment_day, $appoint_time){
        //     $sql = "UPDATE `appointments` SET `appointment_date`='$appointment_date',`appointment_day`='$appointment_day',`appointment_time`='$appoint_time' WHERE `appointment_id`='$appointment_id'";

        //     return $this->db_query($sql);
        // }

        function getAllAppointment(){
            $sql = "SELECT * FROM `calendar` ";

            return $this->db_fetch_all($sql);
        }

        function getOneAppointment($appointment_id){
            $sql = " SELECT * FROM `calendar` WHERE `id`='$appointment_id'";

            return $this->db_fetch_one($sql);
        }
    }

?>