<?php include "db.php";?> 
<style>
	table {
		width: 100%;
		margin-bottom: 1rem;
		color: #212529;
	}
	th,
	td {
		padding: 0.75rem;
		vertical-align: top;
		border-top: 1px solid #dee2e6;
	}
	th {
		background-color: #f8f9fa;
		font-weight: 700;
	}
	tr:nth-child(even) {
		background-color: #f2f2f2;
	}
	form {
		display: inline;
	}
	input[type="submit"] {
		background-color: transparent;
		color: #007bff;
		border: none;
		cursor: pointer;
	}
	input[type="submit"]:hover {
		text-decoration: underline;
	}
</style>
<?php include "db.php";

		// Check if form is submitted
		if(isset($_POST['submit'])) {
			$id = $_POST['id'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];

			// Update data in the database
			$sql = "UPDATE reservation SET name='$name', email='$email', phone='$phone' WHERE id=$id";
			if (mysqli_query($conn, $sql)) {
				echo "Record updated successfully";
			} else {
				echo "Error updating record: " . mysqli_error($conn);
			}
		}

		// Check if delete button is pressed
		if(isset($_POST['delete'])) {
			$id = $_POST['id'];

			// Delete data from the database
			$sql = "DELETE FROM reservation WHERE id=$id";
			if (mysqli_query($conn, $sql)) {
				echo "Record deleted successfully";
			} else {
				echo "Error deleting record: " . mysqli_error($conn);
			}
		}

		// Retrieve data from the database
		$sql = "SELECT * FROM reservation";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "<table>";
			echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Action</th></tr>";
			while($row = mysqli_fetch_assoc($result)) {
				echo "<form method='post'>";
				echo "<tr>";
				echo "<td>" . $row["id"] . "</td>";
				echo "<td><input type='text' name='name' value='" . $row["name"] . "'></td>";
				echo "<td><input type='text' name='email' value='" . $row["email"] . "'></td>";
				echo "<td><input type='text' name='phone' value='" . $row["phone"] . "'></td>";
				echo "<td>";
				echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
				echo "<input type='submit' name='submit' value='Update'>";
				echo "<input type='submit' name='delete' value='Delete'>";
				echo "</td>";
				echo "</tr>";
				echo "</form>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}

		// Close database connection
		mysqli_close($conn);
	?>




