
<?php include "header1.php" ?> 
<?php include 'db.php' ?>

<style>
      body{
      background-color:none;
      font-family: latha;
      color:white;
      background:url(food.jpg)no-repeat;
      background-size: cover;
  }

</style>

<body>
<form action="subscribe.php" method="POST">
  <label for="email">Subscribe to our newsletter:</label>
  <input type="email" name="email" id="email" required>
  <button type="submit" name="submit">Subscribe</button>
</form><br><br>

<?php

if(isset($_POST['submit'])) {
  // Get the email address from the form
  $email = $_POST['email'];

  // Store the email address in a database
  $file = fopen("subscribers.txt", "a");
  fwrite($file, $email . "\n");
  fclose($file);

  // Send a confirmation email to the subscriber
  $subject = "Thank you for subscribing to our newsletter";
  $message = "Hello,\n\nThank you for subscribing to our newsletter. You will receive regular updates about our restaurant.\n\nBest regards,\nRestaurant Team";
  $headers = "From: restaurant@example.com\r\n";
  mail($email, $subject, $message, $headers);

}
include 'footer2.php';
?>