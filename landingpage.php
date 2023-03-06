<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header('Location: passwordloginpage1.php');
    exit;
}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="gamescorestyle.css">
	<style>
		.border {
	 border: 5px outset red;
	}
	</style>

		<h1>Welcome to the Hub</h1>	
		<title>The Hub</title>
	</head>

	<body>
		
		<h1>Say Hello</h1>
		<a href="sayhi.php"> <center><img src="waving.gif"
									 width="300"
									 height="300"></center> </a>

		<h1>Future Plans</h1>
	<a href="plan.php"> <center><img src="planner.png"
									 width="300"
									 height="300"></center> </a>
		
		<h1>Upcoming Events</h1>
	<a href="events.php"> <center><img src="excited.gif"
									 width="300"
									 height="300"></center> </a>
		<h1>Pictures</h1>
	<a href="upload-image/index.php"> <center><img src="kids.jpeg"
									        width="300"
											height="300"></center> </a>	

		
		<h1>Games</h1>
	<a href="game_choice.php"> <center><img src="dicesword.jpg"
									        width="300"
											height="300"></center> </a>	
		
	</body>


</html>