
<?php

	//require_once '../views/styles/makeOrderDesign.css';

	if(isset($_GET["key"]))
	{
		$key = $_GET["key"];
	
		$conn = mysqli_connect("localhost", "root", "", "dailysupershopdb");
		$query = "SELECT pname, id FROM inventory WHERE pname LIKE '%$key%' ";
		$rs = mysqli_query($conn,$query);
	
		echo "<table>";	
			while($row = mysqli_fetch_assoc($rs))
			{		
				echo "<tr>";
			
					echo '<td id = "link" ><a href="../views/makeorder.php?id='.$row["id"].'">'.$row["pname"].'</a></td>';
				
				echo "</tr>";
			}
		
		echo "</table>";
	}
	
?>

