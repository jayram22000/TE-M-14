
<style>
/* Footer Styles */
.body{
  background:black;
  font-style: italic;
  background:none;

}

.footer p {
  color:silver;
  margin-bottom: 20px;
  margin:0;
  font-size:15px;
  text-align: center;
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


  .row {
  box-sizing: border-box;
  background-color: transparent;
  }

/* Created three equal columns that float next to each other */
.column{
  float: left;
  width: 33.33%;
  padding: 65px;
  margin:10;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<footer>

  
    <div class="row">
      <div class="column">
          
        <ul class="social-icons">
          <h4>Follow Us</h4> 
            
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
          <p>Phone:123-456-7890</p>
         
          
      </div>
      <div class="column">   
          <h4>Find Us</h4>
          <p>13100,Hämeenlinna FINLAND</p>
          <p><?php echo date('F j, Y, g:i a');?></p>
  </div>   
    </div>

</footer>
</html>