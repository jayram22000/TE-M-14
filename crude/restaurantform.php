<?php include "../header1.php" ?> 
<?php include "../filter.php"; ?>


<head>
	<title>Restaurant Form</title>
	<style>
		body {
			background-color: none;
			font-family: latha;
			color: whitesmoke;
			background: url(../image/food.jpg) no-repeat;
			background-size: cover;
		}
		
		form {
			max-width: 600px;
			margin: 0 auto;
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		
		/* Style the input fields */
		input[type="text"],
		input[type="number"],
		input[type="email"],
		input[type="tel"],
		input[type="date"],
		textarea {
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
		
		/* Three container tables for mobile */
		@media only screen and (max-width: 600px) {
			form {
				max-width: 300px;
			}
			.container {
				display: flex;
				flex-direction: column;
				align-items: center;
			}
			.container > * {
				width: 100%;
			}
			.container:nth-child(1) {
				order: 2;
			}
			.container:nth-child(2) {
				order: 1;
			}
			.container:nth-child(3) {
				order: 3;
			}
		}
	</style>
</head>

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
		<input type="submit" name="menu_submit" value="Submit">
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
		<input type="submit" name="order_submit" value="Submit">
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
		<input type="submit" name="reservation_submit" value="Submit">
	</form>

	<?php
		
	// Connect to the database
$servername = "db";
$username = "data2";
$password = "zack";
$dbname = "data2";
//creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		// Handle menu form 
		if (isset($_POST['menu_submit'])) {
			$name = $_POST['name'];
			$description = $_POST['description'];
			$price = $_POST['price'];
			$image_url = $_POST['image_url'];

			$sql = "INSERT INTO menu (name, description, price, image_url) VALUES ('$name', '$description', '$price', '$image_url')";

			if (mysqli_query($conn, $sql)) {
				echo "Menu record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}

      // Handle order form 
     if (isset($_POST['order_submit'])) {
    $menu_id = $_POST['menu_id'];
    $user_id = $_POST['user_id'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];
   
 // Use a default value for created_at if it is not set in $_POST
 $created_at = isset($_POST['created_at']) ? $_POST['created_at'] : date('Y-m-d H:i:s');

 $sql = "INSERT INTO `order` (menu_id, user_id, quantity, status, created_at) VALUES ('$menu_id', '$user_id', '$quantity', '$status', '$created_at')";
    if (mysqli_query($conn, $sql)) {
        echo "Order record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

        // Handle reservation form 
        if (isset($_POST['reservation_submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $date = $_POST['date'];
    
            $sql = "INSERT INTO reservation (name, email, phone, date) VALUES ('$name', '$email', '$phone', '$date')";
    
            if (mysqli_query($conn, $sql)) {
                echo "Reservation record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        
        // Close database connection
        mysqli_close($conn);
    ?>

<?php include "../footer2.php" ?>