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
		<title>Customer Information</title>
		<link rel="stylesheet" type="text/css" href= "styles/customerInfrormationDesing.css">
	</head>
	<body>
	<span id = 'customerinformationheading'>Customer Information</span>
	<form action = "" method = "post">
	<div class = "main">
		
			<ul>
			<li class = "active" background = "#fff" color = "#000"><a href= "admindash.php">Home</a></li>
			<li><a href= "inventory.php">Inventory</a></li>
			<li><a href= "orderlist.php">Order list</a></li>
			<li><a href= "#">Make order</a></li>
			<!--<li><a href= "accounts.php">Accounts</a></li>-->
			<li><a href= "customerinformation.php">Customer Information</a></li>
			<!--<li><a href= "#">Admin and Worker list</a></li>-->
			<li><input type="submit" name="submit" value = "Logout"></li>
			</ul>
	</div>
	
	<div class = "customersearch">
		<table align = 'center'>
			<tr>
				<td>
					Search Customer
				</td>
				<td>
					<input type = "text" name = 'searchbox' size = '60'placeholder = 'Customer name or ID here'>
				</td>
				<td>
					<input type = "submit" name = 'searchbutton' value = 'Search'>
				</td>
			</tr>
		</table>
	</div>
	<span id = 'customerInformationPanel'>Customer Information Panel</span>
	<div class = 'customermenu'>
		<table align = 'center'>
			<tr>
				<td>
					Customer Name:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'productNameInput' size = '45' placeholder = 'Customer Name Here'>
				</td>
			</tr>
			<tr>
				<td>
					Phone Number:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'productBrandInput' size = '45' placeholder = 'Phone Number Here'>
				</td>
			</tr>
			<tr>
				<td>
					Address 01:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'productpriceInput' size = '45' placeholder = 'Address 01 here'>
				</td>
			</tr>
			<tr>
				<td>
					Address 02:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'productpriceInput' size = '45' placeholder = 'Address 02 here'>
				</td>
			</tr>
			<tr>
				<td>
					Email:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'productQuantityInput' size = '45' placeholder = 'Email Here'>
				</td>
			</tr>
			<tr>
				<td>
					Occupation:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'productQuantityInput' size = '45' placeholder = 'Occupation Here'>
				</td>
			</tr>
			<tr>
				<td>
					Gender:
				</td>
				<td></td>
				<td>
					<select>
						<option>Male</option>
						<option>Female</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan = '3' align = 'center'>
					<input type = "submit" name = 'addbutton' value = 'Add'>
					<input type = "submit" name = 'Updatebutton' value = 'Update'>
					<input type = "submit" name = 'deletebutton' value = 'Delete'>
				</td>
			</tr>
		</table>
	</div>
	</form>
	</body>
</html>