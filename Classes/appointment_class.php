<?php 
    require_once("../Settings/db_class.php");

    class Appointment extends db_connection{


        function createAppointment($title, $start_data, $end_date){
            $sql = "INSERT INTO `events`(`title`, `start_date`, `end_date`) VALUES ('$title','$start_data','$end_date')";

            return $this->db_query($sql);
        }

        function deleteAppointment($id){
            $sql = "DELETE FROM `events` WHERE id='$id'";

            return $this->db_query($sql);
        }

        // function updateAppointment($appointment_id,$appointment_date, $appointment_day, $appoint_time){
        //     $sql = "UPDATE `appointments` SET `appointment_date`='$appointment_date',`appointment_day`='$appointment_day',`appointment_time`='$appoint_time' WHERE `appointment_id`='$appointment_id'";

        //     return $this->db_query($sql);
        // }

        function getAllAppointment(){
            $sql = "SELECT * FROM `events` ";

            return $this->db_fetch_all($sql);
        }

        function getOneAppointment($appointment_id){
            $sql = " SELECT * FROM `events` WHERE `id`='$appointment_id'";

            return $this->db_fetch_one($sql);
        }
    }

?>