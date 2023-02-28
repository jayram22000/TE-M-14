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
    <!-- added an order section -->
    <h2>Orders</h2>
	<table>
		<tr>
			<th>ID</th>
			<th>Menu ID</th>
			<th>User ID</th>
			<th>Quantity</th>
			<th>Status</th>
			<th>Created At</th>
		</tr>

        <?php
		// Retrieve orders data
		$sql = "SELECT * FROM order";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row["id"] . "</td>";
				echo "<td>" . $row["menu_id"] . "</td>";
				echo "<td>" . $row["user_id"] . "</td>";
				echo "<td>" . $row["quantity"] . "</td>";
				echo "<td>" . $row["status"] . "</td>";
				echo "<td>" . $row["created_at"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "0 results";
		}
		?>
	</table>

    <h2>Reservation</h2>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Date</th>
		</tr>
        <?php
		// Retrieve orders data
		$sql = "SELECT * FROM reservation";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
                echo "<td>". $row["id"] . "<br>";
                echo "<td>". $row["name"] . "<br>";
                echo "<td>". $row["email"] . "<br>";
                echo "<td>".$row["phone"] . "<br>";
                echo "<td>". $row["date"] . "<br><br>";
            }
        } else {
            echo "No reservation found.";
        }
         // Close database connection
         mysqli_close($conn);
         ?>
</body>  
</html>      