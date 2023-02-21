<?php include "header1.php" ?>   <!-- universal footer !-->
<style>
      body{
      background-color:none;
      font-family: latha;
      color:white;
      background:url(food.jpg)no-repeat;
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

<table>
  <tr>
    <th>Day</th>
    <th>Opening Time</th>
    <th>Closing Time</th>
    <th>Book Time</th>
  </tr>
  <?php
  $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
  $opening_times = array('10:00', '10:00', '10:00', '10:00', '10:00', '11:00', '11:00');
  $closing_times = array('22:00', '22:00', '22:00', '22:00', '23:00', '23:00', '22:00');
  
  for ($i = 0; $i < 7; $i++) {
    echo "<tr>";
    echo "<td>" . $days[$i] . "</td>";
    echo "<td>" . $opening_times[$i] . "</td>";
    echo "<td>" . $closing_times[$i] . "</td>";
    echo "<td><button onclick='bookTime(\"" . $days[$i] . "\")'>Book Time</button></td>";
    echo "</tr>";
  }
  ?>
</table>

<script>
  function bookTime(day) {
    alert("You have selected to book a time on " + day);
  }
</script>


<?php include "footer1.php" ?>