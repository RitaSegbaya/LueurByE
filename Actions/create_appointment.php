<?php 

    require_once("../Controllers/appointment_controller.php");

   

    if(isset($_POST['book'])){

        $start_date = $_POST['date'];
        $end_date = $_POST['date'];
        $title = $_POST['title'];

        echo $start_date;
        echo $end_date;
        echo $title;
        
        $start_date=date_format($start_date,"Y-m-d H:i:s");
        echo $start_date;
        $end_date=date_format($end_date,"Y-m-d H:i:s");

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
