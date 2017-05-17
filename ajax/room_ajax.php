<?php
session_start();
include "../db_connect.php";

$room = $_POST['room'];
$action = $_POST['action'];

$query = ("select * from $room");
$result = $mysqli->query($query);
$row=$result->fetch_array(MYSQLI_ASSOC);

if(!empty($_POST))
{
	$actionState = $row[$action]*(-1)+1;
	$updateLightbulb = "update $room set $action = '$actionState'";
	$updateL = $mysqli->query($updateLightbulb);
}

$result =['success' => 'true', 'state' => $actionState, 'action' => $action] ;
echo json_encode($result);
exit();	

?>


