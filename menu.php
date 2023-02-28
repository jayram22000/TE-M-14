<?php include "header1.php" ?>
<title><?php echo $title="menu" ?></title>
<script type="text/javascript" src="../TE-M-14 /site.js"></script>
<style>
	body {
		background-image: url("image/food.jpg");
    font-family:latha;
		background-repeat: no-repeat;
		background-size: cover;
		color: white;
	}

/* Center the header */
h1 {
  text-align: center;
}


/* Add spacing between items */
.card {
  margin-bottom: 30px;

}

.card:hover {
  -ms-transform: scale(1.10); /* IE 9 */
  -webkit-transform: scale(1.10); /* Safari 3-8 */
  transform: scale(1.10); 
}

/* Style the order button */
.btn-primary {
  background-color: aqua;
  border-color: #f57f17;
}

/* Add some spacing at the top */
.container {
  margin-top: opx;

  padding: 1px;
}

/* Style the images to fit properly */
.card-img-top {
  width: 100%;
  height: 225px;
  object-fit: cover;
}

/* Style the text inside the cards */
.card-text, .card-title {
  font-size: 18px;
  color:black;
}

/* Style the cards on small devices */
@media (max-width: 575px) {
  .card-img-top {
    height: 150px;
  }
  .card-text, .card-title {
    font-size: 16px;
    text-align: center;
  }
}

/* Style the cards on medium devices */
@media (min-width: 576px) and (max-width: 767px) {
  .card-img-top {
    height: 175px;
  }
}

/* Style the cards on large devices */
@media (min-width: 992px) {
  .card-img-top {
    height: 250px;
  }
}

    </style>

 

  <body>
    <div class="container my-5">¨
      <h1>Salsa Restaurant</h1>
    
      <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
          <div class="card">
          <span onmouseover="
            this.style.backgroundColor='light-grey';
            this.style.fontSize='2.5em'";
            onmouseout="this.style.backgroundColor='whitesmoke';
            this.style.backgroundColor='white';
            this.style.fontSize='1.1em'";>
            <img src="image/food1.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">€6.99</h5>
              <p class="card-text">Burger.</p>
              <a href="food.php" class="btn btn-primary">Green salad</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/food1.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">€4.99</h5> 
              <p class="card-text">Green salad</p>
              <a href="food.php" class="btn btn-primary">Green salad</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/food2.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">€2.99</h5>
              <p class="card-text">Smoothie</p>
              <a href="food.php" class="btn btn-primary">Smoothie</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-4">
          <div class="card">
            <img src="image/food3.jpg" class="card-img-top" alt="Image 4">
            <div class="card-body">
              <h5 class="card-title">€5.99</h5>
              <p class="card-text"> Salad</p>
              <a href="food.php" class="btn btn-primary">Salad</a>
             
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="image/food4.jpg" class="card-img-top" alt="food6.jpg">
            <div class="card-body">
              <h5 class="card-title">€6.99</h5>
              <p class="card-text">Lemonade</p>
              <a href="food.php" class="btn btn-primary">Lemonade</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="image/food5.jpg" class="card-img-top" alt="Image 5">
            <div class="card-body">
              <h5 class="card-title">€3.99</h5>
              <p class="card-text">Fruits juice</p>
              <a href="food.php" class="btn btn-primary">Fruits juice</a>
            </div>
          </div>
        </div>
        <br><br>
        <?php include "footer2.php" ?>