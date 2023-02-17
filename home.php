


   <body>
        <style>
  /* Set the font family and size for all elements */
  body{
    background-color:none;
      font-family: latha;
      color:white;
      background:url(food.jpg)no-repeat;
      background-size: cover;
  }

  /* Style the container element */
  .container {
    max-width: 1140px;
    margin: 0 auto;
  }

  /* Style the welcome header */
  .mt-5 {
    font-size: 3rem;
    text-align: center;
    color: #333;
  }

  /* Style the reservation header */
  .mt-4 h2 {
    font-size: 2rem;
    text-align: center;
    color: #333;
  }

  /* Style the description */
  .mt-4 h4 {
    font-size: 1.2rem;
    line-height: 1.5;
    color: #666;
  }

  /* Style the button */
  .opt button {
    padding: 10px 20px;
    font-size: 1.2rem;
    border-radius: 0;
  }
  
  /* Style the button hover state */
  .opt button:hover {
    background-color: #4CAF50;
  }

  /* Style the button when it is disabled */
  .opt button:disabled {
    background-color: #ccc;
    color: #666;
    cursor: not-allowed;
  }
</style>
 <div class="container">
        <h1 class="mt-5">Welcome</h1>
        <div class="row mt-4">
            <div class="col-md-8">
                <h4 class="mt-4">The first sentence of the description clearly outlines something unique about the restaurant: its passion for masa. This establishes the "traditional" component of Suerte's menu, which blends traditional Mexican cooking with local Texas ingredients. The photo beside the description further amplifies this idea, showcasing traditional Mexican art while establishing a bright, exuberant visual style for the brand. When image and text work in harmony like this, it can be extremely powerful.</h4>
            </div>
            <div class="col-md-4">
                <h2 class="mt-4">Reservation</h2>
                <div class="opt mt-4">
                    <form action="" method="post">
                        <button class="btn btn-primary" type="submit">Book a Table</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include "footer.php" ?>   <!-- universal footer !-->