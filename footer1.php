
<style>
/* Footer Styles */
.body{
  background:none;

}

.footer p {
  color:silver;
  margin-bottom: 20px;
  margin:0;
  font-size:15px;
}


.social-icons li:last-child {
  margin-right: 0;
}

.social-icons li {
  display: inline-block;
  margin-right: 1rem;
}

.social-icons a {
  color: auto;
  font-size: 24px;
  display: inline-block;
  line-height: 1rem;
  border-radius: 30%;
  width: 5rem;
  height: auto;
  text-align: center;

}

.map-responsive {
  overflow: hidden;
  padding-bottom: 50%;
  position: relative;

}

.map-responsive iframe {
  left: 0;
  top: 0;
  height: auto;
  width: 50%;
  position: absolute;

}


  .footer {
    text-align: center;
  
  }

  .map-responsive {
    margin-bottom: 10px;
    overflow: hidden;
    padding-bottom: 40%;  /* adjust this value to your desired size */
    position: relative;
  
  }


.navbar-brand img {
    width: 3rem;
    height: auto;
    margin: auto;
    background-color: transparent;
   
   }

  .flex-container {

  background-color: transparent;
  position: inline-start;
  }

  .flex-container2 {
  padding-bottom: 5rem;
  background-color: transparent;
  position: inline;
  }

  .flex-container3 {
    padding-bottom: 5rem;
    position: inline;
  }
/* Created three equal columns that float next to each other */
.column{
  float: left;
  width: 33.33%;
  padding: 50px;
  margin:10%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<body>
<footer>

  
    <div class="row">
      <div class="column">
          
        <ul class="social-icons">
          <h4>Follow us</h4> 
            
            <div class="flex-container">
            <li><a href="https://www.facebook.com/your-restaurant" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/your-restaurant" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </div>
            <div class="flex-container2">
            <li><a href="https://twitter.com/your-restaurant" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a></li>
            </div>
          </ul>
      
        </div>
      
      <div class="column">
          <h4>Contact Us</h4>
          <p>salsarestaurant@gmail.com</p>
          <p>Phone:123-456-7890</p>
          <p><?php echo date('F j, Y, g:i a');?></p>
          
      </div>
      <div class="column">   
          <h4>Find Us</h4>
          <p>13100,Hämeenlinna FINLAND</p>
      </div>   
    </div>

</footer>
  </body>
</html>