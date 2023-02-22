<?php include "header1.php" ?>   <!-- universal footer !-->
 <style>
  /* Set the font family and size for all elements */
  body{
      background-color:none;
      font-family: latha;
      color:white;
      background:url(food.jpg)no-repeat;
      background-size: cover;
  }

  /* Style the welcome heading */
h1 {
  font-size: 3rem;
  text-align: center;
  margin-top: 2rem;
  color: orange;
}

/* Style the carousel container */
.carousel {
  margin-top: 2rem;
}

/* Style the carousel indicators */
.carousel-indicators li {
  background-color: #999;
}

.carousel-indicators li.active {
  background-color: #333;
}

/* Style the carousel caption text */
.carousel-caption h5 {
  font-size: 2rem;
  font-weight: bold;
}

.carousel-caption p {
  font-size: 1.5rem;
}

/* Style the description text */
.col-md-8 h4 {
  font-size: 1.2rem;
  line-height: 2rem;
  color:white;
}

/* Style the reservation heading */
.col-md-4 h2 {
  font-size: 2rem;
  text-align: center;
  margin-top: 2rem;
  color: whitesmoke;
}

/* Style the reservation button */
.opt form button {
  width: 100%;
  background-color: #333;
  color: #fff;
  font-size: 1.5rem;
  border-radius: 0.5rem;
  padding: 1rem;
}

.opt form button:hover {
  background-color: #555;
}
img {
  max-width: 100%;
  height: 5%;
}
  .carousel-item img {
  max-height: 400px;
  width: 40%;
  margin: 10%;
}

.btn.btn-primary{
  text-decoration: none;
  color: #fff;
}
</style>
<body>
<div class="bcontainer">
  <h1 class="mt-5">Welcome</h1>

  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="chi.jpeg" class="d-block w-100" alt="Slide 1">
        <div class="carousel-caption d-none d-md-block">
          <h5>Chilaquiles</h5>
          <p>Mexican Rojos</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="taco.avif" class="d-block w-100" alt="Slide 2">
        <div class="carousel-caption d-none d-md-block">
          <h5>Taco</h5>
          <p>Authentic Mexican</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="taco1.png" class="d-block w-100" alt="Slide 3">
        <div class="carousel-caption d-none d-md-block">
          <h5>Fajita Pasta</h5>
          <p>Authentic Pasta</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>

  <div class="row mt-4">
    <div class="col-md-8">
      <h4 class="mt-4">The first sentence of the description clearly outlines something unique about the restaurant: its passion for masa. This establishes the "traditional" component of Suerte's menu, which blends traditional Mexican cooking with local Texas ingredients. The photo beside the description further amplifies this idea, showcasing traditional Mexican art while establishing a bright, exuberant visual style for the brand. When image and text work in harmony like this, it can be extremely powerful.</h4>
    </div>
    <div class="col-md-4">
      <h2 class="mt-4">Reservation</h2>
      <div class="opt mt-4">
        <form action="" method="post">
          <button class="btn btn-primary" type="submit"><a href="opening.php">Book  Table</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>

<?php include "footer1.php" ?>