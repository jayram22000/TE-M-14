<?php include "header1.php" ?>   <!-- universal footer !-->
<style>
      body{
      background-color:none;
      font-family: latha;
      color:white;
      background:url(image/food.jpg)no-repeat;
      background-size: cover;
  }
  table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
  border-collapse: collapse;
  border-spacing: 0;

}

th,
td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
  color: white;
}

thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}

tbody + tbody {
  border-top: 2px solid #dee2e6;
}

@media screen and (max-width: 767px) {
  table {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    color: white;
  }
  
  thead,
  tbody,
  th,
  td,
  tr {
    display: block;
    color: white; 
    
  }
  
  tr {
    border: 1px solid #ccc;
  }
  
  td {
    border: none;
    position: relative;
    padding-left: 50%;
    text-align: right;
   
  }
  
  td:before {
    position: absolute;
    top: 6px;
    left: 6px;
    width: 45%;
    padding-right: 10px;
    white-space: nowrap;
    content: attr(data-label);
    color: #000;
    font-weight: bold;
  }
}


</style>
<table class="table">
<?php
  $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
  $opening_times = array('10:00', '10:00', '10:00', '10:00', '10:00', '11:00', '11:00');
  $closing_times = array('22:00', '22:00', '22:00', '22:00', '23:00', '23:00', '22:00');
?>

<table>
  <thead>
    <tr>
      <th>Day</th>
      <th>Opening Time</th>
      <th>Closing Time</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php for ($i = 0; $i < 7; $i++) { ?>
      <tr>
        <td><?php echo $days[$i]; ?></td>
        <td><?php echo $opening_times[$i]; ?></td>
        <td><?php echo $closing_times[$i]; ?></td>
        <td><button class='btn btn-primary' onclick='bookTime("<?php echo $days[$i]; ?>")'>Book Time</button></td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<script>
function bookTime(day) {
  alert("You have selected to book a time on " + day);
}
</script>

<?php include "footer2.php" ?> 