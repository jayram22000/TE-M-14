<?php include "../header1.php" ?>   <!-- universal footer !-->
<?php include "db.php";?> 
<style>

/* Set the font family and size for all elements */
body{ 
      background-color:none;
      font-family: latha;
      color:whitesmoke;
      background:url(image/food.jpg)no-repeat;
      background-size: cover;
  }
  table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #333;
  color: white;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

input[type='text'], input[type='number'] {
  width: 100%;
  padding: 8px;
  margin: 5px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type='submit'] {
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  padding: 8px 16px;
  transition: background-color 0.3s;
}

input[type='submit']:hover {
  background-color: #3e8e41;
}

 </style>
 <?php


  // Check if update or cancel button is clicked
  if(isset($_POST["update_order"])) {
    // Update order status in the database
    $order_id = $_POST["order_id"];
    $status = $_POST["status"];
    $sql = "UPDATE `order` SET status='$status' WHERE id='$order_id'";
    if (mysqli_query($conn, $sql)) {
      echo "Order status updated successfully";
    } else {
      echo "Error updating order status: " . mysqli_error($conn);
    }
  } else if(isset($_POST["cancel_order"])) {
    // Cancel order in the database
    $order_id = $_POST["order_id"];
    $sql = "DELETE FROM `order` WHERE id='$order_id'";
    if (mysqli_query($conn, $sql)) {
      echo "Order cancelled successfully";
    } else {
      echo "Error cancelling order: " . mysqli_error($conn);
    }
  }

  // Retrieve data from the database
  $sql = "SELECT * FROM `order`";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
  
    echo "<table>";
    echo "<tr><th>Order ID</th><th>Menu ID</th><th>User ID</th><th>Quantity</th><th>Status</th><th>Action</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
      // Display order details
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["menu_id"] . "</td>";
      echo "<td>" . $row["user_id"] . "</td>";
      echo "<td>" . $row["quantity"] . "</td>";
      echo "<td><form method='post' action=''>
            <input type='hidden' name='order_id' value='" . $row["id"] . "'>
            <input type='text' name='status' value='" . $row["status"] . "'>
            <input type='submit' name='update_order' value='Update'>
            </form></td>";
      echo "<td><form method='post' action=''>
            <input type='hidden' name='order_id' value='" . $row["id"] . "'>
            <input type='submit' name='cancel_order' value='Cancel'>
            </form></td>";
      echo "</tr>";
    }
    echo "</table>";
  }   
  ?> 
  <?php include "../footer2.php" ?>
