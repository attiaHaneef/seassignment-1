  <?php
    require 'header.php'; 
  ?>
  <link rel="stylesheet" href="./admin/assets/css/style.css">
<div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form class="form-signin" method="POST">
						<div class="account-logo">
                            <a href="index"><img src="./admin/assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input required="" name="username" type="text" autofocus="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input required="" type="password" name="password" class="form-control">
                        </div>
                        <?php if($error!="")
                            echo $error;
                        ?>                     
                        <div class="form-group text-center">
                            <a href="forgot-password">Forgot your password?</a>
                        </div>
                        <div class="form-group text-center">
                            <button name="submitCustomerLogin" type="submit" class="btn btn-primary account-btn">Login</button>
                        </div>
                        <!--div class="text-center register-link">
                            Don’t have an account? <a href="register">Register Now</a>
                        </div-->
                    </form>
                </div>
			</div>
        </div>
    </div>
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