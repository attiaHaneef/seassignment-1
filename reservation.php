    <?php
      require 'header.php';
      $userObject= new Controller(new Manager(), Connection::getConnection(DB_NAME));
      $dataCategory=$userObject->getRoomCategroy(); 
      /**/
      $hotelData=$userObject->getHotel();
    ?>
    <section class="site-hero inner-page overlay" style="background-image: url(assets/images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Reservation Form</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index">Home</a></li>
              <li>&bullet;</li>
              <li>Reservation</li>
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
    <section class="section contact-section" id="next">
      <div class="container">
        <div class="row">
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <!--FORM-->
            <div class="bg-white p-md-5 p-4 mb-5 border">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="email">CNIC <span class="text-danger">*</span></label>
                  <input required="" autofocus="" type="cnic" id="cnic" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="name">Name <span class="text-danger">*</span></label>
                  <input required=""  type="text" id="name" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="number">Phone <span class="text-danger">*</span></label>
                  <input required="" type="text" id="number" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="email">Email <span class="text-danger">*</span></label>
                  <input required="" type="email" id="email" class="form-control ">
                </div>                
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="gender" class="font-weight-bold text-black">Gender <span class="text-danger">*</span></label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="gender" id="gender" class="form-control">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="not">Not Specified</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="birthday">Birthday <span class="text-danger">*</span></label>
                  <input required="" type="text" id="birthday" class="form-control">
                </div>                
              </div>                        
              <div class="row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="checkin_date">Date Check In <span class="text-danger">*</span></label>
                  <input required="" value="<?php if(isset($_POST['checkin_date'])){echo $_POST['checkin_date'];}?>" type="text" id="checkin_date" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="checkout_date">Date Check Out <span class="text-danger">*</span></label>
                  <input required="" value="<?php if(isset($_POST['checkout_date'])){echo $_POST['checkout_date'];}?>" type="text" id="checkout_date" class="form-control">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="adults" class="font-weight-bold text-black">Adults <span class="text-danger">*</span></label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="adults" id="adults" class="form-control">
                          <?php for($i=1;$i<=4;$i++){
                            echo "<option ";
                            if (isset($_POST['adults'])) {
                              if($_POST['adults']==$i)
                                echo "selected=''";
                            }
                            else if(!isset($_POST['adults']))
                            {
                              if($i==2)
                                 echo "selected=''";
                            }
                            echo "value=".$i.">".$i."</option>";   
                          }?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 form-group">
                  <label for="children" class="font-weight-bold text-black">Children <span class="text-danger">*</span></label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="children" id="children" class="form-control">
                          <?php for($i=0;$i<=4;$i++){
                            echo "<option ";
                            if (isset($_POST['children'])) {
                              if($_POST['children']==$i)
                                echo "selected=''";
                            }                            
                            echo "value=".$i.">".$i."</option>";   
                          }?>
                    </select>
                  </div>
                </div>
              </div>   
              <div class="row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="message">Room Type</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="category" id="category" class="form-control">
                      <?php 
                      foreach ($dataCategory as $key => $value) { 
                          echo "<option ";
                          if($value->getName()=="Double")
                            echo "selected=''";
                          echo "value='".$value->getId()."'>".$value->getName()."</option>";
                      }?>
                    </select>
                  </div>
                </div>                
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="message">Address</label>
                  <input name="address" id="address" class="form-control">
                </div>
              </div>           
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="message">Notes</label>
                  <textarea name="message" id="message" class="form-control " cols="30"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <button class="btn btn-primary text-white py-3 px-5 font-weight-bold" id="submitAddReservation">Reserve Now</button>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
              <div class="col-md-10 ml-auto contact-info">
                <p><span class="d-block">Address:</span> <span class="text-black"> <?php echo $hotelData->getAddress()?></span></p>
                <p><span class="d-block">Phone:</span> <span class="text-black"> <?php echo $hotelData->getNumber()?></span></p>
                <p><span class="d-block">Email:</span> <span class="text-black"> <?php echo $hotelData->getEmail()?></span></p>
                <span id="error" class="text-danger"></span>              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section testimonial-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">People Says</h2>
          </div>
        </div>
        <div class="row">
          <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            
            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="assets/images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Jean Smith</em></p>
            </div> 

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="assets/images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="assets/images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>


            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="assets/images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Jean Smith</em></p>
            </div> 

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="assets/images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="assets/images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>

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
    <div id="reservationMessage" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-body text-center">
              <i class="fa fa-check text-primary" style="font-size:80px; "></i>
              <h3>Booking has been reserved!</h3>
              <div class="m-t-20"> <a href="#" class="btn btn-primary text-white" data-dismiss="modal">Close</a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <?php
    require 'footer.php';
    ?>