<?php
session_start();
include "db_connect.php";
$_SESSION['login_in']=false;
$error='';

$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);

$username = $mysqli->real_escape_string($username);
$password = $mysqli->real_escape_string($password);

$query = ("select * from user");
$result = $mysqli->query($query);
$row=$result->fetch_array(MYSQLI_ASSOC);


if(isset($_POST['username']) && isset($_POST['password']))
{	
	if($row['username'] == $username && $row['password'] == $password)
	{
		$_SESSION['login_in']=true;
		$_SESSION['username'] = $username; 
		header("location: index.php"); 
		echo "string";
	} 
	else
	{
		$error = "Username or Password is invalid";
	}
}
?>