<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'Dewi by Massar')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="{{asset('assets/img/robot (2).png')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">Massar</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}#hero" class="active">Home</a></li>
                <li><a href="{{ url('/') }}#about">About</a></li>
                <li><a href="{{ url('/') }}#services">Services</a></li>
                <li><a href="{{ url('/') }}#team">Team</a></li>
                <li><a href="{{ url('/') }}#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="auth-buttons ms-lg-3">
            <a class="cta-btn" href="{{ route('login') }}">Login</a>
            <a class="cta-btn" href="{{ route('register') }}" style="margin-left: 10px;">Register</a>
        </div>

    </div>
</header>

   
    <section id="hero" class="hero section dark-background">
      <img src="{{ asset('assets/img/bg(1).jpg') }}" alt="" data-aos="fade-in">
      <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">every Line a Step Toward The Future.</h2>
        <p data-aos="fade-up" data-aos-delay="200">Paving the Future, One Line at a Time</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#about" class="btn-get-started">Get Started</a>
          <a href="" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>
    </section> 

    <!-- About Section -->
<section id="about" class="about section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3>Autonomous Precision for Modern Infrastructure</h3>
        <img src="{{ asset('assets/img/robot-sketch1.jpg') }}" class="img-fluid rounded-4 mb-4" alt="Massar Robotics">
        <p>Massar is a Jordan-based robotics company specializing in autonomous road-painting technology.</p>
        <p>Our self-driving robot operates at night to avoid traffic, using GPS, cameras, and gyroscopes to deliver highly accurate lane markings. It works from a designated charging station, covering specific areas efficiently. Citizens receive mobile alerts during operation, and a live dashboard provides real-time updates on paint levels, battery status, work progress, and estimated completion time. Massar brings intelligent automation to road infrastructure—enhancing precision, efficiency, and transparency.</p>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
        <div class="content ps-0 ps-lg-5">
          <p class="fst-italic">
            We are revolutionizing road maintenance by deploying intelligent robotics to create safer, more efficient, and data-driven public infrastructure for cities of the future.
          </p>
          <ul>
            <li><i class="bi bi-check-circle-fill"></i> <span><strong>Enhanced Worker Safety:</strong> By automating operations during off-peak night hours, we remove human workers from dangerous live-traffic environments.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span><strong>Unmatched Precision:</strong> Our blend of high-accuracy GPS and sensor fusion ensures flawless, consistent lane markings that meet the highest regulatory standards.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span><strong>Real-Time Transparency:</strong> The live dashboard provides city officials and stakeholders with unprecedented insight into operational progress and resource management.</span></li>
          </ul>
          <p>
            With Massar, road maintenance is no longer a disruptive, labor-intensive process. We deliver a forward-thinking solution that minimizes public inconvenience while maximizing quality and accountability, setting a new standard for smart city infrastructure.
          </p>
          <div class="position-relative mt-4">
            <img src="{{ asset('assets/img/robot-sketch3.jpg') }}" class="img-fluid rounded-4" alt="Street Lining Robot in Action">
            <a href="https://youtu.be/AGjUv1U9COM?si=EQvyGrWykhf-o67w" class="glightbox pulsating-play-btn"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /About Section -->

    <!-- Stats Section -->
     <section id="stats" class="stats section light-background">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6"><div class="stats-item d-flex align-items-center w-100 h-100"><i class="bi bi-geo-alt-fill color-blue flex-shrink-0"></i><div><span data-purecounter-start="0" data-purecounter-end="99" data-purecounter-duration="1">99.8%</span><p>GPS Accuracy</p></div></div></div>
          <div class="col-lg-3 col-md-6"><div class="stats-item d-flex align-items-center w-100 h-100"><i class="bi bi-shield-check color-orange flex-shrink-0"></i><div><span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1">100%</span><p>Reduction in Worker Roadside Exposure</p></div></div></div>
          <div class="col-lg-3 col-md-6"><div class="stats-item d-flex align-items-center w-100 h-100"><i class="bi bi-clock-history color-green flex-shrink-0"></i><div><span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1">24/7</span><p>Autonomous Operation</p></div></div></div>
          <div class="col-lg-3 col-md-6"><div class="stats-item d-flex align-items-center w-100 h-100"><i class="bi bi-paint-bucket color-pink flex-shrink-0"></i><div><span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1">30%</span><p>Increase in Efficiency</p></div></div></div>
        </div>
      </div>
    </section><!-- /Stats Section -->

    <!-- Services Section -->
   <section id="services" class="services section">
      <div class="container section-title" data-aos="fade-up"><h2>Our Solution</h2><p>Core Features & Services</p></div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"><div class="service-item"><div class="img"><img src="{{ asset('assets/img/robot-sketch1.jpg') }}" class="img-fluid" alt=""></div><div class="details position-relative"><div class="icon"><i class="bi bi-rulers"></i></div><a href="#" class="stretched-link"><h3>High-Precision Line Marking</h3></a><p>Utilizing RTK-GPS and sensor fusion, our robot achieves sub-centimeter accuracy for perfectly straight and curved lines, compliant with all traffic regulations.</p></div></div></div>
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300"><div class="service-item"><div class="img"><img src="{{ asset('assets/img/robot-sketch2.jpg') }}" class="img-fluid" alt=""></div><div class="details position-relative"><div class="icon"><i class="bi bi-bar-chart-line"></i></div><a href="#" class="stretched-link"><h3>Live Monitoring Dashboard</h3></a><p>Gain real-time access to operational data, including paint levels, battery status, work progress, and projected completion times for full transparency.</p></div></div></div>
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400"><div class="service-item"><div class="img"><img src="{{ asset('assets/img/robot-sketch3.jpg') }}" class="img-fluid" alt=""></div><div class="details position-relative"><div class="icon"><i class="bi bi-moon-stars"></i></div><a href="#" class="stretched-link"><h3>Safe Night-Time Operation</h3></a><p>Our autonomous system works during off-peak hours, eliminating risks to human workers and minimizing traffic disruption for citizens.</p></div></div></div>
        </div>
      </div>
    </section><!--/ Services Section -->

    <section id="technology" class="features section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Technology</h2>
            <p>The Brains Behind the Operation</p>
        </div>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-item d-flex">
                        <i class="bi bi-broadcast-pin color-blue flex-shrink-0"></i>
                        <div>
                            <h4>High-Accuracy GPS</h4>
                            <p>Real-Time Kinematic (RTK) positioning provides pinpoint location data for flawless execution of digital road plans.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-item d-flex">
                        <i class="bi bi-camera-video color-orange flex-shrink-0"></i>
                        <div>
                            <h4>Computer Vision</h4>
                            <p>Onboard cameras detect existing lines, obstacles, and road conditions, ensuring safe and adaptive operation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-item d-flex">
                        <i class="bi bi-robot color-green flex-shrink-0"></i>
                        <div>
                            <h4>Sensor Fusion</h4>
                            <p>Data from gyroscopes, and wheel encoders are combined to maintain perfect orientation and speed control.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
