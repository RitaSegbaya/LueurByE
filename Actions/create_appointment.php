<?php 

    require_once("../Controllers/appointment_controller.php");

    $appointment_date = $_GET['start_date'];

    $timestamp = strtotime($start_date);

    $appointment_day = date('l', $timestamp);

    $appoint_time = $_GET['appointment_time'];



    $result = createAppointment_ctr($title, $start_data, $end_date);

    if($result){
        echo "success";
        header("location: ../Admin/index.php");
    }else{
        echo "<script>alert('failed')</script>";
        header("location: ../Admin/index.php");
    }
?>