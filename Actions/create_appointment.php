<?php 

    require_once("../Controllers/appointment_controller.php");

   

    if(isset($_POST['book'])){

        $date = $_POST['date'];
        $end_date = $_POST['date'];
        $title = $_POST['title'];

        $start_date=date("Y-m-d",strtotime($date));
        echo $start_date;
        
        

        // $timestamp = strtotime($appointment_date);

        // $appointment_day = date('l', $timestamp);

        // $appoint_time = $_POST['time'];



        $result = createAppointment_ctr($title, $start_date, $end_date);

        if($result){
            echo "success";
            header("location: ../View/payment_page.php");
        }else{
            echo "<script>alert('failed')</script>";
            header("location: ../Admin/index.php");
        }
    }
?>
