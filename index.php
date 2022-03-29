<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>En:Able | Home</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
<?php $uid = uniqid('user-'); ?>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>En:Able</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
<!--          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>-->
<!--
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li>
-->
<!--
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
-->
<!--          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>-->
          <li><a class="getstarted" data-bs-toggle="modal" data-bs-target="#modal1" href="javascript:void();">REGISTER NOW</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
  <!-- Modal -->
    <div class="modal fade" id="modal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white" style="border-bottom-color:transparent;">
           <h4 class="text-white mt-3">Need Tailored Media Plan For Your Ad?</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-white">
            <form action="process.php" method="POST" name="userform" id="userform">
                <div class="row mt-3">
                    <div class="col-md-10 col-lg-10 col-xl-10 mx-auto">
                       <h3 class="text-primary text-center mb-3"><strong>Register Now</strong></h3>
                        <br>
                        <div class="mb-3">
                         <input type="hidden" name="uid" class="uid" value="<?php echo $uid; ?>">
                          <label  class="form-label text-primary fw-bold">Email ID <span class="text-danger"><strong>* (Only Official Email ID allowed)</strong></span></label>
                          <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Enter Your Official Email ID *" required>
                          <span class="text-danger fw-bold" id="email-error" style="display:none;">Please Enter Offical Email ID only</span>
                        </div>

                        <div class="mb-3">
                          <label  class="form-label text-primary fw-bold">Mobile Number <span class="text-danger"><strong>*</strong></span></label>
                          <input type="text" class="form-control" id="contact" name="contact" onkeypress="return isNumberKey(event)" placeholder="Enter Your 10 Digit Mobile Number *" required>
                          <span class="text-danger fw-bold" id="contact-error" style="display:none;">Please Enter Valid Contact Number</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-primary fw-bold">Marketing Activity</label>
                            <select name="activity" id="activity" class="form-control">
                                <option value="">Select Your Marketing Activity</option>
                                <option value="Lead Generation">Lead Generation</option>
                                <option value="App Download">App Download</option>
                                <option value="Social Media Marketing">Social Media Marketing</option>
                                <option value="Branding & Promotion">Branding &amp; Promotion</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-primary fw-bold">Industry Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value="">Select Your Industry Category</option>
                                <option value="FMCG">FMCG</option>
                                <option value="Automobile">Automobile</option>
                                <option value="Healthcare">Healthcare</option>
                                <option value="Real Estate">Real Estate</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-primary fw-bold">Target Location</label>
                            <select name="location" id="location" class="form-control">
                                <option value="">Select Your Target Location</option>
                                <option value="PAN India">PAN India</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Bengaluru">Bengaluru</option>
                                <option value="Kolkata">Kolkata</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-primary fw-bold">Tentative Budget <span class="text-danger"><strong>(Min. value should be 10000)</strong></span></label>
                            <input type="number" class="form-control" name="budget" id="budget" placeholder="Please Enter your Tentative Budget" minlength="4">
                            <span class="text-danger fw-bold" id="budget-error" style="display:none;">Budget cannot be less than 10000</span>
                        </div>

                        <div class="mt-3">
                           <span class="text-danger" id="allerror" style="display:none;">Please fill the * details properly</span>
                           <center><button type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary form-control" onclick="return verify();">Submit</button></center>
                        </div>
                        <p id="response"></p>

                    </div>
                </div>
            </form>
          </div>
          <div class="modal-footer bg-primary" style="border-top-color:transparent;">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <!-- ======= Main Banner Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Grow your business with 350+ Million Audience</h1>
<!--          <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with Bootstrap</h2>-->
          <div data-aos="fade-up" data-aos-delay="200">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Register Now</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Main Banner Section -->

  <main id="main">
   
       <!-- ======= About Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
<!--          <h2>Our Values</h2>-->
          <p>Showcase your brand along with content that your customer loves to watch</p>
        </header>

        <div class="row">

          <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="assets/img/values-1.png" class="img-fluid" alt="">
              <h2 style="color:#012970;"><strong>Get Noticed Right on the FRONT</strong></h2>
