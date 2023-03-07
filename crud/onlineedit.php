<?php include "../header1.php" ?>   <!-- universal footer !-->
<?php include "db.php";?> 
<style>

body{
      background-color:none;
      font-family: latha;
      color:white;
      background:url(../image/food.jpg)no-repeat;
      background-size: cover;
  }
/* For small screens */
@media (max-width: 768px) {
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  th {
    background-color: #f2f2f2;
    color: #333;
  }
  form {
    display: inline-block;
    margin: 0;
    padding: 0;
  }
  input[type="text"], input[type="submit"] {
    display: block;
    width: 100%;
    margin: 0;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
}

/* For large screens */
@media (min-width: 769px) {
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 2px solid #ddd;
  }
  th {
    background-color: #f2f2f2;
    color: #333;
  }
  form {
    display: inline-block;
    margin: 0;
    padding: 0;
  }
  input[type="text"], input[type="submit"] {
    display: inline-block;
    width: auto;
    margin: 0;
    padding: 12px;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
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
