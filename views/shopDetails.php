<?php
	
	session_start();

?>
<?php
		
		if(isset($_POST['submit']))
		{
			session_destroy();
			header("Location:login.php");
		}
		
	?>
	
	<?php
		if(!isset($_COOKIE['loggedinadmin']))
		{
			header("Location:login.php");
		}
	?>
<html>
	<head>
		<title>Shop Details</title>
		<link rel="stylesheet" type="text/css" href= "styles/shopDetailsDesign.css">
	</head>
	<body>
	<span id = 'shopdetailsheading'>Shop Details</span>
	<form action = "" method = "post">
	<div class = "main">
		
			<ul>
			<li><a href= "admindash.php">Home</a></li>
			<li><a href= "inventory.php">Inventory</a></li>
			<li><a href= "makeorder.php">Make order</a></li>
			<li><a href= "adminworkerlist.php">Admin and Worker list</a></li>
			<li><a href= "login.php">Logout</a></li>
			
			</ul>
	</div>
	<div class = 'shopdetailswritten'>
		<table align = 'center'>
			<tr>
				<td>
					Shop Name
				</td>
				<td>
					Daily Super Shop
				</td>
			</tr>
			<tr>
				<td>
					Shop Owners
				</td>
				<td align= 'top'>
					<ul>
						
					</ul>
				</td>
			</tr>
			<tr>
				<td>
					Shop Address
				</td>
				<td>
					City: Dhaka, Country: Bangladesh  
				</td>
			</tr>
			<tr>
				<td>
					Number of Shops
				</td>
				<td>
					1
				</td>
			</tr>
		</table>
	</div>
	</body>
</html>