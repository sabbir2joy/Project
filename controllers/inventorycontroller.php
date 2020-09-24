<?php

	require_once '../models/dbConnection.php';
	
			$pname = "";
			$pbrand = "";
			$pcost = "";
			$pprice = "";
			$pquan = "";
			$porigin = "";
			
			$id = 0;
	
	if(isset($_POST["insertbutton"]))
	{
		insertProduct();
	}
	else if(isset($_GET['edit']))
	{
		$id = $_GET['edit'];
		$query = "SELECT * FROM inventory WHERE id = '$id'";
		$conn = mysqli_connect('localhost', 'root', '', 'dailysupershopdb');
		$result = mysqli_query($conn, $query);
		
		if(mysqli_num_rows($result)==1)
		{
			$row = mysqli_fetch_assoc($result);
			
			$pname = $row['pname'];
			$pbrand = $row['pbrand'];
			$pcost = $row['cost'];
			$pprice = $row['price'];
			$pquan = $row['quan'];
			$porigin = $row['origin'];
		}
		
	}
	if(isset($_POST['updatebutton']))
	{
		$id = $_POST['id'];
		
		$name = $_POST["pn"];
		$brand = $_POST['pb'];
		$cost = $_POST["pc"];
		$price = $_POST["pp"];
		$qty = $_POST["pq"];
		$origin = $_POST["po"];
		
		$query = "UPDATE inventory SET pname='$name', pbrand = '$brand', cost = '$cost', price = '$price', quan = '$qty', origin = '$origin' WHERE id=$id";
		execute($query);
		header("Location:../views/inventory.php");
		
	}
	

	/*function getAllProducts()
	{
		$query ="SELECT * FROM inventory";
		$products = get($query);
		return $products;	
	}
	function getProduct($id)
	{
		$query = "SELECT * FROM inventory WHERE id=$id";
		$product = get($query);
		return $product;
		
	}*/

	function insertProduct()
	{
		$name = $_POST["productNameInput"];
		$brand = $_POST['productBrandInput'];
		$cost =$_POST["productcostInput"];
		$price = $_POST["productpriceInput"];
		$qty = $_POST["productQuantityInput"];
		$origin = $_POST["productoriginInput"];
		
		$query = "INSERT INTO inventory VALUES  (NULL, '$name', '$brand', '$cost', '$price', '$qty', '$origin')";
		
		if(empty($name) || empty($brand) || empty($cost) || empty($price) || empty($qty) || empty($origin))
		{
			header("Location:../views/inventory.php");
		}
		else
		{
			execute($query);
			header("Location: ../views/inventory.php");
		}
		
	}
	function editProduct()
	{
		$name = $_POST["productNameInput"];
		$brand = $_POST['productBrandInput'];
		$cost =$_POST["productcostInput"];
		$price = $_POST["productpriceInput"];
		$qty = $_POST["productQuantityInput"];
		$origin = $_POST["productoriginInput"];
		
		$query="UPDATE inventory SET pname='$name', pbrand = '$brand', cost = $cost', price = $price, quan = $qty, origin = $origin WHERE id=$id";
		execute($query);
		header("Location:../views/inventory.php");
	}
?>