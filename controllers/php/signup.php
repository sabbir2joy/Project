<?php
include_once '../models/dbconnection.php';

	$err_fname = "";
	$fname = "";
	$err_lname = "";
	$lname = "";
	$err_num = "";
	$pnum = "";
	$err_address = "";
	$ad = "";
	$err_email = "";
	$em = "";
	$err_username = "";
	$errmsg_usname="";
	$usname = "";
	$err_password = "";
	$psw = "";
	$err_usertype = "";
	$usertype = "";
	$has_error = false;
	$uNameInDB="";
	$success = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['signup'])) {
			if (empty($_POST['fname'])) {
				$err_fname = "<h4 id = 'errmsgfname'>*First Name Required</h4>";
				$has_error = true;
			} else {
				$fname = $_POST['fname'];
			}

			if (empty($_POST['lname'])) {
				$err_lname = "<h4 id = 'errmsglname'>*Last Name Required</h4>";
				$has_error = true;
			} else {
				$lname = $_POST['lname'];
			}
			if (empty($_POST['phone'])) {
				$err_num = "<h4 id = 'errmsgnum'>*Phone Number Required</h4>";
				$has_error = true;
			} else {
				$pnum = $_POST['phone'];
			}
			if (empty($_POST['add'])) {
				$err_address = "<h4 id = 'errmsgadd'>*Address Required</h4>";
				$has_error = true;
			} else {
				$ad = $_POST['add'];
			}
			if (empty($_POST['email'])) {
				$err_email = "<h4 id = 'errmsgemail'>*Email Required</h4>";
				$has_error = true;
			} else {
				$em = $_POST['email'];
			}

			if (empty($_POST['un'])) {
				$err_username = "<h4 id = 'errmsgun'>*Username Required</h4>";
				$has_error = true;

			} else if(strlen($_POST['un'])<4) {
				$err_username ="<h4 id='errmsgun'>*Username length must be more than 4</h4>";
				$has_error=true;

			}
			else{
				$usname=$_POST['un'];
			}

			if (empty($_POST['pass'])) {
				$err_password = "<h4 id = 'errmsgpass'>*Password Required</h4>";
				$has_error = true;
			}
			else if(strlen($_POST['pass'])<4){
				$err_password= "<h4 id = 'errmsgpass'>*Password length must be more than 4</h4>";
				$has_error = true;
			}

			else {
				$psw = $_POST['pass'];
			}
			if (empty($_POST['usertype'])) {
				$err_usertype = "<h4 id = 'errmsgpass'>*User type Required</h4>";
				$has_error = true;
			} else {
				$usertype = $_POST['usertype'];
			}

			$dob = ($_POST['day']) . "-" . ($_POST['month']) . "-" . ($_POST['year']);

			if ($has_error != true) {
				
				include '../controllers/signupcontroller.php';
				insertInformation($fname, $lname, $pnum, $dob, $ad, $em, $usertype, $usname, $psw);
					
				}				
			}
		}
	
	?>