<!--              <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>-->
            </div>
          </div>

          <div class="col-lg-8 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="assets/img/mid-image.JPG" class="img-fluid" alt="">
<!--              <h3>Voluptatem voluptatum alias</h3>-->
<!--              <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>-->
            </div>
          </div>

<!--
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Fugit cupiditate alias nobis.</h3>
              <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
            </div>
          </div>
-->

        </div>

      </div>

    </section><!-- End About Section -->
    
        <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-4">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span>138+</span>
                <h6>Successfully Build Business</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span>75%+</span>
                <h6>Brand Engagement</h6>
              </div>
            </div>
          </div>

<!--
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>
-->

          <div class="col-lg-4 col-md-4">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span>80%</span>
                <h6>Audience Connection</h6>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
    
    
    <!-- ======= Display Ad Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h1 style="color:#012970;"><strong>Check Your Free Display Ad here...</strong></h1>
              <br>
              <h2>Try Now</h2>
              <br>
<!--              <form action="process.php" method="POST" name="firstform" id="firstform">-->
              <p><span class="text-danger">* <strong>Only Official Email ID are allowed</strong></span></p>
              <div class="input-group">
                <span class="input-group-text text-white" style="background:#4154f1;"><i class="bi bi-envelope-fill"></i></span>
                <input type="email" class="form-control" name="emailid1" id="emailid1" placeholder="Enter Your Official Email ID" required>
                
                <input type="hidden" name="uid" class="uid" id="uid" value="<?php echo $uid; ?>">
              </div>
              <p id="email1-error" class="text-danger fw-bold" style="display:none;">Please Enter Official Email ID</p>
              <p></p>
              
<!--              <p><span class="text-danger">*</span> Avoid personal Gmail, Yahoo, Rediff Email ID</p>-->
              <div class="input-group">
                <span class="input-group-text text-white" style="background:#4154f1;"><i class="bi bi-telephone-fill"></i></span>
                <input type="text" class="form-control" name="contact1" id="contact1" onkeypress="return isNumberKey(event)" placeholder="Enter Your 10 Digit Mobile Number" required>
              </div>
              <p id="contact1-error" class="text-danger fw-bold" style="display:none;">Please Enter Valid 10 Digit Contact Number</p>
              <p></p>
              <div class="text-center text-lg-start" id='firsthide'>
<!--
               <button type="submit" id="firstsubmit" name="firstform"  class=" btn btn-read-more d-inline-flex align-items-center justify-content-center align-self-center" onclick="return firstform()"><span>Next</span>
                  <i class="bi bi-arrow-right"></i></button>
-->
                <a href="#features" id="firstsubmit" onclick="return firstform()" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Next</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
<!--              </form>-->
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
            <div class="clients-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="assets/img/ad/slide1.jpg" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/ad/slide2.jpg" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/ad/slide3.jpg" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/ad/slide4.jpg" class="img-fluid" alt=""></div>
<!--
                <div class="swiper-slide"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
-->
              </div>
              <div class="swiper-pagination"></div>
              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Display Ad Section -->


    <!-- ======= Activity Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
<!--          <h2>Features</h2>-->
          <p>Select Marketing Activity For Your Business</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <img src="assets/img/features.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check-circle"></i>
                  <select name="activity1" id="activity1" class="form-control">
                        <option value="">Select Your Marketing Activity</option>
                        <option value="Lead Generation">Lead Generation</option>
                        <option value="App Download">App Download</option>
                        <option value="Social Media Marketing">Social Media Marketing</option>
                        <option value="Branding & Promotion">Branding &amp; Promotion</option>
                    </select>
                </div>
              </div>

<!--
              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-telephone"></i>
                  <input type="text" class="form-control" name="contact" placeholder="Please Enter Your 10 Digit Mobile Number">
                </div>
              </div>
-->

              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-arrow-right-square"></i>
                  <a href="#faq" id="secondsubmit" onclick="return secondform()" class="btn btn-primary" style="background-color:#4154f1 !important"> Next </a>
                </div>
              </div>

<!--
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Rerum omnis sint</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Alias possimus</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Repellendus mollitia</h3>
                </div>
              </div>
