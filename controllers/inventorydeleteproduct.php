<?php

	require '../models/dbConnection.php';
	$row = $_GET['id'];
	$query = "DELETE FROM inventory WHERE id = '$row'";
	$data = execute($query);
	header("Location: ../views/inventory.php");

?>

