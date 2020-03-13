  <?php
    require 'header.php';
    $userObject= new Controller(new Manager(), Connection::getConnection(DB_NAME));
    $data=$userObject->viewRooms(false); 
    /**/

  ?>
    <section class="site-hero overlay" style="background-image: url(assets/images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To 5 <span class="fa fa-star text-primary"></span>   Hotel</span>
            <h1 class="heading">A Best Place To Stay</h1>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->

    <section class="section bg-light pb-0"  >
      <div class="container">
       
        <div class="row check-availabilty" id="next">
          <div class="block-32" data-aos="fade-up" data-aos-offset="-200">
            <?php
              require 'form.php';
            ?>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
            <img src="assets/images/img_1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
            <h2 class="heading">Welcome!</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            <p><a href="#" class="btn btn-primary text-white py-2 mr-3">Learn More</a> <span class="mr-3 font-family-serif"><em>or</em></span> <a href="https://vimeo.com/channels/staffpicks/93951774"  data-fancybox class="text-uppercase letter-spacing-1">See video</a></p>
          </div>
          
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Rooms</h2>
            <p data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
          </div>
        </div>
        <div class="row">
          <?php
          for ($i=0;$i<3;$i++) {
            $value=$data[$i];
          ?>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="reservation" class="room">
              <figure class="img-wrap">
                <img src="./admin/<?php echo $value->getImage()?>" alt="HMS" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2><?php echo $value->getCategory()->getName()?></h2>
                <span class="text-uppercase letter-spacing-1">PKR <?php echo $value->getCategory()->getRent()?> / per night</span>
              </div>
            </a>
          </div>
        <?php }?>
        </div>
      </div>
    </section>
    
    
    <section class="section slider-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Photos</h2>
            <p data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              <?php
              foreach ($data as $key => $value) {
              ?>
              <div class="slider-item">
                <a href="./admin/<?php echo $value->getImage()?>" data-fancybox="assets/images" data-caption="Caption for this image"><img src="./admin/<?php echo $value->getImage()?>" alt="Image placeholder" class="img-fluid"></a>
              </div>
            <?php }?>
            </div>
            <!-- END slider -->
          </div>
        
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="section bg-image overlay" style="background-image: url('assets/images/hero_3.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading text-white" data-aos="fade">Our Restaurant Menu</h2>
          </div>
        </div>
        <div class="food-menu-tabs" data-aos="fade">
          <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active letter-spacing-2" id="mains-tab" data-toggle="tab" href="#mains" role="tab" aria-controls="mains" aria-selected="true">Mains</a>
            </li>
            <li class="nav-item">
              <a class="nav-link letter-spacing-2" id="desserts-tab" data-toggle="tab" href="#desserts" role="tab" aria-controls="desserts" aria-selected="false">Desserts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link letter-spacing-2" id="drinks-tab" data-toggle="tab" href="#drinks" role="tab" aria-controls="drinks" aria-selected="false">Drinks</a>
            </li>
          </ul>
          <div class="tab-content py-5" id="myTabContent">
            
            
            <div class="tab-pane fade show active text-left" id="mains" role="tabpanel" aria-labelledby="mains-tab">
              <div class="row">
                <div class="col-md-6">

                  <?php
                    $food=$userObject->getFoodItemsByCategory("mains");
                    if($food){
                      foreach ($food as $key => $value) {
                  ?>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">PKR <?php echo $value->getPrice()?></span>
                    <h3 class="text-white"><a href="#" class="text-white"><?php echo $value->getName()?></a></h3>
                    <p class="text-white text-opacity-7"><?php echo $value->getDescription()?></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <?php 
                  }}
                ?>

                </div>
              </div>
            </div> <!-- .tab-pane -->

            <div class="tab-pane fade text-left" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">
              <div class="row">
                <div class="col-md-6">
                  <?php
                    $food=$userObject->getFoodItemsByCategory("desserts");
                    if($food){
                      foreach ($food as $key => $value) {
                  ?>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">PKR <?php echo $value->getPrice()?></span>
                    <h3 class="text-white"><a href="#" class="text-white"><?php echo $value->getName()?></a></h3>
                    <p class="text-white text-opacity-7"><?php echo $value->getDescription()?></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <?php 
                  }}
                ?>
                </div>
              </div>
            </div> <!-- .tab-pane -->
            <div class="tab-pane fade text-left" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
              <div class="row">
                <div class="col-md-6">
                  <?php
                    $food=$userObject->getFoodItemsByCategory("drinks");
                    if($food){
                      foreach ($food as $key => $value) {
                  ?>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">PKR <?php echo $value->getPrice()?></span>
                    <h3 class="text-white"><a href="#" class="text-white"><?php echo $value->getName()?></a></h3>
                    <p class="text-white text-opacity-7"><?php echo $value->getDescription()?></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <?php 
                  }}
                ?>                  
                </div>
              </div>
            </div> <!-- .tab-pane -->
          </div>
        </div>
      </div>
    </section>
    
    <!-- END section -->
    <section class="section testimonial-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">People Says</h2>
          </div>
        </div>
        <div class="row">
          <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            <?php for($i=0;$i<5;$i++){?>
            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="assets/images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Jean Smith</em></p>
            </div> 
          <?php }?>
          </div>
            <!-- END slider -->
        </div>

      </div>
    </section>
    
    <section class="section bg-image overlay" style="background-image: url('assets/images/hero_4.jpg');">
        <div class="container" >
          <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
              <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
            </div>
            <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
              <a href="reservation" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve Now</a>
            </div>
          </div>
        </div>
      </section>
    <?php
    require 'footer.php';
    ?>