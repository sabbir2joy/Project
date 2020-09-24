<html>
	<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles/LoginDesign.css">
	</head>

	<body>
	
	<?php
	
		include '../models/dbConnection.php';
		//include '../controllers/signupcontroller.php';
		
		$err_uname="";
		$uname="";
		$err_pass="";
		$pass="";
		$err_invalid="";
		$has_error=false;
		
		if(isset($_POST['submit']))
		{
			
			if(empty($_POST['uname']))
			{
				$err_uname="<h6 id = 'errmsgus'>*UserID Required</h6>";
				$has_error = true;
			}
			else
			{
				$uname=$_POST['uname'];
			}
			if(empty($_POST['pass']))
			{
				$err_pass="<h6 id = 'errmsgpass'>*Password Required</h6>";
				$has_error = true;
			}
			else
			{
				$pass=$_POST['pass'];
			}
		
			if(!$has_error)
			{
				$query = "SELECT fname FROM users WHERE username = '$uname' AND password = '$pass'";
				$result = get($query);
			
				if(count($result)>0)
				{
						$rs = $result[0];
						session_start();
						$_SESSION['loggedinuser'] = $uname;
						setcookie("loggedinuser",$rs["name"],time()+600);
						header("Location:admindash.php");
				}
				else
				{
					$err_invalid = "<h6 class = 'invalidmsg' >Invalid UserID Password</h6>";
				}
			}		
			
		}
		
	?>
	
	
		<div class = "loginBox">
			<img src = "../storage/images/user.png" class = "avatar">
			<h1>Login Here</h1>
			<form action = "" method = "post">
			<p>Username</p>
			<input type="text" placeholder = "Enter Username" name="uname" value="<?php echo $uname;?>">
			<br>
			<span style="color:red"><?php echo $err_uname;?></span>
			<p>Password</p>
			<input type="password" placeholder = "Enter Password" name="pass" value="<?php echo $pass;?>">
			<br>
			<span style="color:red"><?php echo $err_pass;?></span>
			<br>
			<br>
			<input type = "submit" name = "submit" value = "Login">
			<br>
			<span style = "color:red"><?php echo $err_invalid;?></span>
			<a href="signup.php">Sign Up</a>
		
		</form>
		</div>
	</body>
</html>