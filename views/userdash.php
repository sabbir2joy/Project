<?php
	
	session_start();

?>
<html>
	<head>
		<title>User Dash Board</title>
		<link rel="stylesheet" type="text/css" href="styles/AdminDashDesign.css">
	</head>
	<body>
	
	<?php
		
		if(isset($_POST['submit']))
		{
			session_destroy();
			header("Location:login.php");
		}
		
	?>
	<?php
		if(!isset($_COOKIE['loggedinuser']))
		{
			header("Location:login.php");
		}
	?>
		<span id = 'welcometext'>Welcome <?php echo $_COOKIE['loggedinuser']?></span>
		<div class = "main">
		<form action = "" method = "post">
			<ul>
			<li class = "active"><a href= "#">Home</a></li>
			<li><a href= "#">Inventory</a></li>
			<li><a href= "#">Order list</a></li>
			<li><a href= "#">Make order</a></li>
			<li><a href= "logout.php">Logout</a></li>
			</ul>
		</form>
		</div>
		<div class = "centerpiece">
			<h1>Daily Super Shop</h1>
		</div>
		<div class = "centerbuttons">
			<a href = "#">User Details</a>
			<a href = "#">Working History</a>
		</div>
	</body>
</html>