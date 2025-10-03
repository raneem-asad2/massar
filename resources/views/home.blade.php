@extends('layouts.app')

@section('title', 'Massar') {{-- Optional: Set a specific title for this page --}}

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
              <div class="col-lg-12"><div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200"><i class="bi bi-geo-alt"></i><h3>Address</h3><p>Amman Jordan</p></div></div>
              <div class="col-md-6"><div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300"><i class="bi bi-telephone"></i><h3>Call Us</h3><p>+962 795190420</p></div></div>
              <div class="col-md-6"><div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400"><i class="bi bi-envelope"></i><h3>Email Us</h3><p>Massar.line.proj@gmail.com</p></div></div>
            </div>
          </div>

<div class="col-lg-6">
    <form action="{{ route('contact-messages.store') }}" method="POST" data-aos="fade-up" data-aos-delay="500">
    @csrf
    <div class="row gy-4">
        <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Name"  required>
        </div>

        <div class="col-md-6">
            <input type="email" name="email" class="form-control" placeholder="Your Email"  required>
        </div>

        <div class="col-md-12">
            <textarea name="message" class="form-control" rows="4" placeholder="Message" required>{{ old('message') }}</textarea>
        </div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-outline-warning">Send Message</button>
        </div>
    </div>
</form>
</div>
        </div>
      </div>
    </section>
@endsection