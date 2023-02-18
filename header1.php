<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo $title="header" ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    
  <body>
    <!-- Bootstrap CSS -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </head>
  <style>
    a,nav_link,.nav-brand{
      color:white;
    }


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
    
    /* Style the restaurant logo */
    .navbar-brand img {
      width: 60px;
      height: 60px;
      margin: auto;
      background-color: transparent;
     
    }
    .navbar-nav .nav-link {
      margin: 20px;
      padding:20px;
      font: 20px;
    }
.container{
  margin:opx;
  padding: 1px;
}
  body{
    background-color:none;
      font-family: latha;
      color:white;
      background:url(food.jpg)no-repeat;
      background-size: cover;
  }
   
    </style>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" >
      <div class="container">
        <a class="navbar-brand" href="">Salsa<img src="logo.png">Restaurant</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-auto mb-lg-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Online Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Opening Hours</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="#">Gift card</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Catering</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="#">The Event Loft</a>
          </li>
                        <!-- Language selection drop-down -->
                         <li class="nav-item">
                            <a class="nav-link">
                                <select id="language-selector" onchange="changeLanguage()">
                                <div>
                                    <option value="en" selected>English</option>
                                    <option value="sv">Svenska</option>
                                    <option value="fi">Suomi</option>
                                </div>
                            </a>
                    </ul>
            </div>   
            <!-- just a normal langauage switcher function  -->
                <script> // use script instead of form
                    function changeLanguage() {
                        var selectedLanguage = document.getElementById("language-selector").value;
                        switch (selectedLanguage) {
                            case "en":
                                window.location.href = "https://www.hamk.fi/?lang=en"; // link with hamk university link in english 
                                break;
                            case "sv":
                                window.location.href = "https://www.hamk.fi/?lang=sv";// link with hamk university link in swedish
                                break;
                            case "fi":
                                window.location.href = "https://www.hamk.fi/?lang=fi";// link with hamk university link in suomi
                                break;
                            default:
                                break;
                        }
                    }
                </script>
            </div>
        
    </nav>
      

                  </div>