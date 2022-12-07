<!-- <?php

//   $url = "https://api.paystack.co/transaction/initialize";
//   $email = $_POST['email'];
//   $amount = $_POST['amount'];

//   $fields = [

//     'email' => $email,
//     'amount' => "$amount";
//   ];

//   $fields_string = http_build_query($fields);

//   //open connection
//   $ch = curl_init();
  
//   //set the url, number of POST vars, POST data
//   curl_setopt($ch,CURLOPT_URL, $url);
//   curl_setopt($ch,CURLOPT_POST, true);
//   curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
//   curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//     "Authorization: Bearer sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088",
//     "Cache-Control: no-cache",
//   ));
//    //So that curl_exec returns the contents of the cURL; rather than echoing it
//   curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
//   //execute post
//  $result = curl_exec($ch);

//     echo $result;

//     $insert = insert_payment_ctr($email,$amount){
//         if($insert){
//             echo"success";
//         }
//         else{
//             echo"failed";
//         }
//     }
  ?> -->
  <?php


$ref=$_GET['reference'];
$curl = curl_init();
  
 curl_setopt_array($curl, array(
   CURLOPT_URL => "https://api.paystack.co/transaction/verify/:".$ref,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => "",
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 30,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => "GET",
   CURLOPT_HTTPHEADER => array(
     "Authorization: Bearer sk_test_9140e1b413d42984f88abc931f0e7af7218d9aab",
     "Cache-Control: no-cache",
   ),
 ));
 
 $response = curl_exec($curl);
 $err = curl_error($curl);
 $result = json_decode($response,true);

 curl_close($curl);
 
 if ($err) {
   echo "cURL Error #:" . $err;
 } else {
   echo $response;
   $amount = $result['data']['amount'];
   $currency =$result['data']['currency'];
   $payment_date=date("Y-m-d");
   $finalresult=addpayment($amount,$currency,$payment_date,$customer_id,$booked_slot_id);
 }

?>