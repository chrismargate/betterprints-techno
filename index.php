<?php
    // include "top_nav.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BetterPrints</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/index.css?v=9" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div id="logo">
        <div class="row">
          <div class="col">
            <a href="index.php"><img src="assets/logo/bp-logo-transparent.png"/></a>
          </div>
          <div class="col">
            <!-- <h1><a href="index.html">BetterPrints</a></h1> -->
            <!-- <h1 class="h1-title">BetterPrints</h1> -->
          </div>
        </div>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li><a class="nav-link scrollto" href="#franchise">Franchise</a></li>
          <li><a class="nav-link scrollto" href="#screenshots">Branches</a></li>
          <li><a class="nav-link scrollto" href="#about-us">About Us</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
          <?php
          if(isset($_SESSION['username'])){
            echo '<li><a class="nav-link scrollto" href="dashboard.php">Go to Dashboard</a></li>';
            // $greetingUsername = $_SESSION['username'];
            // $greeting = '<li><a class="nav-link scrollto" href="logout.php">Hello, ' . $greetingUsername . ' </a></li>';
            // echo $greeting;
            echo '<li><a class="nav-link scrollto" href="logout.php">Logout</a></li>';
          }else{
            echo '<li><a class="nav-link scrollto" href="register.php">Register</a></li>';
            echo '<li><a class="nav-link scrollto" href="login.php">Login</a></li>';
          }
          
          ?>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
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
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav> -->
      <!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-in">
      <h1>Welcome to BetterPrints</h1>
      <h2 class="h2-subheading">Providing prints for the future</h2>
      <img src="assets/img/hero-bg.jpg" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
      <div class="hero-container-introduction padd-section text-center">
        <div class="container" data-aos="fade-up">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="hero-introduction-content">
                  <div class="top-top">
                    <!-- <h2>Our Users Speack volumes us</h2> -->
                    <p>BetterPrints is a technology company that seeks to fill the gaps and limitations in the printing industry by bridging the digital gap and implementing new technologies, creating a more sustainable future for printing and solving logistic inefficiency, high overhead costs, data security risks and more.</p>
                    <!-- <h4>Kimberly Tran<span>manager</span></h4> -->
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      <a href="progress_page.php" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>Learn more about our business!</h2>
          <p class="separator">Get more into detail with what our business has in-store, through documents that include marketing and technical plans, handbooks, etc. to satisfy your curiosity.</p>

        </div>
      </div>

      <div class="container">
        <div class="row">

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-block">

              <img src="assets/img/svg/bullhorn.png" alt="img">
              <h4>Marketing Plan</h4>
              <p>Find out who our target demographic is and how we wish to sell our product and services</p>
              <a href="assets/pdf/marketing-plan.pdf">read more</a>

            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="feature-block">

              <img src="assets/img/svg/wrench.png" alt="img">
              <h4>Technical Plan</h4>
              <p>Be enlightened of how we determine the efficacy of our business, including the materials, labor, logistics, technology, etc.</p>
              <a href="assets/pdf/technical-plan.pdf">read more</a>

            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-block">

              <img src="assets/img/svg/employee-month.png" alt="img">
              <h4>Employee Handbook</h4>
              <p>Explore how we keep our employees satisfied through our labor policies and overall organizational structure</p>
              <a href="assets/pdf/employee-handbook.pdf">read more</a>

            </div>
          </div>

        </div>
      </div>

    </section><!-- End Get Started Section -->

    <!-- ======= About Us Section ======= -->
    <!-- <section id="about-us" class="about-us padd-section">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">

          <div class="col-md-5 col-lg-3">
            <img src="assets/img/about-img.png" alt="About" data-aos="zoom-in" data-aos-delay="100">
          </div>

          <div class="col-md-7 col-lg-5">
            <div class="about-content" data-aos="fade-left" data-aos-delay="100">

              <h2><span>eStartup</span>UI Design Mobile </h2>
              <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
              </p>

              <ul class="list-unstyled">
                <li><i class="vi bi-chevron-right"></i>Creative Design</li>
                <li><i class="vi bi-chevron-right"></i>Retina Ready</li>
                <li><i class="vi bi-chevron-right"></i>Easy to Use</li>
                <li><i class="vi bi-chevron-right"></i>Unlimited Features</li>
                <li><i class="vi bi-chevron-right"></i>Unlimited Features</li>
              </ul>

            </div>
          </div>

        </div>
      </div>
    </section> -->
    <!-- End About Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="services" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Services</h2>
          <p class="separator">Only the best features and services for the best customers.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-md-6 col-lg-3">
            <div class="service-block">
              <img src="assets/img/svg/printer-2.png" alt="img">
              <h4>paper printing</h4>
              <p>Print A0 to A8, Photo Papers, etc.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="service-block">
              <img src="assets/img/svg/t-shirt.png" alt="img">
              <h4>shirt printing</h4>
              <p>Layout & printing for shirts of different sizes</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="service-block">
              <img src="assets/img/svg/yard.png" alt="img">
              <h4>tarpaulin & commercial signs</h4>
              <p>Tarpaulins of different sizes with framing included in commercial signs</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="service-block">
              <img src="assets/img/svg/delivery-courier.png" alt="img">
              <h4>courier delivery</h4>
              <p>Have your printed documents hand delivered door-to-door</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="service-block">
              <img src="assets/img/svg/cashless-payment.png" alt="img">
              <h4>online payments</h4>
              <p>Pay everything cashless and online through multiple payment methods</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="service-block">
              <img src="assets/img/svg/booking.png" alt="img">
              <h4>mobile compatibility</h4>
              <p>Access our website and have your documents printed wherever you go</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="service-block">
              <img src="assets/img/svg/cloud-service.png" alt="img">
              <h4>document storage support</h4>
              <p>Explore previously uploaded documents, as every printed file is stored</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="service-block">
              <img src="assets/img/svg/shield.png" alt="img">
              <h4>data security & privacy</h4>
              <p>Documents are protected 24/7 by well-established cloud service providers</p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="padd-section text-cente">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>Pricing</h2>
          <p class="separator">Explore our different packages and choose based on your preference and needs.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="pricing-table">
                <h4>Savers</h4>
                <h2>₱100</h2>
                <ul class="list-unstyled">
                  <li><b>100</b> A4 Size Prints</li>
                  <li><b>Monochrome only</b></li>
                  <li><b>In-store</b> pick up</li>
                </ul>
                <div class="table_btn">
                  <a href="progress_page.php" class="btn"><i class="bi bi-cart"></i> Buy Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="pricing-table">
                <h4>basic</h4>
                <h2>₱250</h2>
                <ul class="list-unstyled">
                  <li><b>200</b> A4 Size Prints</li>
                  <li><b>Monochrome</b> or <b>Colored</b></li>
                  <li><b>Free delivery</b> within the city</li>
                  <li>Includes free stickers prints</li>
                  <li><b>5% off</b> on next subscription</li>
                </ul>
                <div class="table_btn">
                  <a href="progress_page.php" class="btn"><i class="bi bi-cart"></i> Buy Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="pricing-table">
                <h4>premium</h4>
                <h2>₱500</h2>
                <ul class="list-unstyled">
                  <li><b>400</b> A4 Size Prints</li>
                  <li><b>Monochrome</b> or <b>Colored</b></li>
                  <li><b>Free delivery</b> within the city</li>
                  <li>Includes free sticker prints</li>
                  <li><b>10% off</b> on next subscription</li>
                </ul>
                <div class="table_btn">
                  <a href="progress_page.php" class="btn"><i class="bi bi-cart"></i> Buy Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="pricing-table">
                <h4>professional</h4>
                <h2>₱750</h2>
                <ul class="list-unstyled">
                  <li><b>500</b> A4 Size Prints</li>
                  <li><b>Monochrome</b> or <b>Colored</b></li>
                  <li><b>Free document scans</b></li>
                  <li><b>Free delivery</b> within the city</li>
                  <li><b>20% off</b> on business cards</li>
                  <li><b>10% off</b> on next subscription</li>
                </ul>
                <div class="table_btn">
                  <a href="progress_page.php" class="btn"><i class="bi bi-cart"></i> Buy Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container" data-aos="fade-up">
        <!-- <div class="section-title text-center">
          <h2>App Gallery</h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>
        </div> -->
        <section id="screenshots" class="padd-section text-center">
          <div class="screens-slider swiper">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="assets/img/screen/paper-1.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/screen/paper-2.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/screen/paper-3.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/screen/paper=4.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/screen/cards-1.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/screen/tarpaulin-1.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/screen/shirt-1.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/screen/8.jpg" class="img-fluid" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
            </div>
          </div>
        </section>
    </section>
    <!-- End Pricing Section -->

    <!-- ======= Screenshots Section ======= -->
    <!-- <section id="screenshots" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>App Gallery</h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>
        </div>

        <div class="screens-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/screen/1.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/screen/2.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/screen/3.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/screen/4.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/screen/5.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/screen/6.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/screen/7.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/screen/8.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section> -->
    <!-- End Screenshots Section -->

    <!-- ======= Video Section ======= -->
    <!-- <section id="video" class="text-center">
      <div class="overlay">
        <div class="container-fluid container-full" data-aos="zoom-in">

          <div class="row">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q&feature=emb_title" class="glightbox play-btn"></a>
          </div>

        </div>
      </div>
    </section> -->
    <!-- End Video Section -->

    <!-- ======= Team Section ======= -->
    <section id="franchise" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>Franchise</h2>
          <p class="separator">Be apart of our team! With over 150 live franchisees all over the Philippine islands.</p>
        </div>

        <div class="row">

          <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="franchise-block bottom">
              <img src="assets/img/franchise/office-3.jpg" class="img-responsive" alt="img">
              <!-- <div class="team-content">
                <ul class="list-unstyled">
                  <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                  <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                </ul>
                <span>manager</span>
                <h4>Kimberly Tran</h4>
              </div> -->
            </div>
          </div>

          <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="franchise-block bottom">
              <img src="assets/img/franchise/office-4.jpg" class="img-responsive" alt="img">
            </div>
          </div>

          <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
            <div class="franchise-block bottom">
              <img src="assets/img/franchise/franchisee.jpg" class="img-responsive" alt="img">
            </div>
          </div>

          <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
            <div class="franchise-block bottom">
              <img src="assets/img/franchise/unity.jpg" class="img-responsive" alt="img">
            </div>
          </div>

        </div>
        <!-- <div class="row">

          <h2>Franchise</h2>
          <p class="separator">Be apart of our team! With over 150 live franchisees all over the Philippine islands.</p>
        </div> -->
        <div class="hero-container-introduction padd-section text-center">
        <div class="container" data-aos="fade-up">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="hero-introduction-content">
                  <div class="top-top">
                    <!-- <h2>Our Users Speack volumes us</h2> -->
                    <p>Franchising helps everyone at BetterPrints develop and grow faster. The more sites we have nationwide, the wider the range of coverage. Making it easier and faster to provide and supply our customers needs. </br></br>
                    Learn more about our franchising program by contacting us at the bottom of the website. </br></br>
                    Download the franchise application form below and submit it to our email at the contact section.</p>
                    <!-- <h4>Kimberly Tran<span>manager</span></h4> -->
                  </div>
                </div>
                <!-- <a href="progress_page.php" class="btn-get-started scrollto">Get Started</a> -->
            </div>
          </div>
          <a href="assets/pdf/application-form.pdf" class="btn-get-started scrollto">Download Application Form</a>
        </div>
      </div>
    </section>
    <!-- End Team Section -->



    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="padd-section text-center">
      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>About Us</h2>
          <p class="separator">See through the lense of our business, what drives BetterPrints and what direction it aims to take</p>
        </div>
        <div class="row justify-content-center">

          <div class="col-md-8">

            <div class="about-us-content">
              <div id="carousel-example-generic" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner" role="listbox">

                  <div class="carousel-item  active">
                    <div class="top-top">

                      <h2>Vision</h2>
                      <p>BetterPrints aims to turn every independent printing business to an interconnected network of entities providing low cost, secure and efficient printing services.</p>

                    </div>
                  </div>

                  <div class="carousel-item ">
                    <div class="top-top">

                      <h2>Mission</h2>
                      <p>To ensure the highest level of convenience and pleasant experience for students and the working class, cutting the time and cost it takes for our product to get to the customer's hands.</p>

                    </div>
                  </div>

                  <div class="carousel-item ">
                    <div class="top-top">

                      <h2>Goals</h2>
                      <p>Encourage and partner with local businesses, assisting in the establishment of a well-built printing business through the integration of the company’s technology.</p>

                    </div>
                  </div>

                </div>

                <div class="btm-btm">

                  <ul class="list-unstyled carousel-indicators">
                    <li data-bs-target="#carousel-example-generic" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carousel-example-generic" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel-example-generic" data-bs-slide-to="2"></li>
                  </ul>

                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Testimonials Section -->

    

    <!-- ======= Blog Section ======= -->
    <!-- <section id="blog" class="padd-sectio">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>Latest posts</h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-md-6 col-lg-4">
            <div class="block-blog text-left">
              <a href="#"><img src="assets/img/blog/blog-image-1.jpg" alt="img"></a>
              <div class="content-blog">
                <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                <span>05, juin 2017</span>
                <a class="float-end readmore" href="#">read more</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="block-blog text-left">
              <a href="#"><img src="assets/img/blog/blog-image-2.jpg" class="img-responsive" alt="img"></a>
              <div class="content-blog">
                <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                <span>05, juin 2017</span>
                <a class="float-end readmore" href="#">read more</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="block-blog text-left">
              <a href="#"><img src="assets/img/blog/blog-image-3.jpg" class="img-responsive" alt="img"></a>
              <div class="content-blog">
                <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                <span>05, juin 2017</span>
                <a class="float-end readmore" href="#">read more</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> -->
    <!-- End Blog Section -->


    <section id="newsletter" class="newsletter text-center">
      <div class="overlay padd-section">
        <div class="container" data-aos="zoom-in">

        </div>
      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="padd-section">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Contact Us</h2>
          <p class="separator">Let's keep in touch! Information below are the easiest ways for you to reach us.</p>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>1178 Asuncion Street <br>Tondo, Metro Manila 1012</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <p>chrissamuel231@gmail.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+639089232658</p>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">BetterPrints</a>
            <p>BetterPrints is a tech company that provides licensing under a cloud-based printing service platform to SMEs.</p>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>BetterPrints</br>Values</h4>

            <ul class="list-unstyled">
              <li><a href="progress_page.php">Ingenuity</a></li>
              <li><a href="progress_page.php">Assurance</a></li>
              <li><a href="progress_page.php">Partnership</a></li>
              <!-- <li><a href="progress_page.php">Privacy Policy</a></li> -->
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Store</h4>

            <ul class="list-unstyled">
              <li><a href="progress_page.php">Financing</a></li>
              <li><a href="progress_page.php">Order Status</a></li>
              <li><a href="progress_page.php">Sales & Refunds</a></li>
              <li><a href="progress_page.php">Shopping Help</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Support</h4>

            <ul class="list-unstyled">
              <li><a href="progress_page.php">Job Opportunities</a></li>
              <li><a href="progress_page.php">Crowdfunding</a></li>
              <li><a href="progress_page.php">Retailers</a></li>
              <li><a href="progress_page.php">Suppliers</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>About BetterPrints</h4>

            <ul class="list-unstyled">
              <li><a href="progress_page.php">Frequently Asked Questions</a></li>
              <li><a href="progress_page.php">Terms of Use</a></li>
              <li><a href="progress_page.php">Ethics & Compliance</a></li>
              <li><a href="progress_page.php">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>This website is for educational purposes only and is not intended for commercial use or any economic activity resulting in profit</p>
      </div>
    </div>

  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/index.js"></script>

</body>

</html>