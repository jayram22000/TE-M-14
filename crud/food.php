<?php include "../header1.php" ?>   <!-- universal footer !-->
<style>
      body{
      background-color:none;
      font-family: latha;
      color:white;
      background:url(../image/food.jpg)no-repeat;
      background-size: cover;
  }

</style>
<body>

	<h2>Order food</h2>

	<form method="post" action="food.php">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required><br><br>

		<label for="description">Description:</label>
		<textarea name="description" id="description" required></textarea><br><br>

		<label for="price">Price:</label>
		<input type="number" name="price" id="price" required><br><br>

		<label for="image_url">Image URL:</label>
		<input type="text" name="image_url" id="image_url" required><br><br>

		<input type="submit" name="submit" value="order">
	</form>
    <?php
if(isset($_POST['submit'])) {
    // Connect to the database
    $servername = "db";
    $username = "data2";
    $password = "zack";
    $dbname = "data2";
    //creating connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Get form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];
    // Create SQL statement
    $sql = "INSERT INTO menu (name, description, price, image_url) VALUES ('$name', '$description', '$price', '$image_url')";
    // Execute SQL statement and check for errors
    if ($conn->query($sql) === TRUE) {
        echo "Food has been ordered";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Close database connection
    $conn->close();
}
?>
</body>
<?php include "../footer2.php" ?>
