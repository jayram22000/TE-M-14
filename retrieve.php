<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Data</title>
	
</head>
<body>
	<h1>Restaurant Data</h1>

	<h2>Menu</h2>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Image URL</th>
		</tr>
		<?php
        // Connect to the database
		$servername = "db";
		$username = "data2";
		$password = "zack";
		$dbname = "data2";
		$conn = new mysqli($servername, $username, $password, $dbname);
       
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
        
        

// Retrieve menu data
		$sql = "SELECT * FROM menu";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row["id"] . "</td>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["description"] . "</td>";
				echo "<td>" . $row["price"] . "</td>";
				echo "<td>" . $row["image_url"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "0 results";
		}
		?>
	</table>

</body>        