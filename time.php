<?php include "header1.php" ?>   <!-- universal footer !-->
<style>
      body{
      background-color:none;
      font-family: latha;
      color:white;
      background:url(image/food.jpg)no-repeat;
      background-size: cover;
  }

  <style>
  table {
    border-collapse: collapse;
    width: 100%;
    text-align:center;
    position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  }
  
  th, td {
    text-align: center;
    padding: 8px;
    border: 1px solid black;
  }
  
  th {
    background-color: grey;
  }
  
  button {
    padding: 8px;
    background-color: orange;
    color: grey;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: aqua;
  }
</style>

<body>
	<h1>BOOK time</h1>
	<form method="post" action="">
		<label for="date">Date:</label>
		<input type="date" id="date" name="date" required><br><br>
		<label for="time">Time:</label>
		<input type="time" id="time" name="time" required><br><br>
		<label for="table_number">Table Number:</label>
		<input type="number" id="table_number" name="table_number" required><br><br>
		<label for="guest_number">Number of Guests:</label>
		<input type="number" id="guest_number" name="guest_number" required><br><br>
		<input type="submit" value="Submit">
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
  
if(isset($_POST['submit'])){
	$date = $_POST['date'];
	$time = $_POST['time'];
	$table_number = $_POST['table_number'];
	$guest_number = $_POST['guest_number'];
}
  // Create SQL statement
  $sql = "INSERT INTO booktime(name, time, table_number,guest_number) VALUES ('$name', '$time', '$table_number'$guest_number')";
  // Execute SQL statement and check for errors
  if ($conn->query($sql) === TRUE) {
      echo "booking has been succesful";
  } else{
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  // Close database connection
  $conn->close();
}
?>
<?php include "footer2.php"?>