-->

            </div>
          </div>

        </div> <!-- / row -->


      </div>

    </section><!-- End Activity Section -->
    
    
    <!-- ======= Industry Category Section ======= -->
    <section id="faq" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
<!--          <h2>Features</h2>-->
          <p>Choose Your Industry Category To Connect Right Audience</p>
        </header>

        <div class="row">

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check-circle"></i>
                  <select name="category1" id="category1" class="form-control">
                        <option value="">Select Your Industry Category</option>
                        <option value="FMCG">FMCG</option>
                        <option value="Automobile">Automobile</option>
                        <option value="Healthcare">Healthcare</option>
                        <option value="Real Estate">Real Estate</option>
                    </select>
                </div>
              </div>


              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-arrow-right-square"></i>
<!--                  <a href="" class="btn btn-primary" style="background-color:#4154f1 !important"> Previous </a>-->
                  <a href="#portfolio" id="thirdsubmit" onclick="return thirdform()" class="btn btn-primary" style="background-color:#4154f1 !important"> Next </a>
                </div>
              </div>


            </div>
          </div>
          
          <div class="col-lg-6">
            <img src="assets/img/features.png" class="img-fluid" alt="">
          </div>

        </div> <!-- / row -->


      </div>

    </section><!-- End Industry Category Section -->
    
    
    <!-- ======= Location Section ======= -->
    <section id="portfolio" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
<!--          <h2>Features</h2>-->
          <p>Any Specific Location You Would Like To Target</p>
        </header>

        <div class="row">
          
          <div class="col-lg-6">
            <img src="assets/img/features.png" class="img-fluid" alt="">
          </div>
          
          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check-circle"></i>
                  <select name="location1" id="location1" class="form-control">
                        <option value="">Select Your Target Location</option>
                        <option value="PAN India">PAN India</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Chennai">Chennai</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Bengaluru">Bengaluru</option>
                        <option value="Kolkata">Kolkata</option>
                    </select>
                </div>
              </div>
              
              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check-circle"></i>
                  <input type="number" class="form-control" name="budget1" id="budget1" placeholder="Please Enter your Tentative Budget" minlength="5">
                  &nbsp;&nbsp;<p class="text-danger fw-bold" id="budget1-error" style="display:none;">Budget cannot be less than 10000</p>
                </div>
              </div>


              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-arrow-right-square"></i>
<!--                  <a href="" class="btn btn-primary" style="background-color:#4154f1 !important"> Previous </a>-->
                  <a href="#team" id="fourthsubmit" onclick="return fourthform()" class="btn btn-primary" style="background-color:#4154f1 !important"> Submit </a>
                </div>
              </div>


            </div>
          </div>

        </div> <!-- / row -->


      </div>

    </section><!-- End Location Section -->
    
       <!-- ======= Thank You Section ======= -->
    <section id="team" style="display:none;" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
<!--          <h2>Our Values</h2>-->
          <p>These are some estimated platforms as per your requirement</p>
        </header>

        <div class="row">
          
<!--          <div class="col-lg-8 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">-->
<!--            <div class="box">-->
<!--              <img src="assets/img/mid-image.JPG" class="img-fluid" alt="">-->
<!--              <h3>Voluptatem voluptatum alias</h3>-->
<!--              <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>-->
<!--            </div>-->
<!--          </div>-->

          <div class="col-lg-12 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
             <h3 style="color:#012970;"><strong>Thank You for sharing the requirement<br><br> Our <span class="text-danger">Team Expert</span> will connect with a <span class="text-danger">Tailored</span> media plan</strong></h3>
              <img src="assets/img/values-1.png" class="img-fluid" alt="">
<!--              <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>-->
            </div>
          </div>


<!--
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Fugit cupiditate alias nobis.</h3>
              <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
            </div>
          </div>
