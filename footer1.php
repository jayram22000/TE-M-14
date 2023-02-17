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
.footer {
  background-color:black;
  padding:20%;
  font-size: 14px;
  margin-top:20%;
}

.footer h4 {
  color: #333;
  font-size: 15px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer p {
  color:silver;
  margin-bottom: 20px;
  margin:0;
  font-size:15px;
}

.social-icons li {
  display: inline-block;
  margin-right: 10px;
}

.social-icons li:last-child {
  margin-right: 0;
}

.social-icons a {
  color: auto;
  font-size: 24px;
  display: inline-block;
  line-height: 1;
  border-radius: 30%;
  width: 40px;
  height: 40px;
  text-align: center;
  transition: all 0.2s ease-in-out;
}

.social-icons a:hover {
  background-color: gray;
  color: #fff;
}

.map-responsive {
  overflow: hidden;
  padding-bottom: 56.25%;
  position: relative;
  height: 0;
}

.map-responsive iframe {
  left: 0;
  top: 0;
  height: 50%;
  width: 50%;
  position: absolute;

}
.container{
  max-width:100%;
  border:10% solid;
  margin:0 auto;
  height:2%;
  padding: 0 15;
  float:left;

}

.footer a {
  color: silver;
  font-size: 14px;
  text-decoration: none;
  transition: color 0.2s ease-in-out;
}

.footer a:hover {
  color: white;
}
/*styling*/
.fab {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: blue;
  color: white;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  text-align: center;
  font-size: 30px;
  line-height: 50px;
  text-decoration: none;
}

.fab:hover {
 /* background-color: darkblue;*/
  color: white;

}

/* Logo styles */

.footer img {
  max-width: 200px;
  margin-bottom: 20px;
}

  .footer {
    text-align: center;
  }

  .footer h4 {
    text_align: center;
  }
  

  .map-responsive {
    margin-bottom: 10px;
    overflow: hidden;
    padding-bottom: 40%; /* adjust this value to your desired size */
    position: relative;
    height: 0;
  }


.navbar-brand img {
    width: 60px;
    height: 60px;
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
  padding: 75px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<footer>

  <div class="container">
      <div class="col-md-4">
      <h4>Follow us</h4>
      <ul class="social-icons">
          <li><a href="https://www.facebook.com/your-restaurant" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/your-restaurant" target="_blank"><i class="fa fa-instagram"></i></a></li>
          <li><a href="https://twitter.com/your-restaurant" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a></li>
    
      </ul>
      </div>
      <div class="col-md-5">
        <h4>Contact Us</h4>
       <p> <a class="navbar-brand" href=""><img src="logo.png" alt="Salsa Restaurants"></P>
        <p>Email:salsarestaurant@gmail.com</p>
        <p>Phone:123-456-7890</p>
        <p><?php echo date('F j, Y, g:i a');?></p>
       <div clas="col-md-6">
        <h4>Find Us</h4>
        <p>13100,Hämeenlinna FINLAND</p>
        <div class="map-responsive"> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30677.13959557388!2d23.995459099999998!3d61.278440700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468ee59e7dd29a31%3A0xf511c3e7a9213906!2sS-Market%20Superi!5e0!3m2!1ssv!2sfi!4v1676457121365!5m2!1ssv!2sfi" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
      
      </div>
      </div>

    </footer>
