<?php include "../header1.php" ?>
<?php include 'db.php' ?>


<style>
table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 20px;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #006699;
  color: white;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

input[type="text"], input[type="number"] {
  padding: 6px;
  border-radius: 4px;
  border: 1px solid #ccc;
  width: 100%;
  box-sizing: border-box;
  margin-bottom: 10px;
}

input[type="submit"] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 8px 16px;
  text-decoration: none;
  margin-right: 10px;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

form {
  display: inline-block;
  margin-bottom: 10px;
}
</style>
<head>
	<title>Update/Delete Data</title>
</head>


	<?php
		
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


<?php
	// Check if form is submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Check if update or delete button was clicked
			if (isset($_POST["update"])) {
				$id = $_POST["id"];
				$quantity = $_POST["quantity"];
				$status = $_POST["status"];
				$sql = "UPDATE `order` SET `quantity`='$quantity',`status`='$status' WHERE `id`='$id'";
				if (mysqli_query($conn, $sql)) {
					echo "Order updated successfully";
				} else {
					echo "Error updating order: " . mysqli_error($conn);
				}
			} elseif (isset($_POST["delete"])) {
				$id = $_POST["id"];
				$sql = "DELETE FROM `order` WHERE `id`='$id'";
				if (mysqli_query($conn, $sql)) {
					echo "Order deleted successfully";
				} else {
					echo "Error deleting order: " . mysqli_error($conn);
				}
			}
		}

		// Retrieve orders data
    $sql = "SELECT * FROM `order`";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Menu ID</th><th>User ID</th><th>Quantity</th><th>Status</th><th>Created At</th><th>Action</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<form method='POST'>";
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['menu_id'] . "</td>";
            echo "<td>" . $row['user_id'] . "</td>";
            echo "<td>" . $row['quantity'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td>" . $row['created_at'] . "</td>";
            echo "<input type='hidden' name='order_id' value='" . $row["id"] . "'>";
            echo "<td>";
            echo "<input type='submit' name='update_order' value='Update'>";
            echo "<input type='submit' name='delete_order' value='Delete'>";
            echo "</td>";
            echo "</tr>";
            echo "</form>";
        }
        echo "</table>";
    } else {
        echo "No orders found";
    }
    
// Check if the form has been submitted for updating an order
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_order"])) {
    $order_id = $_POST["order_id"];
    $quantity = $_POST["quantity"];
    $status = $_POST["status"];

    // Prepare and execute the update statement
    $stmt = $conn->prepare("UPDATE `order` SET quantity=?, status=? WHERE id=?");
    $stmt->bind_param("isi", $quantity, $status, $order_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Order updated successfully.";
    } else {
        echo "Error updating order: " . $stmt->error;
    }

    $stmt->close();
}

// Check if the form has been submitted for deleting an order
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_order"])) {
    $order_id = $_POST["order_id"];

    // Prepare and execute the delete statement
    $stmt = $conn->prepare("DELETE FROM `order` WHERE id=?");
    $stmt->bind_param("i", $order_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Order deleted successfully.";
    } else {
        echo "Error deleting order: " . $stmt->error;
    }

    $stmt->close();
}


// Retrieve menu data
$sql = "SELECT * FROM menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Description</th>";
    echo "<th>Price</th>";
    echo "<th>Image URL</th>";
    echo "<th>Actions</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["description"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "<td>" . $row["image_url"] . "</td>";
        echo "<td>";
        echo "<form method='POST' action='updateordelete.php'>";
        echo "<input type='hidden' name='menu_id' value='" . $row["id"] . "'>";
        echo "<input type='submit' name='edit_menu' value='Edit'>";
        echo "<input type='submit' name='delete_menu' value='Delete'>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
// Close database connection
mysqli_close($conn);


?>

<?php include "..TE-M-14/footer2.php"?>