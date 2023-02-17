
<?php include "header.php" ?>
<style>
   body{
       background-image: url("page.jpg");
      /* filter: blur(8px);
       -webkit-filter: blur(8px);*/
       background-repeat: none;
       vertical-align: auto;
       height: 100%;
       width: auto;
       text-align: center;
       color: beige;
   }

   .restaurant{
       background: rgb(0, 0, 0); /* Fallback color */
       background: rgba(0, 0, 0, 0.65); /* Black background with 0.5 opacity */
   }
   .grid-container1{
       display:grid; 
       grid-gap: 20px;
       padding: 50px;
       grid-template-columns: 33% 33% 33%
   }

   .grid-container2{
       display: grid;
       grid-gap: 20px;
       padding: 50px;
       grid-template-columns: 33% 33% 33%
   }
   
   .grid-container{
       display:grid;
       grid-gap: 20px;
       grid-template-columns: 33% 33% 33%;
       padding: 50px;

   }

   

   .row{
   
   border-radius: 4px;
   grid-gap: 20px;
   height:auto;
   max-width: 33%;
   
   grid-row-end: 4;
   grid-gap: 1rem;
   flex-direction: row;
   padding: 2px 16px;
   }

   .row1{
      
       
       grid-gap: 20px;
       width: 33%;
       padding: 50px;
       grid-row-end: 4;
       grid-gap: 1rem;
       align-content: flex-start;
       float: center;
       flex-direction: row;
   }

   .row2{
       
       
       grid-gap: 20px;
       width: 450px;
       padding: 50px;
       grid-row-end: 4;
       grid-gap: 1rem;
       align-content: flex-start;
       float: center;
       flex-direction: row;
   }

   .headings{
       text-align: center;
       text-decoration: none;

   }

   img{
       border: rem whitesmoke;
       height: auto;
       padding: 10px;
       width: 250px;
       border-radius: 25px;
       border-style:solid ;
       
   }

   img:hover{
       border: rem whitesmoke;
       padding: 10px;
       cursor: pointer;
       background:rgb(194, 191, 191);
       opacity: 0.5;
       box-shadow: 0.3s;
       border-radius: 25px;
       border-style:solid ;
   }
.font-effect-shadow-multiple{
   text-align: center;
   color: beige;
}
</style>
</head>
<body>

<div class="restaurant">

    <div class="grid-container">
           <div class="font-effect-shadow-multiple">
               <h3><b><i>Full Course Meals</i></b></h3>
           </div> 
       
       <div class="row">
           <img src="https://plus.unsplash.com/premium_photo-1672418497256-ebfef4872e1a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDI1fHhqUFI0aGxrQkdBfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="">
       <p>£7,50</p>
       </div>
       
       <div class="row">
           <img src="https://plus.unsplash.com/premium_photo-1671377655318-8ddc2a7ee17b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDQxfHhqUFI0aGxrQkdBfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="">
           <p>£6,50</p>
       </div>  

       <div class="row">
           <img src="https://images.unsplash.com/photo-1673041866553-29391cc0acd8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfHhqUFI0aGxrQkdBfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="">
           <p>£10,50</p>
       </div>
       
    </div>

       
   <div class="grid-container">
       <div class="headings">
           <div class="font-effect-shadow-multiple"> 
               <h3><b><i>DRINKS</i></b></h3></div>   
       </div>
       <div class="row">
           <img src="https://media.istockphoto.com/id/1367788246/fi/valokuva/k%C3%A4det-kaatamalla-vetoolutta-lasiin.jpg?s=612x612&w=0&k=20&c=BuLuFlij22REkn-1ZaH4W3zfq9RXg5JH6xHET6R4pXM=" alt="Raclette"> 
           <p>£9,00</p>
       </div>
       
       <div class="row">
           <img src="https://images.unsplash.com/photo-1661615204063-a8a38cd919df?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDg5fHhqUFI0aGxrQkdBfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="Karelian Pie"> 
           <p>£11,45</p>
       </div>    
       
       <div class="row">
           <img src="https://images.unsplash.com/photo-1669962525880-ddd9851b1ad0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDEzN3x4alBSNGhsa0JHQXx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=600&q=60" alt="Ugali"> 
           <p>£10,00</p>
       </div> 
   </div>

   <div class="grid-container">
       <div class="headings">
           <div class="font-effect-shadow-multiple">
               <h3><b><i>SALADS</i></b></h3>    
           </div> 
       </div>
       <div class="row">
           <img src="https://images.unsplash.com/photo-1570197571499-166b36435e9f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8c2FsYWRzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="Salmon Avocado Salad">
           <p>£9,00</p>
       </div>
      
       <div class="row">
           <img src="https://images.unsplash.com/photo-1611171711925-92171c63fc4b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHNhbGFkc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="Mixed Green Salad with apple and Goat Cheese">
           <p>£9,00</p>
       </div>

       <div class="row">
           <img src="https://images.unsplash.com/photo-1568158879083-c42860933ed7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHNhbGFkc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="Mixed Green Salad with apple and Goat Cheese">
           <p>£9,00</p>
       </div>

   </div>

   <div class="grid-container">
       <div class="headings">
           <div class="font-effect-shadow-multiple">
               <h3><b><i>DESSERTS</i></b></h3>
           </div>    
       </div>
       
       <div class="row">
           <img src="https://images.unsplash.com/photo-1655536259633-05170abf4b8b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDYyfHhqUFI0aGxrQkdBfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="">
           <p>£4,00</p>
       </div>
       

       <div class="row">
           <img src="https://plus.unsplash.com/premium_photo-1671980819443-e8bbeec85840?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDMwfHhqUFI0aGxrQkdBfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="Lemon Balm Popsicles">
           <p>£4,20</p>
       </div>

       <div class="row">
           <img src="https://images.unsplash.com/photo-1671637292704-bbc6fe8310a5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDQ4fHhqUFI0aGxrQkdBfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="Lemon Balm Popsicles">
           <p>£5,00</p>
       </div>

    </div>
</div>    
<div class="footer">
   <div class="contact-info">
            <h2>Contact Us:</h2>
            <h3>Salsa Restaurant</h3>
            <p>Address: visamaki23, Hämeenlinna</p>
            <p>Phone: 044 123 4567</p>
            <p>Email: salsa.restaurant@gmail.com</p>
    
        <div class="social-links">
         <a href="https://www.facebook.com/yourpage" target="_blank" class="facebook">Facebook</a>
            <a href="https://www.instagram.com/yourpage" target="_blank" class="instagram">Instagram</a>
                <a href="https://web.whatsapp.com/yourpage"  target="_blank" class="whatsapp">whatsapp</a>
                    <a href="https://www.youtube.com/"      target="_blank"  class="youtube"> youtube</a>   
        </div>
   </div>
 </div>
 <?php include "footer.php" ?>
</body>
</html>