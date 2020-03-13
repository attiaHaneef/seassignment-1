<?php
    $userObject= new Controller(new Manager(), Connection::getConnection(DB_NAME));
    $data=$userObject->getHotel();
?>
  <footer class="section footer-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="about">About Us</a></li>
              <li><a href="terms">Terms &amp; Conditions</a></li>
              <li><a href="privacy">Privacy Policy</a></li>
             <li><a href="rooms">Rooms</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="about">About Us</a></li>
              <li><a href="contact">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5 pr-md-5 contact-info">
            <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> <?php echo $data->getAddress();?></span></p>
            <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span> <?php echo $data->getNumber();?></span></p>
            <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span> <?php echo $data->getEmail();?></span></p>
          </div>
          <div class="col-md-3 mb-5">
            <p>Sign up for our newsletter</p>
            <form action="" class="footer-newsletter">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email...">
                <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </footer>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/bootstrap-datepicker.js"></script> 
    <script src="assets/js/jquery.timepicker.min.js"></script> 
    <script src="assets/js/inputmask.js"></script> 
    <script src="assets/js/main.js"></script>
  </body>
</html>