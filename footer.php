<!DOCTYPE html>
<html>
    <head>
<title>Salsa Restaurant</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
//* Footer Styles */

.footer {
  background-color:black;
  padding:20%;
  font-size: 14px;
  margin-top:20%;
}

.footer h4 {
  color: #333;
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer p {
  color: #666;
  margin-bottom: 20px;
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
  border-radius: 50%;
  width: 40px;
  height: 40px;
  text-align: center;
  transition: all 0.2s ease-in-out;
}

.social-icons a:hover {
  background-color: #333;
  color: #fff;
}

.map-responsive {
  overflow: hidden;
  padding-bottom: 40%;
  position: relative;
  height: 0;
}

.map-responsive iframe {
  left: 0;
  top: 0;
  height: 50%;
  width: 50%;
  position: absolute;
  border: 0;
}

/* Logo styles */

.footer img {
  max-width: 200px;
  margin-bottom: 20px;
}

@media (max-width: 50%) {
  .footer {
    text-align: center;
  }

  .footer h4 {
    margin-top: 30px;
  }

  .map-responsive {
    margin-bottom: 10px;
  }
}

</style>
</head>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>Connect with Us</h4>
        <ul class="social-icons">
          <li><a href="https://www.facebook.com/your-restaurant" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/your-restaurant" target="_blank"><i class="fa fa-instagram"></i></a></li>
          <li><a href="https://twitter.com/your-restaurant" target="_blank"><i class="fa fa-twitter"></i></a></li>
        </ul>
        <img src="path/to/your/logo.png" alt="Your Restaurant Logo">
      </div>
      
        <h4>Find Us</h4>
        <p>13100,Hämeenlinna FINLAND</p>
        <div class="col-md-4">
        <div class="map-responsive">            c 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30677.13959557388!2d23.995459099999998!3d61.278440700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468ee59e7dd29a31%3A0xf511c3e7a9213906!2sS-Market%20Superi!5e0!3m2!1ssv!2sfi!4v1676457121365!5m2!1ssv!2sfi" width="680" height="880" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-4">
        <h4>Contact Us</h4>
        <p>Email:salsarestaurant@gamil.com</p>
        <p>Phone: 123-456-7890</p>
      </div>
    </div>
  </div>
</footer>
