<?php 

$host = "lifedecision.cfsqcvodfryc.us-east-1.rds.amazonaws.com";
$user = "root";
$password = "root1234";
$database = "life_decision";
$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}

?>