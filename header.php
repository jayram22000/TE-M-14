<!DOCTYPE html>
<html>
<head>
  <body>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo $title="header.php" ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="styling.css">
    </head>
    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
    <a class="navbar-brand" href="#"><img src="logo.png" alt="Salsa Restaurants"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
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
        
          <!-- Language selection drop-down -->
          <li class="nav-item">
          <a class="nav-link">
                        <select id="language-selector" onchange="changeLanguage()">
                            <option value="en" selected>English</option>
                            <option value="sv">Svenska</option>
                            <option value="fi">Suomi</option>
      </ul>
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
  </div>
</nav>