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

.row {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin: 0 -1rem;
}

.column{
  flex: 1 0 100%;
  padding: 1rem;
  box-sizing: border-box;
}

@media (min-width: 768px) {
  .column {
    flex: 1 0 33.33%;
  }
}

</style>
<footer>
  <div class="row">
    <div class="column">
      <h3>Follow Us</h3>
      <ul class="social-icons">
        <li><a href="https://www.facebook.com/your-restaurant" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/your-restaurant" target="_blank"><i class="fa fa-instagram"></i></a></li><br>
        <li><a href="https://twitter.com/your-restaurant" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a></li><br>
      </ul>
    </div>
    <div class="column">
      <h4>Contact Us</h4>
      <p>Phone: 123-456-7890</p>
      <p>Email: salsarestaurants@gmail.com</p>
    </div>
    <div class="column">
      <h4>Find Us</h4>
      <p>13100, Hämeenlinna, FINLAND</p>
      <p><?php echo date('F j, Y, g:i a');?></p>
    </div>
  </div>
</footer>
