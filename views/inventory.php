<html>

	<head>
		<title>Inventory</title>
		<link rel="stylesheet" type="text/css" href= "styles/inventoryDesign.css">
	</head>
	<body>
	<span id = 'inventoryheading'>Inventory</span>
	<form method = "post" action="../controllers/inventorycontroller.php">
	<div class = "main">
		
			<ul>
			<li><a href= "admindash.php">Home</a></li>
			<li><a href= "inventory.php">Inventory</a></li>
			<li><a href= "makeorder.php">Make order</a></li>
			<li><a href= "adminworkerlist.php">Admin and Worker list</a></li>
			<li><a href= "login.php">Logout</a></li>
			</ul>
	</div>
	
	<?php
	
		require_once '../controllers/inventorycontroller.php';
		
		$err_name = "";
		$name= "";
		$err_brand = "";
		$brand = "";
		$err_cost = "";
		$cost = "";
		$err_price = "";
		$price = "";
		$err_qty = "";
		$qty = "";
		$err_org = "";
		$org = "";
		$has_error = false;
		
		if(isset($_POST['insertbutton']))
		{
			if(empty($_POST['productNameInput']))
			{
				$err_name="<h6 id = 'errmsgus'>*Product Name Required</h6>";
				$has_error = true;
			}
			else
			{
				$name=$_POST['productNameInput'];
			}
			
			if(empty($_POST['productNameInput']))
			{
				$err_brand="<h6 id = 'errmsgus'>*Brand Name Required</h6>";
				$has_error = true;
			}
			else
			{
				$brand = $_POST['productBrandInput'];
			}
			
			if(empty($_POST['productcostInput']))
			{
				$err_cost="<h6 id = 'errmsgus'>*Cost Required</h6>";
				$has_error = true;
			}
			else
			{
				$cost = $_POST['productcostInput'];
			}
			
			if(empty($_POST['productpriceInputInput']))
			{
				$err_price="<h6 id = 'errmsgus'>*Price Required</h6>";
				$has_error = true;
			}
			else
			{
				$price = $_POST['productpriceInputInput'];
			}
			
			if(empty($_POST['productQuantityInput']))
			{
				$err_qty = "<h6 id = 'errmsgus'>*Quantity Required</h6>";
				$has_error = true;
			}
			else
			{
				$qty = $_POST['productQuantityInput'];
			}
			
			if(empty($_POST['productoriginInput']))
			{
				$err_org = "<h6 id = 'errmsgus'>*Origin Required</h6>";
				$has_error = true;
			}
			else
			{
				$org = $_POST['productoriginInput'];
			}
			
			
		}
	
		
	?>
	
	<span id = 'productinsertupdatedelete'>Inventory Control Panel</span>
	<div class = 'productaddingmenu'>
		<table align = 'center'>
			<tr>
				<td>
					Product Name:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'productNameInput' size = '45' placeholder = 'New product Name Here' value = "<?php echo $name;?>"> <?php echo $err_name;?>
				</td>
			</tr>
			<tr>
				<td>
					Product Brand:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'productBrandInput' size = '45' placeholder = 'New product Brand Here' value = '<?php echo $brand;?>'> <?php echo $err_brand;?>
				</td>
			</tr>
			<tr>
				<td>
					Buying Cost per Unit:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'productcostInput' size = '45' placeholder = 'New product Cost Here in Taka' value = '<?php echo $cost;?>'> <?php echo $err_cost;?>
				</td>
			</tr>
			<tr>
				<td>
					Selling Price per Unit:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'productpriceInput' size = '45' placeholder = 'New product Price Here in Taka' value = '<?php echo $price;?>'> <?php echo $err_price;?>
				</td>
			</tr>
			<tr>
				<td>
					Product Quantity:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'productQuantityInput' size = '45' placeholder = 'New product quantity Here' value = '<?php echo $qty;?>'> <?php echo $err_qty;?>
				</td>
			</tr>
			<tr>
				<td>
					Product Origin:
				</td>
				<td></td>
				<td>
					<input type = 'text' name = 'productoriginInput' size = '45' placeholder = 'New product quantity Here' value = '<?php echo $org;?>'> <?php echo $err_org;?>
				</td>
			</tr>
			<tr>
				<td colspan = '3' align = 'center'>
					<input type = "submit" name = 'insertbutton' value = 'Insert'>
				</td>
			</tr>
		</table>
	</div>
	
	<div class = "dbtable">
		<table class="table">
		<thead>
			<th>ID</th>
			<th> Name</th>
			<th> Brand</th>
			<th> Cost</th>
			<th> Price</th>
			<th> Quantity</th>
			<th> Origin</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
			
				$q = "SELECT * FROM inventory";
				$con = mysqli_connect('localhost', 'root', '', 'dailysupershopdb');
				$result = mysqli_query($con, $q);
				
				if(mysqli_num_rows($result) > 0)
				{
					while($product = mysqli_fetch_assoc($result))
					{
						echo "<tr>";
							echo "<td>".$product["id"]."</td>";
							echo "<td>".$product["pname"]."</td>";
							echo "<td>".$product["pbrand"]."</td>";
							echo "<td>".$product["cost"]."</td>";
							echo "<td>".$product["price"]."</td>";
							echo "<td>".$product["quan"]."</td>";
							echo "<td>".$product["origin"]."</td>";
							echo '<td><a href="editproduct.php?edit='.$product["id"].'" class="ebtn">Edit</a></td>';
							echo '<td><a href="../controllers/inventorydeleteproduct.php?id='.$product["id"].'" class="dbtn">Delete</a></td>';
						echo "</tr>";															
					}
				}
				
				mysqli_close($con);
			
				
				
			?>
			
		</tbody>
	</table>
	</div>
	</form>
	</body>
</html>