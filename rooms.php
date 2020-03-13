  <?php
    require 'header.php';
    $userObject= new Controller(new Manager(), Connection::getConnection(DB_NAME));
    $data=$userObject->viewRooms(false);    
  ?>

    <section class="site-hero inner-page overlay" style="background-image: url(assets/images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Rooms</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index">Home</a></li>
              <li>&bullet;</li>
              <li>Rooms</li>
            </ul>
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

    <section class="section pb-4">
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

    
    <section class="section">
      <div class="container">
        
        <div class="row">
          <?php
          foreach ($data as $key => $value) {
          ?>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="javascript:void(0)" class="room">
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
    
    <section class="section bg-light">

      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade">Great Offers</h2>
            <p data-aos="fade">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
      
        <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
          <a href="reservation" class="image d-block bg-image-2" style="background-image: url('assets/images/img_1.jpg');"></a>
          <div class="text">
            <span class="d-block mb-4"><span class="display-4 text-primary">PKR <?php echo $data[0]->getCategory()->getRent()?></span> <span class="text-uppercase letter-spacing-2">/ per night</span> </span>
            <h2 class="mb-4"><?php echo $data[0]->getCategory()->getName()?></h2>
            <p>
              <?php
              $description=explode("\r\n", $data[0]->getCategory()->getDescription());
              foreach ($description as $key1 => $value1) {
              ?>
              <i class="fa fa-check text-primary" aria-hidden="true"></i> <?php echo $value1;?>
              <?php
                }
                ?>              
              </p>
            <p><a href="reservation" class="btn btn-primary text-white">Book Now</a></p>
          </div>
        </div>
        <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="200">
          <a href="reservation" class="image d-block bg-image-2 order-2" style="background-image: url('assets/images/img_2.jpg');"></a>
          <div class="text order-1">
            <span class="d-block mb-4"><span class="display-4 text-primary">PKR <?php echo $data[3]->getCategory()->getRent()?></span> <span class="text-uppercase letter-spacing-2">/ per night</span> </span>
            <h2 class="mb-4"><?php echo $data[3]->getCategory()->getName()?></h2>
            <p>
              <?php
              $description=explode("\r\n", $data[3]->getCategory()->getDescription());
              foreach ($description as $key1 => $value1) {
              ?>
              <i class="fa fa-check text-primary" aria-hidden="true"></i> <?php echo $value1;?>
              <?php
                }
                ?>              
              </p>
            <p><a href="reservation" class="btn btn-primary text-white">Book Now</a></p>
          </div>
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