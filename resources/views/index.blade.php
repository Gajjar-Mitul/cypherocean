@extends('layout.header')
@section('title','Create Appointment')
@section('content')

  <!-- ======= Header ======= -->
  <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 col-lg-2">
          <h1 class="mb-0 site-logo"><a href="index.html" class="mb-0">Cypehr-Ocean</a></h1>
        </div>

        <div class="col-12 col-md-10 d-none d-lg-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="index.html" class="nav-link">Home</a></li>
              <li><a href="features.html" class="nav-link">About Us</a></li>
              <li><a href="pricing.html" class="nav-link">Portfolio</a></li>

              <li class="has-children">
                <a href="blog.html" class="nav-link">Services</a>
                <ul class="dropdown">
                  <li><a href="blog.html" class="nav-link">Web Developling</a></li>
                  <li><a href="blog-single.html" class="nav-link">Web Designing</a></li>
                  <li><a href="blog-single.html" class="nav-link">Application</a></li>
                  <li><a href="blog-single.html" class="nav-link">Branding</a></li>
                </ul>
              </li>
              <li><a href="contact.html" class="nav-link">Contact</a></li>
            </ul>
          </nav>
        </div>

        <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

          <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>

      </div>
    </div>

  </header>

  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-7 text-center text-lg-left">
              <h1 data-aos="fade-right">Promote Your App with SoftLand</h1>
              <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit.</p>
              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="#" class="btn btn-outline-white">Get started</a></p>
            </div>
            <div class="col-lg-5 iphone-wrap">
              <img src="assets/img/phone_1.png" alt="Image" class="phone-1" data-aos="fade-right">
              <img src="assets/img/phone_2.png" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Home Section ======= -->
    <section class="section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">Save your time to using Cypherocean</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <span class="icon la la-users"></span>
              </div>
              <h3 class="mb-3">Explore Your Team</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <span class="icon la la-toggle-off"></span>
              </div>
              <h3 class="mb-3">Digital Whiteboard</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <span class="icon la la-umbrella"></span>
              </div>
              <h3 class="mb-3">Design To Development</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="section">

      <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade">
          <div class="col-md-6 mb-5">
            <img src="assets/img/undraw_svg_1.svg" alt="Image" class="img-fluid">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="step">
              <span class="number">01</span>
              <h3>Sign Up</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">02</span>
              <h3>Create Profile</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">03</span>
              <h3>Enjoy the app</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 mr-auto">
            <h2 class="mb-4">Seamlessly Communicate</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio,
              laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt
              dolore mollitia esse natus beatae.</p>
            <p><a href="#" class="btn btn-primary">Download Now</a></p>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <img src="assets/img/undraw_svg_2.svg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 ml-auto order-2">
            <h2 class="mb-4">Gather Feedback</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio,
              laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt
              dolore mollitia esse natus beatae.</p>
            <p><a href="#" class="btn btn-primary">Download Now</a></p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="assets/img/undraw_svg_3.svg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <section class="section border-top border-bottom">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-4">
            <h2 class="section-heading">Review From Our Users</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <div class="owl-carousel testimonial-carousel">
              <div class="review text-center">
                <p class="stars">
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star muted"></span>
                </p>
                <h3>Excellent App!</h3>
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                    aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                    provident voluptates consectetur maiores quos.</p>
                </blockquote>

                <p class="review-user">
                  <img src="assets/img/person_1.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                  <span class="d-block">
                    <span class="text-black">Jean Doe</span>, &mdash; App User
                  </span>
                </p>

              </div>

              <div class="review text-center">
                <p class="stars">
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star muted"></span>
                </p>
                <h3>This App is easy to use!</h3>
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                    aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                    provident voluptates consectetur maiores quos.</p>
                </blockquote>

                <p class="review-user">
                  <img src="assets/img/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                  <span class="d-block">
                    <span class="text-black">Johan Smith</span>, &mdash; App User
                  </span>
                </p>

              </div>

              <div class="review text-center">
                <p class="stars">
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star muted"></span>
                </p>
                <h3>Awesome functionality!</h3>
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                    aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                    provident voluptates consectetur maiores quos.</p>
                </blockquote>

                <p class="review-user">
                  <img src="assets/img/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                  <span class="d-block">
                    <span class="text-black">Jean Thunberg</span>, &mdash; App User
                  </span>
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
            <h2>Starts Publishing Your Apps</h2>
          </div>
          <div class="col-md-5 text-center text-md-right">
            <p><a href="#" class="btn"><span class="icofont-brand-apple mr-3"></span>App store</a> <a href="#" class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h3>About SoftLand</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam
            dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi.</p>
          <p class="social">
            <a href="#"><span class="icofont-twitter"></span></a>
            <a href="#"><span class="icofont-facebook"></span></a>
            <a href="#"><span class="icofont-dribbble"></span></a>
            <a href="#"><span class="icofont-behance"></span></a>
          </p>
        </div>
        <div class="col-md-7 ml-auto">
          <div class="row site-section pt-0">
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Navigation</h3>
              <ul class="list-unstyled">
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Services</h3>
              <ul class="list-unstyled">
                <li><a href="#">Team</a></li>
                <li><a href="#">Collaboration</a></li>
                <li><a href="#">Todos</a></li>
                <li><a href="#">Events</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Downloads</h3>
              <ul class="list-unstyled">
                <li><a href="#">Get from the App Store</a></li>
                <li><a href="#">Get from the Play Store</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright SoftLand. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>