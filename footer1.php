<!DOCTYPE html>
<html>
    <head>
<title>Salsa Restaurant</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
/* Footer Styles */
.body{
  background:black;
}

.footer p {
  color:silver;
  margin-bottom: 20px;
  margin:0;
  font-size:15px;
}


.social-icons li:last-child {
  margin-right: 0;
}*/

.social-icons li {
  display: inline-block;
  margin-right: 5rem;
}

.social-icons a {
  color: auto;
  font-size: 24px;
  display: inline-block;
  line-height: 1rem;
  border-radius: 30%;
  width: 40px;
  height: 40px;
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
    width: 25%;
    height: auto;
    margin: auto;
    background-color: transparent;
   }



  * {
  box-sizing: border-box;
  }

/* Create three equal columns that floats next to each other */
.column{
  float: left;
  width: 33.33%;
  padding: 65px;
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
          <h4>Follow us</h4> 
            <li><a href="https://www.facebook.com/your-restaurant" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/your-restaurant" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/your-restaurant" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a></li>
        </ul>
      </div>
      
      <div class="column">
          <h4>Contact Us</h4>
          <p>Email:salsarestaurant@gmail.com</p>
          <p>Phone:123-456-7890</p>
          <p><?php echo date('F j, Y, g:i a');?></p>
          <p> <a class="navbar-brand" href=""><img src="logo.png" alt="Salsa Restaurants"></p>
      </div>
      <div class="column">   
          <h4>Find Us</h4>
          <p>13100,Hämeenlinna FINLAND</p>
          <div class="map-responsive"> 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30677.13959557388!2d23.995459099999998!3d61.278440700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468ee59e7dd29a31%3A0xf511c3e7a9213906!2sS-Market%20Superi!5e0!3m2!1ssv!2sfi!4v1676457121365!5m2!1ssv!2sfi" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
      </div>   
    </div>

</footer>
