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
		<title>Accounts</title>
		<link rel="stylesheet" type="text/css" href="styles/AccountsDesign.css">
	</head>
	<body>
	<form action = "" method = "post">
	<div class = "main">
		
			<ul>
			<li class = "active" background = "#fff" color = "#000"><a href= "#">Home</a></li>
			<li><a href= "#">Inventory</a></li>
			<li><a href= "#">Order list</a></li>
			<li><a href= "#">Make order</a></li>
			<li><a href= "#">Accounts</a></li>
			<li><a href= "#">Customer Information</a></li>
			<li><a href= "#">Admin and Worker list</a></li>
			<li><input type="submit" name="submit" value = "Logout"></li>
			</ul>
		</div>
			<span id = 'pageheading'>Accounts</span>
			<div class = "accounts-info">
				<table>
					<tr>
						<td>
							Monthly Sales:
						</td>
					</tr>
					<tr>
						<td>
							Daily Sales:
						</td>
					</tr>
					<tr>
						<td>
							Fixed Cost: <br>
							<ul>
								<li>Worker Salary:</li>
								<li>Utilities:</li>
								<li>Rent:</li>
								<li>Security:</li>
								<li>Shipping:</li>
								<li>Others:</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>
							Variable Cost:
						</td>
					</tr>
					<tr>
						<td>
							Revenue Generated:
						</td>
					</tr>
					<tr>
						<td>
							Profit:
						</td>
					</tr>
					<tr>
						<td>
							Total Year Sales:
						</td>
					</tr>
					<tr>
						<td>
							Revenue of Total Year:
						</td>
					</tr>
					<tr>
						<td>
							Total Profit this Year:
						</td>
					</tr>
				</table>
			</div>
		</form>
	</body>
</html>