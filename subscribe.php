<?php
$title="Newsletter subscription form";
?><br><br>

<style>
    body{color:grey;
         text-align: center;
         }

</style>
<form action="subscribe.php" method="POST">
  <label for="email">Subscribe to our newsletter:</label>
  <input type="email" name="email" id="email" required>
  <button type="submit" name="submit">Subscribe</button>
</form><br><br>

<?php

if(isset($_POST['submit'])) {
  // Get the email address from the form
  $email = $_POST['email'];

  // Store the email address in a file or database
  $file = fopen("subscribers.txt", "a");
  fwrite($file, $email . "\n");
  fclose($file);

  // Send a confirmation email to the subscriber
  $subject = "Thank you for subscribing to our newsletter";
  $message = "Hello,\n\nThank you for subscribing to our newsletter. You will receive regular updates about our restaurant.\n\nBest regards,\nRestaurant Team";
  $headers = "From: restaurant@example.com\r\n";
  mail($email, $subject, $message, $headers);

}
include 'footer1.php';
?>