-->

        </div>

      </div>

    </section><!-- End Thank You Section -->
   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>A108 Adam Street,<br>New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="contact.php" method="POST" name="contactform" id="contactform" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="contactname" id="contactname" class="form-control" placeholder="Your Name" required>
                  <p class="text-danger fw-bold" id="errorname" style="display:none;">Please Enter Your Name</p>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="contactemail" id="contactemail"  placeholder="Your Email" required>
                  <p class="text-danger fw-bold" id="erroremail" style="display:none;">Please Enter Your Email</p>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="contactsubject" id="contactsubject" placeholder="Subject" required>
                  <p class="text-danger fw-bold" id="errorsubject" style="display:none;">Please Enter Your Subject</p>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="contactmessage" id="contactmessage" rows="6" placeholder="Message" required></textarea>
                  <p class="text-danger fw-bold" id="errormessage" style="display:none;">Please Enter Your Message</p>
                </div>

                <div class="col-md-12 text-center">
<!--                  <div class="loading">Loading</div>-->
<!--                  <div class="errormessage"></div>-->
                  <div class="sentmessage text-success fw-bold" style="display:none;">Your message has been sent. Thank you!<br></div>

                  <button type="submit" name="btncontact" id="btncontact" onclick="return sendmail()"><span id="spin" class="spinner-border" style="display:none;"></span> Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

<!--
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
-->

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>En:Able</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#" class="backtotop">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#values">Register</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact</a></li>
<!--              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>-->
<!--              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>-->
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
<!--
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
-->
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <a href="index.php"><strong><span>En:Able</span></strong></a>  All Rights Reserved
      </div>
<!--
      <div class="credits">
        
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
-->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<!--  <script src="assets/vendor/php-email-form/validate.js"></script>-->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--  <script src="assets/js/custom.js"></script>-->
<script>
setTimeout(function(){
    $('#modal1').modal('show')
}, 5000);
    
function sendmail(){
    var contactname = $("#contactname").val().trim();
    var contactemail = $("#contactemail").val().trim();
    var contactsubject = $("#contactsubject").val().trim();
    var contactmessage = $("#contactmessage").val().trim();
    var contactform = $('#contactform');
    var btncontact = $('#btncontact');
    var sentmessage = $('.sentmessage');
    var errormessage = $('.errormessage');
    
    if(contactname !== ""){
        $("#errorname").css({"display":"none"});
        if(contactemail !== ""){
            $("#erroremail").css({"display":"none"});
            if(contactsubject !== ""){
                $("#errorsubject").css({"display":"none"});
                if(contactmessage !== ""){
                    $("#errormessage").css({"display":"none"});
                    $.ajax({
                        url: "contact.php",
                        type: "POST",
                        data: {contactname:contactname,contactemail:contactemail,contactsubject:contactsubject,contactmessage:contactmessage,btncontact:"btncontact"},
                        beforeSend: function(){
                            $("#spin").css({"display":"inline"});
                            btncontact.text("Sending");
                            btncontact.prop('disabled',true);
                        },
                        success: function(data){
                            if(data == "success"){
                                alert(data);
                                $("#spin").css({"display":"none"});
                                $(".sentmessage").css({"display":"inline"});
                                btncontact.text("Send Message");
                                btncontact.prop('disabled',false);
                                contactform.trigger("reset");
                            }
                            else if(data == "validemail"){
                                alert(data);
                                $("#spin").css({"display":"none"});
                                $("#contactemail").focus();
                                $("#erroremail").css({"display":"inline"}); 
//                                $(".sentmessage").css({"display":"inline"});
                                btncontact.text("Send Message");
                                btncontact.prop('disabled',false);
                            }
                            else if(data == "mandatory"){
                                alert(data);
                                $("#spin").css({"display":"none"});
                                $("#contactname").focus();
                                $("#errorname").css({"display":"inline"});
                                $("#erroremail").css({"display":"inline"});
                                $("#errorsubject").css({"display":"inline"});
                                $("#errormessage").css({"display":"inline"});
//                                $(".sentmessage").css({"display":"inline"});
                                btncontact.text("Send Message");
                                btncontact.prop('disabled',false);
                            }
                            else{
                                alert(data);
                                $("#spin").css({"display":"none"});
                                $(".sentmessage").css({"display":"inline"});
                                $(".sentmessage").text("There was error while sending message, please contact website owner/admin.");
                                btncontact.text("Send Message");
                                btncontact.prop('disabled',false);
                            }
                        }
                    });
                }
                else{
                    $("#contactmessage").focus();
                    $("#errormessage").css({"display":"inline"});
                }
            }
            else{
                $("#contactsubject").focus();
                $("#errorsubject").css({"display":"inline"});
            }
        }
        else{
            $("#contactemail").focus();
            $("#erroremail").css({"display":"inline"});
        }
    }
    else{
        $("#contactname").focus();
        $("#errorname").css({"display":"inline"});
    }
    
    return false;
}    

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;  
}

