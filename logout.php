<?php
session_start();
unset($_SESSION["login_in"]);
unset($_SESSION["username"]);   
header("Location: index.php");
?>