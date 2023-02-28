<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo $title="header" ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
 
  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="../TE@M-14/crude/site.js"> </script>
  </head>
  <style>
  

  /* Add hover effect to navbar links */
  .navbar-nav .nav-link:hover {
    color: rgb(195, 118, 17);
  }
  
  /* Style the active navbar link */
  .navbar-nav .nav-item.active .nav-link {
    color: rgb(195, 118, 17);
  }

    /* Add hover effect to navbar links */
    .navbar-nav .nav-link:hover {
      color: rgb(195, 118, 17);
    }
    
    /* Style the active navbar link */
    .navbar-nav .nav-item.active .nav-link {
      color: rgb(195, 118, 17);
    }
    .nav-link{
        background-color:transparent;
        border-line:none;
    }
    /* Style the restaurant logo */
    .navbar-brand img {
      width: 60px;
      height: 60px;
      margin: auto;
      background-color: transparent;
      image color:grey;
     
    }
    .navbar-nav .nav-link {
      margin: 10px;
      padding:10px;
      font: 20px;
    }
.container{
  margin:opx;
  padding: 1px;
}
    </style>
 

    <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Salsa<img src="image/logo.png" alt="logo">Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-auto mb-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="homee.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="online-order.php">Online Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="opening.php">Opening Hour</a>
                    </li>
                  
                    <!-- Language selection drop-down -->
                    <li class="nav-item">
                        <select id="language-selector" onchange="changeLanguage()" class="nav-link">
                            <option value="en" selected>English</option>
                            <option value="sv">Svenska</option>
                            <option value="fi">Suomi</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    


 
