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
		<title>Shop History</title>
		<link rel="stylesheet" type="text/css" href= "styles/ShopHistoryDesign.css">
	</head>
	<body>
	<span id = 'shophistoryheading'>Shop Details</span>
	<div class = "main">
		
			<ul>
			<li><a href= "admindash.php">Home</a></li>
			<li><a href= "inventory.php">Inventory</a></li>
			<li><a href= "makeorder.php">Make order</a></li>
			<li><a href= "adminworkerlist.php">Admin and Worker list</a></li>
			<li><a href= "login.php">Logout</a></li>
			</ul>
	</div>
	<div class = 'shophistorywritten'>
		<table align = 'center'>
			<tr>
				<td>
					How the company was found
				</td>
			</tr>
			<tr>
				<td>
					<p>
					In 2018 Obaidul Khan Atif came up with the idea of opening a shop that will serve daily necessaries to the local customers.
					He presented the idea to Md Rittique Alam and Hasan Mahmud and three of them then started their journey as auntrapranors. They started
					their business with a very low amount of innitial investment but they were relentless and determined to succeed. And after that they
					worked day and night for the company. During the struggling period Kazi Maruf joint them as a partner of the company now four of them
					started working together. Their business kept growing and in this time Obaidul Khan Nasif joint them as their fifth and final partner. 
					Still now they all are working together as a team to make Daily Super Shop one of the leading shop chains of Bangladesh.
					</p>
				</td>
			</tr>
			<tr>
				<td>
					Shop Owner Designation
				</td>
			</tr>
			<tr>
				<td align= 'top'>
					<ul>
						<li>Md Rittique Alam, Managing Director</li>
						<li>Obaidul Islam Atif, Cheif Executive Officer</li>
						<li>Obaidul Islam Nasif, Public Relations Officer</li>
						<li>Hasan Mahmud, Head of Accounts</li>
						<li>Kazi Maruf, Investing Partner</li>
					</ul>
				</td>
			</tr>
		
		</table>
	</div>
	</body>
</html>