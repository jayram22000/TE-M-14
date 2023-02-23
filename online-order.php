<?php include "header1.php" ?>
<style> 
 body{
      background-color:none;
      font-family: latha;
      color:white;
      background:url(image/food.jpg)no-repeat;
      background-size: cover;
  }

  .box ul li{
        width: 130px;
        float: right;
        margin: 10px;
        text-align:right;
        }

  .box ul li a{
        text-decoration: none;
        color:orange;    
        }

           
  .box ul li a:hover{
        color:whitesmoke;
        cursor: pointer;
        }

    

    .btn {
        margin-left: 55px;
  align-items: center;
  background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
  border: 0;
  border-radius: 8px;
  box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
  box-sizing: border-box;
  color: #FFFFFF;
  display: flex;
  font-family: Phantomsans, sans-serif;
  font-size: 20px;
  justify-content: center;
  line-height: 1em;
  max-width: 100%;
  min-width: 140px;
  padding: 3px;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  cursor: pointer;
}

.btn:active,
.btn:hover {
  outline: 0;
  
}

.btn{
 
  padding: 16px 24px;
  border-radius: 6px;
  background-color: rgb(5, 6, 45);
  transition: 300ms;
}

@media (min-width: 768px) {
  .btn {
    font-size: 24px;
    min-width: 196px;
  }
}   

    .box {
        width: 900px;
        float: right;
     
    }

    .box ul li {
        width: 130px;
        float: right;
        margin: 10px;
       

    }

    .box ul li a {
        text-decoration: none;
        color: orange;
        
    }


    .box ul li a:hover {
        color: whitesmoke;
        cursor: pointer;
        
    }

    .wd h1 {
        text-align: center;
        text-transform: uppercase;
        font-weight: 100px;
        color: orange;

    }

    .field {
        width: 100%;
        border: 2px solid rgba(0, 0, 0, 0);
        outline: none;
        background-color: rgba(255, 255, 255, 0.862);
        padding: 0.5rem 1rem;
        font-size: 1.1rem;
        margin-bottom: 22px;
        transition: .3s;
        color: black;
    }

    .footer {
    width: 100%;
    color: orange;
    text-align: center;
    text-align: 1vw;
    line-height: 0.6;
    padding-bottom: 15px;
    margin:0 auto;
    max-width: 400px;
}
.contact-info{
    display: flex;
    flex-direction: column;
    color: orange;
}
.social-links {
  display: flex;
  justify-content: last  baseline;
}

.social-links a {
  margin: 0 10px;
  text-decoration: none;
  color: #333;
}

.social-links .facebook {
  background: darkgray;
  padding: 10px;
  border-radius: 50%;
}

.social-links .instagram {
  background:darkgray;
  padding: 10px;
  border-radius: 50%;

}
.social-links .whatsapp{
background-color: darkgray;
padding:10px ;
border-radius:50%;
}
.social-links .youtube{
  background:darkgray;
  padding: 10px;
  border-radius: 50%;
}

address{
  color: orange;
}

<style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>



<body>
            <div class="Contact-box">
                <div class="left"></div>
                <div class="right"></div>
                <input type="text" class="field" placeholder="Your Name"><br>
                <input type="text" class="field" placeholder="Your Email"><br>
                
               
                <input type="text" class="field" placeholder="order here"><br>
                
                <input type="" class="field"></textarea><br>
                <button class="btn">ORDER</button>
            </div>
</body>
<?php include "footer1.php" ?>

