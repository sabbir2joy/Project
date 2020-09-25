<?php
	
	//session_start();

	include '../models/dbConnection.php';
?>
<html>
	<head>
		<title>Admin Dash Board</title>
		<link rel="stylesheet" type="text/css" href="styles/AdminDashDesign.css">
	</head>
	<body>
	
	<?php
		
		/*if(isset($_POST['submit']))
		{
			session_destroy();
			header("Location:login.php");
		}
		
	?>
	
	<?php
		if(!isset($_COOKIE['loggedinadmin']))
		{
			header("Location:login.php");
		}*/
	?>
		<span id = 'welcometext'>Welcome <?php //echo $_COOKIE['loggedinadmin']?></span>
		<div class = "main">
		<form action = "" method = "post">
			<ul>
			<li><a href= "admindash.php">Home</a></li>
			<li><a href= "inventory.php">Inventory</a></li>
			<li><a href= "makeorder.php">Make order</a></li>
			<li><a href= "adminworkerlist.php">Admin and Worker list</a></li>
			<li><a href= "logout.php">Logout</a></li>
			</ul>
		</form>
		</div>
		<div class = "centerpiece">
			<h1>Daily Super Shop</h1>
		</div>
		<div class = "centerbuttons">
			<a href = "shopDetails.php">Shop Details</a>
			<a href = "shophistory.php">Shop History</a>
		</div>
	</body>
</html>