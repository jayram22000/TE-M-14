<?php include "db.php"?> 
<?php include "filter.php";?>

<!-- universal footer !-->
<?php

// check which form was submitted
if (isset($_POST['menu_submit'])) {
  // process menu form
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $image_url = $_POST['image_url'];

  // insert data into database (assuming you have a database connection already set up)
  $sql = "INSERT INTO menu (name, description, price, image_url) VALUES ('$name', '$description', '$price', '$image_url')";
  if (mysqli_query($conn, $sql)) {
    echo "Menu created successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
} elseif (isset($_POST['order_submit'])) {
  // process order form
  $menu_id = $_POST['menu_id'];
  $user_id = $_POST['user_id'];
  $quantity = $_POST['quantity'];
  $status = $_POST['status'];

  // insert data into database (assuming you have a database connection already set up)
  $sql = "INSERT INTO `order` (menu_id, user_id, quantity, status) VALUES ('$menu_id', '$user_id', '$quantity', '$status')";
  if (mysqli_query($conn, $sql)) {
    echo "Order  confirm.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
} elseif (isset($_POST['reservation_submit'])) {
  // process reservation form
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];

  // insert data into database (assuming you have a database connection already set up)
  $sql = "INSERT INTO `reservation`(name, email, phone, date) VALUES ('$name', '$email', '$phone', '$date')";
  if (mysqli_query($conn, $sql)) {
    echo "Reservation  successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// close database connection
mysqli_close($conn);
?>
