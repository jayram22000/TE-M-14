<?php include "header1.php" ?>
<title><?php echo $title="aboutus" ?></title>

<style>
    body{
      background-color:none;
      font-family: latha;
      color:white;
      background:url(image/food.jpg)no-repeat;
      background-size: cover;
  }

  .wd {
      width: 90%;
      max-width: 400px;
      margin: 0 auto;
  }
  .wd p {
  text-align: center;
  font-weight: 100px;
  color:whitesmoke;

  }

  .wd h1{
  text-align: center;
  text-transform: uppercase;
  font-weight: normal;
  margin: 50px auto;
  color: darkgrey; 
  font-style: italic;  
  }       
  


input[type="email"] {
  width: 30%;
  padding: 10px;
  margin-bottom: 20px;
  border: 5px solid #ccc;
  border-radius: 2px;
 
}

/* Style for the "Subscribe" button */
button[name="submit"] {
  background-color: #4CAF50;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  border-radius: 5px;
}

/* Hover effect for the "Subscribe" button */
button[name="submit"]:hover {
  background-color: #black;
  border: 5px;

}

/* Style for the "Unsubscribe" button */
button[name="unsubscribe"] {
  background-color: #f44336;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  border-radius: 5px;
  margin-left: 10px; /* add some space between the buttons */
}

/* Hover effect for the "Unsubscribe" button */
button[name="unsubscribe"]:hover {
  background-color: #e53935;
}


</style>
<html>
<body>

    <div class="wd">
        <h1><b> GET TO KNOW US </b></h1>
        <p>Welcome to Salsa, a fully fledged restaurant specializing in deliveringa relaxed and memorable dining experience. 
          We're currently in 3 locations; 1 in Nairobi,.</p>

          <p>Each location features a unique ambience with tasteful décor, specially designed for your comfort.
            To make you feel more at home, we’ve carefully selected a unique theme for each location.
          </p>
          <p>
            We have over 300 carefully selected, mouthwatering menu items.Whatever your taste, it’s well catered for. We value you.
            That’s why you’ll always be served with excellence by each member of ourhighly skilled team members.
          </p>
        <p>
            We’re growing and may soon open a location closer to you. We look forward to serving you,You’re more than welcome to Find us here.
            Salsa is part of Mandela Group of companies, the parent company to Foodhuband Mandela millers.
        </p>
    </div><br><br>

    <style>

    body
  {
      text-align: center;
  }
  </style>

  <p>
  For promotional new submit your email adress and subscribe using the buttons below:          
  </p>
  <form action="subscribe.php" method="POST">
  <label for="email">Subscribe to our newsletter:</label>
  <input type="email" name="email" id="email" required>
  <button type="submit" name="submit">Subscribe</button>
  <input type="hidden" name="unsubscribe" value="<?php echo htmlspecialchars($email); ?>">
  <button type="submit" name="unsubscribe">Unsubscribe</button>
  
</form>

<br><br>

<?php

if (isset($_POST['unsubscribe'])) {
  // Get the email address from the form
  $email = $_POST['unsubscribe'];

  // Remove the email address from the file or database
  $subscribers = file("subscribers.txt", FILE_IGNORE_NEW_LINES);
  $subscribers = array_filter($subscribers, function($subscriber) use ($email) {
    return $subscriber !== $email;
  });
  file_put_contents("subscribers.txt", implode("\n", $subscribers));

  // Send a confirmation email to the subscriber
  $subject = "Unsubscribe from our newsletter";
  $message = "Hello,\n\nYou have been unsubscribed from our newsletter. We're sorry to see you go.\n\nBest regards,\nRestaurant Team";
  $headers = "From: restaurant@example.com\r\n";
  mail($email, $subject, $message, $headers);

  // Redirect to the same page to clear the form
  header("Location: " . $_SERVER['PHP_SELF']);
  exit;
}

 
?>
<?php include "footer2.php" ?>