function firstform(){
    var uid = $('.uid').val().trim();
    var emailid1 = $("#emailid1").val().trim();
    var contact1 = $("#contact1").val().trim();
        
    if(emailid1 !== ""){
        if(emailid1.includes("gmail") || emailid1.includes("yahoo") || emailid1.includes("rediff")){
            $("#emailid1").focus();
            $("#email1-error").css({"display":"inline"});
            $("#email1-error").text("Please Enter Official Email ID");
        }
        else{
            $("#email1-error").css({"display":"none"});
            if(contact1 !== "" && contact1.length == 10){
                $('#contact1-error').css({"display":"none"});
                $.ajax({
                    url: 'process.php',
                    type: 'POST',
                    data: {uid:uid,emailid1:emailid1,contact1: contact1,firstform:"firstform"},
                    beforeSend: function(){    
                      $("#firstsubmit").prop("disabled",true);
                      $("#firsthide").css({"display":"none"});    
                    },
                    success:function(data){
                        if(data == "success"){
                            alert(data);
                            $("#firstsubmit").prop("disabled",false);
                            $("#firsthide").css({"display":"inline"});
                            $("html , body").animate({
                                scrollTop: $("#features").offset().top},
                            'slow');
                            $("#emailid1").val("");
                            $("#contact1").val("");
                        }
                        if(data == "validemail"){
                            alert(data);
                            $("#firstsubmit").prop("disabled",false);
                            $("#firsthide").css({"display":"inline"});
                            $("#emailid1").focus();
                            $("#email1-error").css({"display":"inline"});
                            $("#email1-error").text("Please Enter Valid Email ID");
                        }
                        if(data == "officialemail"){
                            alert(data);
                            $("#firstsubmit").prop("disabled",false);
                            $("#firsthide").css({"display":"inline"});
                            $("#emailid1").focus();
                            $("#email1-error").css({"display":"inline"});
                            $("#email1-error").text("Please Enter Official Email ID");
                        }
                        if(data == "validnumber"){
                            alert(data);
                            $("#firstsubmit").prop("disabled",false);
                            $("#firsthide").css({"display":"inline"});
                            $('#contact1').focus();
                            $('#contact1-error').css({"display":"inline"});
                        }
                        if(data == "mandatory"){
                            alert(data);
                            $("#firstsubmit").prop("disabled",false);
                            $("#firsthide").css({"display":"inline"});
                            $("#email1-error").css({"display":"inline"});
                            $("#email1-error").text("Please Enter Official Email ID");
                            $('#contact1-error').css({"display":"inline"});
                        }
                        if(data == "fail"){
                            alert("Please Contact Website Admin via Contact Form or Email");
                            $("#firstsubmit").prop("disabled",false);
                            $("#firsthide").css({"display":"inline"});
                        }
                    }
                });
            }
            else{
               $('#contact1').focus();
               $('#contact1-error').css({"display":"inline"});
            }
        }
    }
    else{
        $("#emailid1").focus();
        $("#email1-error").css({"display":"inline"});
        $("#email1-error").text("Please Enter Valid Email ID");
    }
    return false; 
}

