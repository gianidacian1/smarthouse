<?php

include "db_connect.php";


$query = ("select * from room2");
$result = $mysqli->query($query);
$row=$result->fetch_array(MYSQLI_ASSOC);
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>SmartHouse - Room2</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="jquery-3.2.0.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="style.css">

<script src="ajax/main_js.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand"><img src="images/home_logo.png" class="logo"></a>
			</div>
			<div class="collapse navbar-collapse" id="menu">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rooms <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="room1.php">Room 1</a>
							<li><a href="room2.php">Room 2</a>
							<li><a href="bathroom.php">Bathroom</a>
							<li><a href="living.php">Livingroom</a>
							<li><a href="kitchen.php">Kitchen</a>
						</ul>
					</li>
					<?php if(isset($_SESSION['login_in'])): ?>
					<li><button class="login_btn"><a href="logout.php">Log out</a></button></li>
						<?php else: ?>
						<li><button class="login_btn"><a href="login.php">Login</a></button></li>
					<?php endif ?>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<p class="room_name">Room 2<p>
		<img src="images/room2.png" class="house_img img-responsive">
		<div class="action_btn">
			<p class="action">Actions</p>
			<?php if(isset($_SESSION['login_in'])): ?>
				<img src="images/lightbulb<?php echo $row['lightbulb'];?>.png" id="lightbulb" onclick="actionState(<?php echo $row['lightbulb'];?>,'room2','lightbulb')">
				<img src="images/outlet<?php echo $row['outlet'];?>.png" id="outlet" onclick="actionState(<?php echo $row['outlet'];?>,'room2','outlet')">
				<img src="images/curtain<?php echo $row['curtain'];?>.png" id="curtain" onclick="actionState(<?php echo $row['curtain'];?>,'room2','curtain')">
			<?php else:?>
				<a href="login.php"><img src="images/lightbulb<?php echo $row['lightbulb'];?>.png" id="lightbulb"></a>
				<a href="login.php"><img src="images/outlet<?php echo $row['outlet'];?>.png" id="outlet" ></a>
				<a href="login.php"><img src="images/curtain<?php echo $row['curtain'];?>.png" id="curtain"></a>
			<?php endif?>	
		</div>
	</div>
</body>
</html>