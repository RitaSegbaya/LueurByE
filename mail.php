<?php
    session_start();
    $email=$_SESSION['email'];
    
   


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    // $username=$_POST['name'];
    // $email=$_POST['email'];
    function sendmail(){
        $name = "LueurbyE";  // Name of your website or yours
        $to = $_SESSION['email'];  // mail of reciever
        $subject = "Success";
        $body = "Booking complete!";
        $from = "wecreategh2812@gmail.com";  // you mail
        $password = "ingcmxaqrugnwxqg";  // your mail password

        // Ignore from here

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $mail = new PHPMailer();

        


        // To Here

        //SMTP Settings
        $mail->isSMTP();
        // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
        $mail->Host = "smtp.gmail.com"; // smtp address of your email
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 587;  // port
        $mail->SMTPSecure = "tls";  // tls or ssl
        $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ]
        ]);

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('wecreategh2812@gmail.com', 'LueurByE');
        $mail->addAddress($_SESSION['email']); // enter email address whom you want to send
        $mail->Subject = ($subject);
        $mail->Body = $body;
        if ($mail->send()) {
            header(Location:"View/confirm.php");
        } else {
            echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
    }


        sendmail();  // call this function when you want to

        if (isset($_GET['sendmail'])) {
            sendmail();
        }
    
?>


