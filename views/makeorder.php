<?php
		require_once "../controllers/makeordercontrollersearch.php";
		require_once "../models/dbConnection.php";
		
		session_start();
		//$connect = mysqli_connect("loaclhost", "root", "", "dailysupershopdb");
		if(isset($_POST["addtocart"]))
		{
			if(isset($_SESSION["shopping_cart"]))
			{
				$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
				if(!in_array($_GET["id"], $item_array_id))
				{
					$count = count($_SESSION["shopping_cart"]);
					$item_array = 
					array(
					'item_id' => $_GET['id'],
					'item_name' => $_POST['hidden_name'],
					'item_price' => $_POST['hidden_price'],
					'item_quantity' => $_POST['productquan']
					);
					$_SESSION["shopping_cart"][$count] = $item_array;
				}
				else
				{
					echo '<script>alert("Item Already Added")</script>';
					echo '<script>window.location="makeorder.php"</script>';
				}
			}
			else
			{
				$item_array = array(
					'item id' => $_GET['id'],
					'item_name' => $_POST['hidden_name'],
					'item_price' => $_POST['hidden_price'],
					'item_quantity' => $_POST['productquan'],
				
				);
					$_SESSION["shopping_cart"][0] = $item_array;
			}
		}
	?>
	<head>
		<title>Make Order</title>
		<link rel="stylesheet" type="text/css" href= "styles/makeOrderDesign.css">
		<script>
		function search()
			{
				var xhttp = new XMLHttpRequest();
				var search_txt = document.getElementById("searchbox").value;
				
				xhttp.onreadystatechange = function()
				{
					if(xhttp.readyState == 4 && xhttp.status == 200)
					{
							document.getElementById("search_result").innerHTML=xhttp.responseText;
					}
					
				}
				xhttp.open("GET","../controllers/makeordercontrollersearch.php?key="+search_txt,true);
				xhttp.send();
			}
		
		</script>
	</head>
	<body>
	<span id = 'makeorderheading'>Make Order</span>
	<div class = "main">
		
			<ul>
			<li><a href= "admindash.php">Home</a></li>
			<li><a href= "inventory.php">Inventory</a></li>
			<li><a href= "makeorder.php">Make order</a></li>
			<li><a href= "adminworkerlist.php">Admin and Worker list</a></li>
			<li><a href= "login.php">Logout</a></li>
			</ul>
	</div>
	
	<form method="post" action="makeorder.php?action=add&id=<?php echo $product["id"]; ?>">
	<div class = "searchInventorybar">
		<table align = 'center'>
			<tr>
				<td>
					Search Product
				</td>
				<td>
					<input type ="text" onkeyup = "return search()" id="searchbox" size = '60' placeholder="Write Name">
					<div id="search_result">
				</td>
			</tr>
		</table>
	</div>
	<div class = "addproducttable">
		<table align="center">
		<tr>
			<td>Product Id</td>
			<td>Product Name</td>
			<td>Quantity</td>
			<td>Price</td>
			<td>Add Item</td>	
		</tr>
		
		<?php
			
				if(isset($_GET['id']))
				{
					$pid = $_GET['id'];
			
					$q = "SELECT * FROM inventory WHERE id = '$pid'";
					$con = mysqli_connect('localhost', 'root', '', 'dailysupershopdb');
					$result = mysqli_query($con, $q);
				
						if(mysqli_num_rows($result) > 0)
						{
							while($product = mysqli_fetch_assoc($result))
							{
								echo "<tr>";
									echo "<td>".$product["id"]."</td>";
									echo "<td>".$product["pname"]."</td>";
									echo "<td id='quanbox'><input type = 'text' value = '1' name = 'productquan' id = 'productQuan'></td>";
									echo "<td>".$product["price"]."</td>";
									echo "<td><input type = 'submit' name = 'addtocart' value = 'Add To Cart'></td>";
									echo "<td> <input type = 'hidden' name= 'hidden_name' value = ".$product["pname"]."></td>";
									echo "<td> <input type = 'hidden' name= 'hidden_price' value = ".$product["price"]."></td>";
								echo "</tr>";															
							}
						}
				
					mysqli_close($con);
					
				}
		?>
		
	</div>
	<div class = "addproducttable2">
	<table align="center">
		<tr>
			<td>Product Id</td>
			<td>Product Name</td>
			<td>Quantity</td>
			<td>Price</td>
			<td>Remove Item</td>	
		</tr>
				
		<?php
		
			if(!empty($_SESSION["shopping_cart"]))
			{
				$total = 0;
				foreach($_SESSION["shopping_cart"] as $keys => $values)
				{
		?>
					<tr>
						<td><?php echo $values["item_id"];?></td>
						<td><?php echo $values["item_name"];?></td>
						<td><?php echo $values["item_quantity"];?></td>
						<td><?php echo number_format($values["item_quantity"] * $values["item_price"]);?></td>
						<td><a href = "makeorder.php?action=delete&id=<?php $values["item_id"];?>">Remove</a></td>
					</tr>
		
		<?php
		
			$total = $total + ($values["item_quantity"]*$values["item_price"]);
				}
		?>			<tr>
						<td colspan="3" align="right">Total</td>
						<td align = "right"> <?php echo number_format($total)?> </td>
						<td></td>
					</tr>
			<?php }?>
	</table>
	</div>
	</body>

	
</html>