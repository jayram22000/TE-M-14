<?php include "header1.php" ?>
<style>
body{
      background-color:none;
      
      color:whitesmoke;
      background:url(image/food.jpg)no-repeat;
      background-size: cover;
  
    }


</style>

<br><br>

<body>
    <div class="container">
        <div class="form">
            <form method="post" action="">
                <label for="name">Name:</label> 
                <input type="text" id="name" name="name" required><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required><br><br>
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required><br><br>
                <!-- Use a select input to choose the table to insert into -->
                <label for="table">Choose a table:</label>
                <select name="table" id="table">
                    <option value="1">table no.1</option>
                    <option value="2">table no .2</option>
                    <option value="3">table no .3</option>
                    <option value="reservation">Reservation</option>
                </select><br><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>

    <?php
    // Check if the submit button was clicked
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        include 'db.php';

    // Use the selected table name in the SQL query
    $sql = "INSERT INTO reservation(name,email,phone,date) 
    values('$name','$email','$phone','$date')";
    if($conn->query($sql) === TRUE){
        echo "Reservation added successfully";
    }
    else{
        echo "Error: ".$conn->error;
    }
    $conn->close();

    }

    ?>
</body>
<?php include "footer2.php" ?>