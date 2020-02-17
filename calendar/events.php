<?php
$sqlEvents = 'SELECT id, title, start_date, end_date FROM events LIMIT 20';
$calendarResults = $mysqli->query($sqlEvents);
$calendar = array();
while( $row = $calendarResults->fetch_assoc() ) {
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
?>
<script type="text/javascript">
	var calendarResults = <?php echo json_encode($calendar); ?>
</script>