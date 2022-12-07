<?php 
    require_once("../Classes/appointment_class.php");


    function  createAppointment_ctr($uid,$title, $start_date,$date_created, $end_date){
        $appointment = new Appointment;

        return $appointment-> createAppointment($uid,$title, $start_date,$date_created, $end_date);
    }

    function deleteAppointment_ctr($id){
        $appointment = new Appointment;

        return $appointment->deleteAppointment($id);
    }


    function getAllAppointment_ctr(){
        $appointment = new Appointment;

        return $appointment->getAllAppointment();
    }

    function getOneAppointment_ctr($appointment_id){
        $appointment = new Appointment;

        return $appointment->getOneAppointment($appointment_id);
    }

?>