function secondform(){
    var uid = $('.uid').val().trim();
    var activity1 = $('#activity1').val().trim();
        
    if(activity1 !== ""){
        $.ajax({
            url: 'process.php',
            type: 'POST',
            data: {uid:uid,activity1:activity1,secondform:"secondform"},
            success: function(data){
                if(data == "success"){
                    alert(data);
                    $("html , body").animate({
                        scrollTop: $("#faq").offset().top},
                    'slow');
                    $("#activity1").val("");
                }
                else{
                    alert(data);
                    $("html , body").animate({
                        scrollTop: $("#about").offset().top},
                    'slow');
                    $("#emailid1").focus();
                    $("#email1-error").css({"display":"inline"});
                    $("#email1-error").text("Please Enter Valid Email ID");
                    $('#contact1-error').css({"display":"inline"});
                }
            }
        });
    }
    return true;
} 
    
function thirdform(){
    var uid = $(".uid").val().trim();
    var category1 = $("#category1").val().trim();
        
    if(category1 !== ""){
        $.ajax({
            url: "process.php",
            type: "POST",
            data: {uid:uid,category1:category1,thirdform:"thirdform"},
            success: function(data){
                if(data == "success"){
                    alert(data);
                    $("html, body").animate({
                        scrollTop: $("#portfolio").offset().top},
                    'slow');
                    $("#category1").val("");
                }
                else{
                    alert(data);
                    $("html , body").animate({
                        scrollTop: $("#about").offset().top},
                    'slow');
                    $("#emailid1").focus();
                    $("#email1-error").css({"display":"inline"});
                    $("#email1-error").text("Please Enter Valid Email ID");
                    $('#contact1-error').css({"display":"inline"});
                }
            }
        });
    }
    return true;
} 
  
function fourthform(){
    var uid = $(".uid").val().trim();
    var location1 = $("#location1").val().trim();
    var budget1 = $("#budget1").val().trim();
        
    if(location1 !== "" && budget1 !== ""){
            if(budget1 >= 10000){
                $("#budget1-error").css({"display":"none"});
                $.ajax({
                    url: "process.php",
                    type: "POST",
                    data: {uid:uid,location1:location1,budget1:budget1,fourthform:"fourthform"},
                    success: function(data){
                        if(data == "success"){
                            alert(data);
                            $("#team").css({"display":"inline"});
                            $("html, body").animate({
                                scrollTop: $("#team").offset().top},
                            "slow");
                            $("#budget1").val("");
                            $("#location1").val("");
                        }
                        else if(data == "budgetless"){
                            alert(data);
                            $("#budget1").focus();
                            $("#budget1-error").css({"display":"inline"});
                        }
                        else{
                            alert(data);
                            $("html , body").animate({
                                scrollTop: $("#about").offset().top},
                            'slow');
                            $("#emailid1").focus();
                            $("#email1-error").css({"display":"inline"});
                            $("#email1-error").text("Please Enter Valid Email ID");
                            $('#contact1-error').css({"display":"inline"});
                        }
                    }
                });
            }
            else{
                $("#budget1").focus();
                $("#budget1-error").css({"display":"inline"});
            }
    }
    if(location1 !== "" && budget1 == ""){
                $.ajax({
                    url: "process.php",
                    type: "POST",
                    data: {uid:uid,location1:location1,budget1:budget1,fourthform:"fourthform"},
                    success: function(data){
                        if(data == "success"){
                            alert(data);
                            $("#team").css({"display":"inline"});
                            $("html, body").animate({
                                scrollTop: $("#team").offset().top},
                            "slow");
                            $("#budget1").val("");
                            $("#location1").val("");
                        }
                        else if(data == "budgetless"){
                            alert(data);
                            $("#budget1").focus();
                            $("#budget1-error").css({"display":"inline"});
                        }
                        else{
                            alert(data);
                            $("html , body").animate({
                                scrollTop: $("#about").offset().top},
                            'slow');
                            $("#emailid1").focus();
                            $("#email1-error").css({"display":"inline"});
                            $("#email1-error").text("Please Enter Valid Email ID");
                            $('#contact1-error').css({"display":"inline"});
                        }
                    }
                });
    }
    if(location1 == "" && budget1 !== ""){
        if(budget1 >= 10000){
                $("#budget1-error").css({"display":"none"});
                $.ajax({
                    url: "process.php",
                    type: "POST",
                    data: {uid:uid,location1:location1,budget1:budget1,fourthform:"fourthform"},
                    success: function(data){
                        if(data == "success"){
                            alert(data);
                            $("#team").css({"display":"inline"});
                            $("html, body").animate({
                                scrollTop: $("#team").offset().top},
                            "slow");
                            $("#budget1").val("");
                            $("#location1").val("");
                        }
                        else if(data == "budgetless"){
                            alert(data);
                            $("#budget1").focus();
                            $("#budget1-error").css({"display":"inline"});
                        }
                        else{
                            alert(data);
                            $("html , body").animate({
                                scrollTop: $("#about").offset().top},
                            'slow');
                            $("#emailid1").focus();
                            $("#email1-error").css({"display":"inline"});
                            $("#email1-error").text("Please Enter Valid Email ID");
                            $('#contact1-error').css({"display":"inline"});
                        }
                    }
                });
            }
            else{
                $("#budget1").focus();
                $("#budget1-error").css({"display":"inline"});
                return false;
            }
    }
    return true;
}
    
