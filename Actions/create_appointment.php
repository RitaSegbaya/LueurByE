<?php 
session_start();
    require_once("../Controllers/appointment_controller.php");

   

    if(isset($_POST['book'])){
        $uid=$_SESSION['cid'];
        $date = $_POST['date'];
        $end_date = $_POST['date'];
        $title = $_POST['title'];
        $date_created=date("Y-m-d h:i:s");
        $start_date=date("Y-m-d",strtotime($date));
        $end_date=date("Y-m-d",strtotime($end_date));
        
        

        // $timestamp = strtotime($appointment_date);

        // $appointment_day = date('l', $timestamp);

        // $appoint_time = $_POST['time'];



        $result = createAppointment_ctr($uid,$title, $start_date,$date_created, $end_date);

        if($result){
            echo "success";
            header("location: ../paystack.php");
        }else{
            echo "<script>alert('failed')</script>";
            header("location: ../Admin/index.php");
        }
    }
?>
