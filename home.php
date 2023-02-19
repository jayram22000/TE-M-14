

<html>
  <body>
        <style>
  /* Set the font family and size for all elements */
  body{
      background-color:none;
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
    position: center;
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
        <h1>Welcome</h1>
           
                <h4>The first sentence of the description clearly outlines something unique about the restaurant: its passion for masa. </h4> 
                <h4>This establishes the "traditional" component of Suerte's menu, which blends traditional Mexican cooking with local Texas ingredients. </h4>
                <h4>The photo beside the description further amplifies this idea, showcasing traditional Mexican art while establishing a bright, exuberant visual style for the brand.</h4>
                <h4>When image and text work in harmony like this, it can be extremely powerful.</h4>
           
                <h2>Reservation</h2>
                <div class="opt mt-4">
                    <form action="" method="post">
                        <button class="btn btn-primary" type="submit">Book a Table</button>
                    </form>
                </div>
            </div>
        
    </div>
</body>
</html>  
<?php include "footer1.php" ?> 