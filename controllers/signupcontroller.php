<?php

require_once '../models/dbConnection.php';

if (isset($_POST["signup"])) {
	insertInformation();
}

function insertInformation()
{
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$phone = $_POST["phone"];
	$dob = $_POST["day"] . $_POST["month"] . $_POST["year"];
	$address = $_POST["add"];
	$email = $_POST["email"];
	$usertype = $_POST["usertype"];
	$username = $_POST["un"];
	$password = $_POST["pass"];


	if (empty($fname) || empty($lname) || empty($phone) || empty($dob) || empty($address) || empty($email) || empty($usertype) || empty($username || empty($password))) {
		header("Location:../views/signup.php?error = Empty Form");
	} else {
		$query = "INSERT INTO users VALUES(NULL,'$fname','$lname', '$phone', '$dob','$address', '$email', '$usertype','$username', '$password')";
		execute($query);
		header("Location:../views/login.php?");
	}
}
