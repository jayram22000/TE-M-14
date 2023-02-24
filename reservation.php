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