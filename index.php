<?php
// Include the database connection file
include_once("config.php");

// Fetch contacts (in descending order)
$result = mysqli_query($mysqli, "SELECT * FROM ISIKUD ORDER BY Isiku_id DESC"); 
?>
<html>
<head>	
	<title>Hääletus-Süsteem</title>
	<link rel="stylesheet" href="styles.css" />
</head>
<body>
	<table>
		<tr>
			<td>Nimi</td>

			<td><a class="button" href="add.php">Add Contact</a></td>
		</tr>
		<?php
		// Print contacts 
		while($res = mysqli_fetch_array($result)) { 		
			echo "<tr>";
			echo "<td>".$res['Isiku_id']."</td>";
			echo "<td>".$res['Nimi']."</td>";
			
			echo "<td><a href=\"edit.php?id=$res[Isiku_id]\">Edit</a> | <a href=\"delete.php?id=$res[Isiku_id]\" onClick=\"return confirm('Are you sure you want to delete this contact?')\">Delete</a></td>";		
		}
		?>
	</table>
</body>
</html>