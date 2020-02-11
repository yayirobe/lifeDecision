<?php
$sqlEvents = 'SELECT id, title, start_date, end_date FROM events LIMIT 20';
$result = $mysqli->query($sqlEvents);
$calendar = array();
while( $row = $result->fetch_assoc() ) {
// convert date to milliseconds
	$start = strtotime($row['start_date']) * 1000;
	$end = strtotime($row['end_date']) * 1000;
	$calendar[] = array(
		'id' =>$row['id'],
		'title' => $row['title'],
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
?>