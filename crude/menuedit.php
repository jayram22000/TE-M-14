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
<style>
table {
  border-collapse: collapse;
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
}

th, td {
  text-align: left;
  padding: 8px;
  
}

th {
  background-color: #f2f2f2;
  color:black;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

input[type="text"], input[type="number"] {
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  width: 100%;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

@media screen and (max-width: 600px) {
  input[type="submit"] {
    width: 100%;
    margin-bottom: 5px;
  }
}
</style>

<?php

// Retrieve data from the database
  $sql = "SELECT * FROM menu";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Image URL</th><th>Action</th></tr>";
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
  <?php include "../footer2.php" ?>