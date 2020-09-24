<?php session_start(); ?>
<html>

<head>
	<title>Signup </title>
	<link rel="stylesheet" type="text/css" href="styles/SignupDesign.css">
</head>

<body>
	<?php

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
	<img src="../storage/images/signupicon.png" class="avatar">

	<h1 id="sign-up">Sign up</h1>
	<div class="signup-form">
		<form name="myForm" id="myForm" action="" onsubmit="return validateForm(event)" method="post">

			<table>
				<tr>
					<td>First Name</td>
					<td>
						<input type='text' id="name" placeholder='Enter your first name' name='fname' value="">
					</td>
					<td id="msgname">
						<span style="color:red"><?php echo $err_fname; ?></span>
					</td>
				<tr>
				<tr>
					<td>Last Name</td>
					<td>
						<input type='text' id="lName" placeholder='Enter your last name' name='lname' value="">
					</td>
					<td id="lNameMsg">
						<span style="color:red"><?php echo $err_lname; ?> </span>
					</td>
				<tr>
				<tr>
					<td>Phone Number</td>
					<td>
						<input type="text" id="pNumber" placeholder='Enter your phone number' name='phone' value="">
					</td>
					<td id="pNumberMsg">
						<span style="color:red"><?php echo $err_num; ?></span>
					</td>
				<tr>
				<tr>
					<td>Date of Birth</td>
					<td>
						<select name='day'>
							<?php
							for ($i = 1; $i <= 31; $i++)
								echo "<option value = '$i' >$i</option>";
							?>
						</select>
						Day
						<select name='month'>
							<?php
							for ($j = 1; $j <= 12; $j++)
								echo "<option value = '$j' >$j</option>";
							?>
						</select>
						Month
						<select name='year'>
							<?php
							for ($k = 1900; $k <= 2020; $k++)
								echo "<option value = '$k' >$k</option>";
							?>
						</select>
						Year
					</td>
				<tr>
				<tr>
					<td>Address</td>
					<td>
						<input type='text' id="address" placeholder='Enter your address' name='add' value="">
					</td>
					<td id="addressMsg">
						<span style="color:red"><?php echo $err_address; ?></span>
					</td>
				<tr>
				<tr>
					<td>Email</td>
					<td>
						<input type='text' id="email" placeholder='Enter your email address' name='email' value="">
					</td>
					<td id="emailMsg">
						<span style="color:red"><?php echo $err_email; ?></span>
					</td>
				<tr>
				<tr>
					<td>User Type</td>
					<td>
						<select name="usertype" id="usertype">
							<!--<option>Super Admin</option>-->
							<option value='Admin'>Admin</option>
							<option value='Worker'>Worker</option>
						</select>
					</td>
				<tr>
				<tr>
					<td>Username</td>
					<td>
						<input type="text" id="userName" placeholder='Enter your username' name='un' value="">
					</td>
					<td id="userNameMsg">
						<span style="color:red"><?php echo $err_username; ?></span>
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="password" id="pass" placeholder='Enter your password' name='pass' value="">
					</td>
					<td id="passMsg">
						<span style="color:red"><?php echo $err_password; ?></span>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type='submit' value='Signup' name='signup'></td>
				</tr>
			</table>
		</form>
		 <!-- <script src="../js/main.js"></script>  -->

	</div>
</body>

</html>