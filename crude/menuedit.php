<?php include "db.php";

// Retrieve data from the database
  $sql = "SELECT * FROM menu";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Image URL</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<form method='post'>";
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td><input type='text' name='name' value='" . $row["name"] . "'></td>";
        echo "<td><input type='text' name='description' value='" . $row["description"] . "'></td>";
        echo "<td><input type='number' name='price' value='" . $row["price"] . "'></td>";
        echo "<td><input type='text' name='image_url' value='" . $row["image_url"] . "'></td>";
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