function verify(){
    var uid = $('.uid').val().trim();
    var emailid = $('#emailid').val().trim();
    var contact = $('#contact').val().trim();
    var activity = $('#activity').val().trim();
    var category = $('#category').val().trim();
    var location = $('#location').val().trim();
    var budget = $('#budget').val().trim();
        
    if(emailid !== ""){
       if(emailid.includes("gmail") || emailid.includes("yahoo") || emailid.includes("rediff")){
           $('#emailid').focus();
           $('#email-error').css({"display":"inline"});
           return false;
       }
       else{
           $('#email-error').css({"display":"none"});
           if(contact !== "" && contact.length == 10){
               $('#contact-error').css({"display":"none"});
               if(budget !== ""){
                   if(budget >= 10000){
                      $('#budget-error').css({"display":"none"});
                      $.ajax({
                        url: 'process.php',
                        type: 'POST',
                        data: {uid:uid,emailid:emailid,contact:contact,activity:activity,category:category,location:location,budget:budget,
                                   btnsubmit:"btnsubmit"},
                        beforeSend: function(){
                            $("#btnsubmit").text("Submitting...");
                            $("#btnsubmit").prop("disabled",true);
                        },
                        success:function(data){
                            alert(data);
                            $("#team").css({"display":"inline"});
                            $("#btnsubmit").text("Submit");
                            $("#btnsubmit").prop("disabled",false);
                            $("#response").addClass("alert alert-success");
                            $("#response").text(data);
                            setTimeout(function(){
                                $('#modal1').modal('hide')
                            }, 500);
                            $("#userform").trigger("reset");
                            $("#response").removeClass("alert alert-success");
                            $("#response").text("");
                            $("html, body").animate({
                                scrollTop: $("#team").offset().top},
                            "slow");
                            }
                        });
                   }
                   else{
                      $('#budget').focus();
                      $('#budget-error').css({"display":"inline"});
                   }
               }
               else{
                   $.ajax({
                        url: 'process.php',
                        type: 'POST',
                        data: {uid:uid,emailid:emailid,contact:contact,activity:activity,category:category,location:location,budget:budget,
                                   btnsubmit:"btnsubmit"},
                       beforeSend: function(){
                            $("#btnsubmit").prop("disabled",true);
                        },
                        success:function(data){
                            alert(data);
                            $("#team").css({"display":"inline"});
                            $("#btnsubmit").prop("disabled",false);
                            $("#response").addClass("alert alert-success");
                            $("#response").text(data);
                            setTimeout(function(){
                              $('#modal1').modal('hide')
                            }, 500);
                            $("#userform").trigger("reset");
                            $("#response").removeClass("alert alert-success");
                            $("#response").text("");
                            $("html, body").animate({
                                scrollTop: $("#team").offset().top},
                            "slow");
                        }
                    });
               }
           }
           else{
               $('#contact').focus();
               $('#contact-error').css({"display":"inline"});
           }
       }
    }
    else{
       $('#emailid').focus();
       $('#email-error').css({"display":"inline"});
       $('#email-error').text("Please Enter Valid Email ID");
    }
        
    return false; 
}    
</script>

</body>

</html>