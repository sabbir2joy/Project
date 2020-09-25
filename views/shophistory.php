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
		<title>Shop History</title>
		<link rel="stylesheet" type="text/css" href= "styles/ShopHistoryDesign.css">
	</head>
	<body>
	<span id = 'shophistoryheading'>Shop Details</span>
	<div class = "main">
		
			<ul>
			<li><a href= "admindash.php">Home</a></li>
			<li><a href= "inventory.php">Inventory</a></li>
			<li><a href= "makeorder.php">Make order</a></li>
			<li><a href= "adminworkerlist.php">Admin and Worker list</a></li>
			<li><a href= "logout.php">Logout</a></li>
			</ul>
	</div>
	<div class = 'shophistorywritten'>
		<table align = 'center'>
			<tr>
				<td>
					How the company was found
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					Shop Owner Designation
				</td>
			</tr>
			<tr>
				<td align= 'top'>
					<ul>
						
					</ul>
				</td>
			</tr>
		
		</table>
	</div>
	</body>
</html>