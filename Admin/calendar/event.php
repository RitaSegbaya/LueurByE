<?php
include_once("db_connect.php");
$sqlEvents = "SELECT id, uid, title, start_date, end_date FROM calendar LIMIT 20";
$resultset = mysqli_query($conn, $sqlEvents) or die("database error:". mysqli_error($conn));
$calendar = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {	
	// convert  date to milliseconds
	$start = strtotime($rows['start_date']) * 1000;
	$end = strtotime($rows['end_date']) * 1000;	
    $email = '';
    $mailsel="SELECT * from user where id=$rows['uid']";
    $results = mysqli_query($conn, $mailsel) or die("database error:". mysqli_error($conn));
    while($mailrow = mysqli_fetch_assoc($results) ){
        $email=$mailrow['email'];
    }
	$calendar[] = array(
        'id' =>$rows['id'],
        'title' => $rows['title'].' by '.'mailto:'.$email,
        'url' => "#",
		"class" => 'event-important',
        'start' => "$start",
        'end' => "$end"
    );
}
$calendarData = array(
	"success" => 1,	
    "result"=>$calendar);
echo json_encode($calendarData);
exit;
?>