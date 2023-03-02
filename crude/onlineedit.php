<style>

/* Set the font family and size for all elements */
body{ 
      background-color:none;
      font-family: latha;
      color:whitesmoke;
      background:url(image/food.jpg)no-repeat;
      background-size: cover;
  }
    /* Styles for the form */
  form {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  }

   /* Styles for the form inputs */
  input[type="text"],
  input[type="submit"],
  input[type="hidden"] {
  padding: 10px;
  margin: 5px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  }

  /* Styles for the update button */
  input[name="update_order"] {
  background-color: #4CAF50;
  color: white;
}

/* Styles for the cancel button */
input[name="cancel_order"] {
  background-color: #f44336;
  color: white;
}

/* Media queries for mobile devices */
@media only screen and (max-width: 600px) {
  /* Styles for the div container */
  div {
    padding: 5px;
  }

  /* Styles for the form inputs */
  input[type="text"],
  input[type="submit"],
  input[type="hidden"] {
    padding: 5px;
    margin: 3px;
    font-size: 14px;
  }
}

</style>

<?php include "db.php" ?>
<?php include "../header1.php";

// Check if the form has been submitted
if (isset($_POST['order_id'])) {
    $order_id = $_POST['order_id'];
    $status = $_POST['status'];
  
    // Update the order status in your database
    $sql = "UPDATE order SET status='$status' WHERE id=$order_id";
    $result = $conn->query($sql);
  
    if ($result) {
      // If the update was successful, display a success message
      echo "Order updated successfully";
    } else {
      // If the update failed, display an error message
      echo "Error updating order: " . $conn->error;
    }
  } else if (isset($_POST['cancel_order'])) {
    $order_id = $_POST['order_id'];
  
    // Delete the order from your database
    $sql = "DELETE FROM order WHERE id=$order_id";
    $result = $conn->query($sql);
  
    if ($result) {
      // If the deletion was successful, display a success message
      echo "Order cancelled successfully";
    } else {
      // If the deletion failed, display an error message
      echo "Error cancelling order: " . $conn->error;
    }
  }
  
  // Now display a list of all the orders in your database
  $sql = "SELECT * FROM `order`";
  $result = $conn->query($sql);
  
  if ($result === false) {
    echo "Error: " . $conn->error;
  } else if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
      // Display order details
      echo "<div>";
      echo "Order ID: " . $row["id"]. " - Menu ID: " . $row["menu_id"]. " - User ID: " . $row["user_id"]. " - Quantity: " . $row["quantity"]. " - Status: " . $row["status"]. "<br>";
      echo "<form method='post' action=''>
        <input type='hidden' name='order_id' value='" . $row["id"] . "'>
        <input type='text' name='status' value='" . $row["status"] . "'>
        <input type='submit' name='update_order' value='Update'>
        <input type='submit' name='cancel_order' value='Cancel'>
      </form>";
      echo "</div>";
  
    }
  } else {
    echo "No orders found";
  }
  
  // Close the database connection
  $conn->close();
  ?>
  
  