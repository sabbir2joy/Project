<?php
	
	/*session_start();

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
		}*/
	?>
<html>
	<head>
		<title>Order List</title>
		<link rel="stylesheet" type="text/css" href= "styles/orderListDesign.css">
	</head>
	<body>
	<span id = 'orderListheading'>Order List</span>
	<form action = "" method = "post">
	<div class = "main">
		
		<ul>
			<li class = "active" background = "#fff" color = "#000"><a href= "admindash.php">Home</a></li>
			<li><a href= "inventory.php">Inventory</a></li>
			<li><a href= "orderlist.php">Order list</a></li>
			<li><a href= "#">Make order</a></li>
			<li><a href= "accounts.php">Accounts</a></li>
			<li><a href= "customerinformation.php">Customer Information</a></li>
			<li><a href= "#">Admin and Worker list</a></li>
			<li><input type="submit" name="submit" value = "Logout"></li>
		</ul>
	</div>
	
	<div class = "orderSearch">
		<table align = 'center'>
			<tr>
				<td>
					Search Order
				</td>
				<td>
					<input type = "text" name = 'searchbox' size = '60'placeholder = 'order ID here'>
				</td>
				<td>
					<input type = "submit" name = 'searchbutton' value = 'Search'>
				</td>
			</tr>
		</table>
	</div>
	</form>
	</body>
</html>