<?php include "header1.php" ?> 
<?php include('crud/submit.php');?>

<title><?php echo $title="home" ?></title>

<style>
      body{
      background-color:none;
      font-family: latha;
      color:whitesmoke;
      background:url(image/food.jpg)no-repeat;
      background-size: cover;
  }

/* Add hover effect to submit buttons */
.btn:hover {
  opacity: 0.8;
}

/* Set background color of active form field */
.form-control:active {
  background-color:none;
}

/* Set max-width for forms */
form {
  max-width: 100%;
}

/* Add padding to form fields */
.form-group {
  padding: 10px 0;
}

/* Set max-width for form input fields */
.form-control {
  max-width: 100%;
}

/* Set margin and padding for forms */
.my-4 {
  margin: 20px 0;
  padding: 10px;
}

/* Set background color for forms */
.container {
  background-color:none;
}

/* Set styles for menu form */
.col-md-4:nth-child(1) {
  border-right: 1px solid #ccc;
}

/* Set styles for order form */
.col-md-4:nth-child(2) {
  border-right: 1px solid #ccc;
  border-left: 1px solid #ccc;
}

/* Set styles for reservation form */
.col-md-4:nth-child(3) {
  border-left: 1px solid #ccc;
}

/* Add media query for small devices */
@media only screen and (max-width: 768px) {
  /* Set max-width for forms */
  form {
    max-width: 100%;
  }
  
  /* Set styles for menu form */
  .col-md-4:nth-child(1) {
    border-right: none;
    border-bottom: 1px solid #ccc;
  }
  
  /* Set styles for order form */
  .col-md-4:nth-child(2) {
    border-right: none;
    border-left: none;
    border-bottom: 1px solid #ccc;
  }
  
  /* Set styles for reservation form */
  .col-md-4:nth-child(3) {
    border-left: none;
    border-bottom: 1px solid #ccc;
  }
}

</style>
<body>
	<div class="container">
		<div class="row">
			<!-- Menu form -->
			<div class="col-sm-12 col-md-4">
            <div class="row justify-content-end">
				<h2 class="my-4">Menu</h2>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" id="name" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label for="description">Description:</label>
						<textarea id="description" name="description" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label for="price">Price:</label>
						<input type="number" id="price" name="price" class="form-control">
					</div>
					<div class="form-group">
						<label for="image_url">Image URL:</label>
						<input type="text" id="image_url" name="image_url" class="form-control">
					</div>
					<input type="submit" name="menu_submit" value="Submit" class="btn btn-primary mt-3">
          <a href='crud/menuedit.php' class="btn btn-secondary mt-3">Edit/Cancel</a>
				</form>
			</div>
  </div>
			<!-- Order form -->
			<div class="col-sm-12 col-md-4">
            <div class="row justify-content-center">
				<h2 class="my-4">Order</h2>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="form-group">
						<label for="menu_id">Menu ID:</label>
						<input type="number" id="menu_id" name="menu_id" class="form-control">
					</div>
					<div class="form-group">
						<label for="user_id">User ID:</label>
						<input type="number" id="user_id" name="user_id" class="form-control">
					</div>
					<div class="form-group">
						<label for="quantity">Quantity:</label>
						<input type="number" id="quantity" name="quantity" class="form-control">
					</div>
					<div class="form-group">
						<label for="status">Status:</label>
						<input type="text" id="status" name="status" class="form-control">
					</div>
					<input type="submit" name="order_submit" value="Submit" class="btn btn-primary mt-3">
                    <a href='crud/onlineedit.php' class="btn btn-secondary mt-3">Edit/Cancel</a>
				</form>
			</div>
            </div>
			<!-- Reservation form -->
			<div class="col-sm-12 col-md-4">
            <div class="row justify-content-start">
				<h2 class="my-4">Reservation</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" id="name" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
                     <input type="email" id="email" name="email" class="form-control">
                    </div>
                   <div class="form-group">
                  <label for="phone">Phone:</label>
                  <input type="tel" id="phone" name="phone" class="form-control">
                  </div>
                <div class="form-group">
                  <label for="date">Date:</label>
             <input type="date" id="date" name="date" class="form-control">
             </div>
           <input type="submit" name="reservation_submit" value="Submit" class="btn btn-primary mt-3">
             <a href='crud/reservationedit.php' class="btn btn-secondary mt-3">Edit/Cancel</a>
            </form>
            </div>
            </div>

            <br>
            <br>
            <?php include "footer2.php" ?>