<!-- Team Section -->
<section id="team" class="team section light-background">

  <div class="container section-title" data-aos="fade-up">
    <h2>Team</h2>
    <p>CHECK OUR TEAM</p>
  </div>

  <div class="container">
    <div class="row gy-5">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <div class="pic"><img src="" class="img-fluid" alt=""></div>
          <div class="member-info"><h4>Raneem Asad</h4><span>Massar Team</span><div class="social"><a href=""><i class="bi bi-twitter-x"></i></a><a href=""><i class="bi bi-facebook"></i></a><a href=""><i class="bi bi-instagram"></i></a><a href=""><i class="bi bi-linkedin"></i></a></div></div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <div class="pic"><img src="" class="img-fluid" alt=""></div>
          <div class="member-info"><h4>Sara</h4><span>Massar Team</span><div class="social"><a href=""><i class="bi bi-twitter-x"></i></a><a href=""><i class="bi bi-facebook"></i></a><a href=""><i class="bi bi-instagram"></i></a><a href=""><i class="bi bi-linkedin"></i></a></div></div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <div class="pic"><img src="" class="img-fluid" alt=""></div>
          <div class="member-info"><h4>Jamal Attari</h4><span>Massar Team</span><div class="social"><a href=""><i class="bi bi-twitter-x"></i></a><a href=""><i class="bi bi-facebook"></i></a><a href=""><i class="bi bi-instagram"></i></a><a href=""><i class="bi bi-linkedin"></i></a></div></div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="member">
          <div class="pic"><img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt=""></div>
          <div class="member-info"><h4>Jbara Sasa</h4><span>Massar Team</span><div class="social"><a href=""><i class="bi bi-twitter-x"></i></a><a href=""><i class="bi bi-facebook"></i></a><a href=""><i class="bi bi-instagram"></i></a><a href=""><i class="bi bi-linkedin"></i></a></div></div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="member">
          <div class="pic"><img src="{{ asset('assets/img/team/team-5.jpg') }}" class="img-fluid" alt=""></div>
          <div class="member-info"><h4>Bara</h4><span>Massar Team</span><div class="social"><a href=""><i class="bi bi-twitter-x"></i></a><a href=""><i class="bi bi-facebook"></i></a><a href=""><i class="bi bi-instagram"></i></a><a href=""><i class="bi bi-linkedin"></i></a></div></div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="member">
          <div class="pic"><img src="{{ asset('assets/img/team/team-6.jpg') }}" class="img-fluid" alt=""></div>
          <div class="member-info"><h4>Ahmad Smadi</h4><span>Massar Team</span><div class="social"><a href=""><i class="bi bi-twitter-x"></i></a><a href=""><i class="bi bi-facebook"></i></a><a href=""><i class="bi bi-instagram"></i></a><a href=""><i class="bi bi-linkedin"></i></a></div></div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
        <div class="member">
          <div class="pic"><img src="{{ asset('assets/img/team/team-7.jpg') }}" class="img-fluid" alt=""></div>
          <div class="member-info"><h4>Fares Diab</h4><span>Massar Team</span><div class="social"><a href=""><i class="bi bi-twitter-x"></i></a><a href=""><i class="bi bi-facebook"></i></a><a href=""><i class="bi bi-instagram"></i></a><a href=""><i class="bi bi-linkedin"></i></a></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

    <section id="contact" class="contact section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Get In Touch</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-lg-12"><div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200"><i class="bi bi-geo-alt"></i><h3>Address</h3><p>A108 Adam Street, New York, NY 535022</p></div></div>
              <div class="col-md-6"><div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300"><i class="bi bi-telephone"></i><h3>Call Us</h3><p>+1 5589 55488 55</p></div></div>
              <div class="col-md-6"><div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400"><i class="bi bi-envelope"></i><h3>Email Us</h3><p>info@example.com</p></div></div>
            </div>
          </div>

          <div class="col-lg-6">
          
            <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              @csrf 
              <div class="row gy-4">
                <div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="Your Name" required=""></div>
                <div class="col-md-6 "><input type="email" class="form-control" name="email" placeholder="Your Email" required=""></div>
                <div class="col-md-12"><input type="text" class="form-control" name="subject" placeholder="Subject" required=""></div>
                <div class="col-md-12"><textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea></div>
                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  <button type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


<footer id="footer" class="footer" style="background-color:#181b1e; color: white;">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <span class="sitename">Massar</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/#about') }}">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/#services') }}">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>


        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="" method="post" class="php-email-form">
            @csrf
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Massar</strong> <span>All Rights Reserved</span></p>
      
    </div>
  </footer>
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>


  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
