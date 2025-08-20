@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

   
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
          <div class="col-lg-3 col-md-6"><div class="stats-item d-flex align-items-center w-100 h-100"><i class="bi bi-emoji-smile color-blue flex-shrink-0"></i><div><span > Not Countable </span><p>Happy Clients</p></div></div></div>
          <div class="col-lg-3 col-md-6"><div class="stats-item d-flex align-items-center w-100 h-100"><i class="bi bi-journal-richtext color-orange flex-shrink-0"></i><div><span> 1 </span><p>Projects</p></div></div></div>
          <div class="col-lg-3 col-md-6"><div class="stats-item d-flex align-items-center w-100 h-100"><i class="bi bi-headset color-green flex-shrink-0"></i><div><span> Alot </span><p>Hours Of Support</p></div></div></div>
          <div class="col-lg-3 col-md-6"><div class="stats-item d-flex align-items-center w-100 h-100"><i class="bi bi-people color-pink flex-shrink-0"></i><div><span> 7 </span><p>Hard Workers</p></div></div></div>
        </div>
      </div>
    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
      <div class="container section-title" data-aos="fade-up"><h2>Services</h2><p>Featured Services<br></p></div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"><div class="service-item"><div class="img"><img src="{{ asset('assets/img/robot-sketch1.jpg') }}" class="img-fluid" alt=""></div><div class="details position-relative"><div class="icon"><i class="bi bi-activity"></i></div><a href="service-details.html" class="stretched-link"><h3>Nesciunt Mete</h3></a><p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis.</p></div></div></div>
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300"><div class="service-item"><div class="img"><img src="{{ asset('assets/img/robot-sketch2.jpg') }}" class="img-fluid" alt=""></div><div class="details position-relative"><div class="icon"><i class="bi bi-broadcast"></i></div><a href="service-details.html" class="stretched-link"><h3>Eosle Commodi</h3></a><p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p></div></div></div>
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400"><div class="service-item"><div class="img"><img src="{{ asset('assets/img/robot-sketch3.jpg') }}" class="img-fluid" alt=""></div><div class="details position-relative"><div class="icon"><i class="bi bi-easel"></i></div><a href="service-details.html" class="stretched-link"><h3>Ledo Markt</h3></a><p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p></div></div></div>
        </div>
      </div>
    </section><!--/ Services Section -->

    <!--
    |==========================================================================
    | THE FINAL SECTIONS (TEAM & CONTACT) HAVE BEEN ADDED BELOW
    |==========================================================================
    -->

<!-- Team Section -->
<section id="team" class="team section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Team</h2>
    <p>CHECK OUR TEAM</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-5">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <div class="pic"><img src="" class="img-fluid" alt=""></div>
          <div class="member-info"><h4>Walter White</h4><span>Chief Executive Officer</span><div class="social"><a href=""><i class="bi bi-twitter-x"></i></a><a href=""><i class="bi bi-facebook"></i></a><a href=""><i class="bi bi-instagram"></i></a><a href=""><i class="bi bi-linkedin"></i></a></div></div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <div class="pic"><img src="" class="img-fluid" alt=""></div>
          <div class="member-info"><h4>Sarah Jhonson</h4><span>Product Manager</span><div class="social"><a href=""><i class="bi bi-twitter-x"></i></a><a href=""><i class="bi bi-facebook"></i></a><a href=""><i class="bi bi-instagram"></i></a><a href=""><i class="bi bi-linkedin"></i></a></div></div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <div class="pic"><img src="" class="img-fluid" alt=""></div>
          <div class="member-info"><h4>William Anderson</h4><span>Chief Technology Officer</span><div class="social"><a href=""><i class="bi bi-twitter-x"></i></a><a href=""><i class="bi bi-facebook"></i></a><a href=""><i class="bi bi-instagram"></i></a><a href=""><i class="bi bi-linkedin"></i></a></div></div>
        </div>
      </div><!-- End Team Member -->

      {{-- START: Added Team Members --}}
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="member">
          <div class="pic"><img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt=""></div>
          <div class="member-info"><h4>Amanda Chen</h4><span>Lead Robotics Engineer</span><div class="social"><a href=""><i class="bi bi-twitter-x"></i></a><a href=""><i class="bi bi-facebook"></i></a><a href=""><i class="bi bi-instagram"></i></a><a href=""><i class="bi bi-linkedin"></i></a></div></div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="member">
          <div class="pic"><img src="{{ asset('assets/img/team/team-5.jpg') }}" class="img-fluid" alt=""></div>
          <div class="member-info"><h4>Michael Rodriguez</h4><span>AI / Machine Learning Specialist</span><div class="social"><a href=""><i class="bi bi-twitter-x"></i></a><a href=""><i class="bi bi-facebook"></i></a><a href=""><i class="bi bi-instagram"></i></a><a href=""><i class="bi bi-linkedin"></i></a></div></div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="member">
          <div class="pic"><img src="{{ asset('assets/img/team/team-6.jpg') }}" class="img-fluid" alt=""></div>
          <div class="member-info"><h4>Jessica Taylor</h4><span>Business Development</span><div class="social"><a href=""><i class="bi bi-twitter-x"></i></a><a href=""><i class="bi bi-facebook"></i></a><a href=""><i class="bi bi-instagram"></i></a><a href=""><i class="bi bi-linkedin"></i></a></div></div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
        <div class="member">
          <div class="pic"><img src="{{ asset('assets/img/team/team-7.jpg') }}" class="img-fluid" alt=""></div>
          <div class="member-info"><h4>David Lee</h4><span>Operations Manager</span><div class="social"><a href=""><i class="bi bi-twitter-x"></i></a><a href=""><i class="bi bi-facebook"></i></a><a href=""><i class="bi bi-instagram"></i></a><a href=""><i class="bi bi-linkedin"></i></a></div></div>
        </div>
      </div><!-- End Team Member -->
      {{-- END: Added Team Members --}}

    </div>
  </div>
</section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Get In Touch</p>
      </div><!-- End Section Title -->

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
            {{--
              IMPORTANT: The form action has been updated for Laravel.
              The old action="forms/contact.php" will NOT work.
              We will create a route named 'contact.submit' to handle this.
            --}}
            <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              @csrf {{-- This is required for security in all Laravel forms --}}
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
          </div><!-- End Contact Form -->
        </div>
      </div>
    </section><!-- /Contact Section -->

@endsection
