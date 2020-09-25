<html>

	<head>
		<title>Edit Product</title>
		<link rel="stylesheet" type="text/css" href= "styles/inventoryDesign.css">
	</head>
	<body>
	<span id = 'inventoryheading'>Edit Product</span>
	
	<form method = "post" action="../controllers/inventorycontroller.php">
	<div class = "main">
		
			<ul>
			<li><a href= "admindash.php">Home</a></li>
			<li><a href= "inventory.php">Inventory</a></li>
			<li><a href= "makeorder.php">Make order</a></li>
			<li><a href= "adminworkerlist.php">Admin and Worker list</a></li>
			<li><a href= "logout.php">Logout</a></li>
			</ul>
	</div>
	
	<?php
	
		require_once '../controllers/inventorycontroller.php';
		
		$pid = $_GET['edit'];

		
	?>
	
	<input type = "hidden" name = "id" value = "<?php echo $pid; ?>">
	<span id = 'productinsertupdatedelete'>Update Information</span>
	<div class = 'productaddingmenu'>
		<table align = 'center'>
			<tr>
				<td>
					Product Name:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'pn' size = '45' placeholder = 'New product Name Here' value = "<?php echo $pname;?>">
				</td>
			</tr>
			<tr>
				<td>
					Product Brand:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'pb' size = '45' placeholder = 'New product Brand Here' value = '<?php echo $pbrand;?>'>
				</td>
			</tr>
			<tr>
				<td>
					Buying Cost per Unit:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'pc' size = '45' placeholder = 'New product Cost Here in Taka' value = '<?php echo $pcost;?>'>
				</td>
			</tr>
			<tr>
				<td>
					Selling Price per Unit:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'pp' size = '45' placeholder = 'New product Price Here in Taka' value = '<?php echo $pprice;?>'>
				</td>
			</tr>
			<tr>
				<td>
					Product Quantity:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'pq' size = '45' placeholder = 'New product quantity Here' value = '<?php echo $pquan;?>'>
				</td>
			</tr>
			<tr>
				<td>
					Product Origin:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'po' size = '45' placeholder = 'New product quantity Here' value = '<?php echo $porigin;?>'>
				</td>
			</tr>
			<tr>
				<td colspan = '3' align = 'center'>
					<input type = "submit" name = 'updatebutton' value = 'Update'>
				</td>
			</tr>
		</table>
	</div>
	
	</form>
	</body>
</html>