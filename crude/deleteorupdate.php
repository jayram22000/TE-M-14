<?php include "../header1.php" ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Form</title>
</head>
	<style>

body{
      background-color:none;
      font-family: latha;
      color:whitesmoke;
      background:url(../image/food.jpg)no-repeat;
      background-size: cover;
  }

		/* Style the form for mobile devices */
@media only screen and (max-width: 600px) {
  /* Center the form */
  form {
margin: 1 auto;
max-width: 300px; 
float:center;
  }
  
  /* Style the input fields */
  input[type="text"], input[type="number"], input[type="email"], input[type="tel"], input[type="date"], textarea {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
  }

  /* Style the submit button */
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
}
</style>

<body>
	<h1>Restaurant Form</h1>
	<h2>Menu</h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br>
		<label for="description">Description:</label>
		<textarea id="description" name="description"></textarea><br>
		<label for="price">Price:</label>
		<input type="number" id="price" name="price"><br>
		<label for="image_url">Image URL:</label>
		<input type="text" id="image_url" name="image_url"><br>
		<input type="delete " name="delete_submit" value="Submit">
        <input type="update " name="update_submit" value="Submit">
	</form>

	<h2>Order</h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="menu_id">Menu ID:</label>
		<input type="number" id="menu_id" name="menu_id"><br>
		<label for="user_id">User ID:</label>
		<input type="number" id="user_id" name="user_id"><br>
		<label for="quantity">Quantity:</label>
		<input type="number" id="quantity" name="quantity"><br>
		<label for="status">Status:</label>
		<input type="text" id="status" name="status"><br>
		<label for="created_at">created_at:</label>
		<input type="created_at" id="created_at" name="created_at"><br>
        <input type="delete " name="delete_submit" value="Submit">
        <input type="update " name="update_submit" value="Submit">

		
	</form>

	<h2>Reservation</h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br>
		<label for="phone">Phone:</label>
		<input type="tel" id="phone" name="phone"><br>
		<label for="date">Date:</label>
		<input type="date" id="date" name="date"><br>
		<input type="delete " name="delete_submit" value="Submit">
        <input type="update " name="update_submit" value="Submit">
	</form>
    <?php
// Connect to the database
$servername = "db";
$username = "data2";
$password = "zack";
$dbname = "data2";
//creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";


?>
  <?php
    // Update menu item
if(isset($_POST['menu_update'])){
    $menu_id = $_POST['menu_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];
    
    $sql = "UPDATE menu SET name='$name', description='$description', price='$price', image_url='$image_url' WHERE id='$menu_id'";
    
    if(mysqli_query($conn, $sql)){
        echo "Menu item updated successfully.";
    } else{
        echo "Error updating menu item: " . mysqli_error($conn);
    }
}

// Delete menu item
if(isset($_POST['menu_delete'])){
    $menu_id = $_POST['menu_id'];
    
    $sql = "DELETE FROM menu WHERE id='$menu_id'";
    
    if(mysqli_query($conn, $sql)){
        echo "Menu item deleted successfully.";
    } else{
        echo "Error deleting menu item: " . mysqli_error($conn);
    }
}
?>