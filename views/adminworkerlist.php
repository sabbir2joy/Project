<html>
	<head>
		<title>Admin and Worker List</title>
		<link rel="stylesheet" type="text/css" href= "styles/adminWorkerListDesign.css">
	</head>
	<body>
	<span id = 'adminworkerheading'>Admin and Worker List</span>
	<form method = "post" action="">
	<div class = "main">
		
			<ul>
			<li><a href= "admindash.php">Home</a></li>
			<li><a href= "inventory.php">Inventory</a></li>
			<li><a href= "makeorder.php">Make order</a></li>
			<li><a href= "adminworkerlist.php">Admin and Worker list</a></li>
			<li><a href= "login.php">Logout</a></li>
			</ul>
	</div>
	
	<div class = "awtable">
		<table>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Phone</th>
				<th>Date of Birth</th>
				<th>Address</th>
				<th>Email</th>
			</tr>
			<?php
			
				$q = "SELECT * FROM users";
				$conn = mysqli_connect('localhost', 'root', '', 'dailysupershopdb');
				$result = mysqli_query($conn, $q);
				
				if(mysqli_num_rows($result) > 0)
				{
					while($aw = mysqli_fetch_assoc($result))
					{
						echo "<tr>";
							echo "<td>".$aw["id"]."</td>";
							echo "<td>".$aw["fname"]."</td>";
							echo "<td>".$aw["lname"]."</td>";
							echo "<td>".$aw["phone"]."</td>";
							echo "<td>".$aw["dob"]."</td>";
							echo "<td>".$aw["address"]."</td>";
							echo "<td>".$aw["email"]."</td>";
						echo "</tr>";															
					}
				}
				
				mysqli_close($conn);
			?>
		</table>
	</div>
	</body>
</html>