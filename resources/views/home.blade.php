@extends('layouts.app')

@section('title', 'Massar') {{-- Optional: Set a specific title for this page --}}

@section('content')
    <section id="hero" class="hero section dark-background">
      <img src="{{ asset('assets/img/bg(1).jpg') }}" alt="" data-aos="fade-in">
      <div class="container d-flex flex-column align-items-center text-center"> {{-- Added text-center here --}}
        <h2 data-aos="fade-up" data-aos-delay="100">Every Line a Step Toward The Future.</h2>
        <p data-aos="fade-up" data-aos-delay="200">Paving the Future, One Line at a Time</p>
        <div class="d-flex flex-column flex-sm-row justify-content-center mt-4" data-aos="fade-up" data-aos-delay="300"> {{-- Added flex-column, flex-sm-row, justify-content-center --}}
          <a href="#about" class="btn-get-started mb-3 mb-sm-0 me-sm-3">Get Started</a> {{-- Added spacing classes --}}
          <a href="" class="glightbox btn-watch-video d-flex align-items-center justify-content-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> {{-- Added justify-content-center --}}
        </div>
      </div>
    </section>

    <!-- About Section -->
<section id="about" class="about section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3>Autonomous Precision for Modern Infrastructure</h3>
        {{-- Image 1: Constrain to 75% of its parent width, center it --}}
        <div class="text-center mb-4">
          <img src="{{ asset('assets/img/robot-sketch1.jpg') }}" class="img-fluid rounded-4 w-75 mx-auto d-block" alt="Massar Robotics">
        </div>
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
          <div class="position-relative mt-4 text-center"> {{-- Added text-center here too --}}
            {{-- Image 2: Constrain to 75% of its parent width, center it --}}
            <img src="{{ asset('assets/img/robot-sketch3.jpg') }}" class="img-fluid rounded-4 w-75 mx-auto d-block" alt="Street Lining Robot in Action">
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
    <div class="container section-title" data-aos="fade-up">
        <h2>Our Solution</h2>
        <p>Core Features & Services</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-center"> {{-- Added justify-content-center here --}}

            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200"> {{-- Added d-flex --}}
                <div class="service-item w-100"> {{-- Added w-100 --}}
                    <div class="img text-center"> {{-- Added text-center --}}
                        <img src="{{ asset('assets/img/robot-sketch1.jpg') }}" class="img-fluid rounded-4 mb-3 w-75 mx-auto d-block" alt="High-Precision Line Marking"> {{-- Added mb-3, w-75, mx-auto, d-block --}}
                    </div>
                    <div class="details position-relative text-center"> {{-- Added text-center --}}
                        <div class="icon mx-auto"><i class="bi bi-rulers"></i></div> {{-- Added mx-auto --}}
                        <a href="#" class="stretched-link"><h3>High-Precision Line Marking</h3></a>
                        <p>Utilizing RTK-GPS and sensor fusion, our robot achieves sub-centimeter accuracy for perfectly straight and curved lines, compliant with all traffic regulations.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="300"> {{-- Added d-flex --}}
                <div class="service-item w-100"> {{-- Added w-100 --}}
                    <div class="img text-center"> {{-- Added text-center --}}
                        <img src="{{ asset('assets/img/robot-sketch2.jpg') }}" class="img-fluid rounded-4 mb-3 w-75 mx-auto d-block" alt="Live Monitoring Dashboard"> {{-- Added mb-3, w-75, mx-auto, d-block --}}
                    </div>
                    <div class="details position-relative text-center"> {{-- Added text-center --}}
                        <div class="icon mx-auto"><i class="bi bi-bar-chart-line"></i></div> {{-- Added mx-auto --}}
                        <a href="#" class="stretched-link"><h3>Live Monitoring Dashboard</h3></a>
                        <p>Gain real-time access to operational data, including paint levels, battery status, work progress, and projected completion times for full transparency.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400"> {{-- Added d-flex --}}
                <div class="service-item w-100"> {{-- Added w-100 --}}
                    <div class="img text-center"> {{-- Added text-center --}}
                        <img src="{{ asset('assets/img/robot-sketch3.jpg') }}" class="img-fluid rounded-4 mb-3 w-75 mx-auto d-block" alt="Safe Night-Time Operation"> {{-- Added mb-3, w-75, mx-auto, d-block --}}
                    </div>
                    <div class="details position-relative text-center"> {{-- Added text-center --}}
                        <div class="icon mx-auto"><i class="bi bi-moon-stars"></i></div> {{-- Added mx-auto --}}
                        <a href="#" class="stretched-link"><h3>Safe Night-Time Operation</h3></a>
                        <p>Our autonomous system works during off-peak hours, eliminating risks to human workers and minimizing traffic disruption for citizens.</p></div>
                </div>
            </div>

        </div>
    </div>
</section><!--/ Services Section -->

<section id="technology" class="features section light-background">
    <div class="container section-title" data-aos="fade-up">
        <h2>Our Core Technology</h2> {{-- More descriptive title --}}
        <p>The Brains Behind Massar's Autonomous Operations</p> {{-- More engaging tagline --}}
    </div>
    <div class="container">
        <div class="row gy-4 justify-content-center"> {{-- Added justify-content-center --}}

            <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100"> {{-- Added d-flex --}}
                <div class="feature-item w-100 p-4 rounded-3 shadow-sm d-flex flex-column align-items-center text-center"> {{-- Enhanced styling and centering --}}
                    <i class="bi bi-broadcast-pin color-blue fs-1 mb-3"></i> {{-- Larger icon, margin-bottom --}}
                    <div>
                        <h4 class="fw-bold">High-Accuracy GPS</h4> {{-- Bolder title --}}
                        <p class="text-muted">Real-Time Kinematic (RTK) positioning provides pinpoint location data for flawless execution of digital road plans.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200"> {{-- Added d-flex --}}
                <div class="feature-item w-100 p-4 rounded-3 shadow-sm d-flex flex-column align-items-center text-center"> {{-- Enhanced styling and centering --}}
                    <i class="bi bi-camera-video color-orange fs-1 mb-3"></i> {{-- Larger icon, margin-bottom --}}
                    <div>
                        <h4 class="fw-bold">Computer Vision</h4>
                        <p class="text-muted">Onboard cameras detect existing lines, obstacles, and road conditions, ensuring safe and adaptive operation.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300"> {{-- Added d-flex --}}
                <div class="feature-item w-100 p-4 rounded-3 shadow-sm d-flex flex-column align-items-center text-center"> {{-- Enhanced styling and centering --}}
                    <i class="bi bi-robot color-green fs-1 mb-3"></i> {{-- Larger icon, margin-bottom --}}
                    <div>
                        <h4 class="fw-bold">Sensor Fusion</h4>
                        <p class="text-muted">Data from gyroscopes, and wheel encoders are combined to maintain perfect orientation and speed control.</p>
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
        <h2>Contact Us</h2>
        <p>Get In Touch</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center">
            {{-- Contact Information Block --}}
            <div class="col-lg-6">
                <div class="row gy-4">
                    {{-- Location Item --}}
                    <div class="col-lg-12 mb-3"> {{-- Added mb-3 for spacing on small screens --}}
                        <div class="info-item d-flex flex-column justify-content-center align-items-center text-center p-3 shadow-sm rounded-3 h-100" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt display-6 text-primary mb-2"></i> {{-- Larger icon, primary color --}}
                            <h3 class="h5 fw-bold">Our Location</h3>
                            <p class="mb-0">Amman, Jordan</p>
                        </div>
                    </div>
                    {{-- Call Us Item --}}
                    <div class="col-md-6 mb-3"> {{-- Added mb-3 for spacing on small screens --}}
                        <div class="info-item d-flex flex-column justify-content-center align-items-center text-center p-3 shadow-sm rounded-3 h-100" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone display-6 text-success mb-2"></i> {{-- Larger icon, success color --}}
                            <h3 class="h5 fw-bold">Call Us</h3>
                            <p class="mb-0"><a href="tel:+962795190420" class="text-decoration-none">+962 795190420</a></p> {{-- Styled link --}}
                        </div>
                    </div>
                    {{-- Email Us Item --}}
                    <div class="col-md-6 mb-3"> {{-- Added mb-3 for spacing on small screens --}}
                        <div class="info-item d-flex flex-column justify-content-center align-items-center text-center p-3 shadow-sm rounded-3 h-100" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope display-6 text-danger mb-2"></i> {{-- Larger icon, danger color --}}
                            <h3 class="h5 fw-bold">Email Us</h3>
                            <p class="mb-0"><a href="mailto:Massar.line.proj@gmail.com" class="text-decoration-none">Massar.line.proj@gmail.com</a></p> {{-- Styled link --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- Contact Form Block --}}
            <div class="col-lg-6">
                <form id="contactForm" action="{{ route('contact-messages.store') }}" method="POST" class="php-email-form bg-white p-4 shadow-sm rounded-3" data-aos="fade-up" data-aos-delay="500">
                    @csrf
                    <div class="row gy-3"> {{-- Changed to gy-3 for slightly less vertical spacing --}}
                        <div class="col-md-6">
                            <label for="nameInput" class="form-label visually-hidden">Your Name</label> {{-- Added accessible label --}}
                            <input type="text" name="name" id="nameInput" class="form-control" placeholder="Your Name" value="{{ old('name') }}" required aria-label="Your Name">
                            @error('name')<div class="text-danger mt-1">{{ $message }}</div>@enderror
                        </div>

                        <div class="col-md-6">
                            <label for="emailInput" class="form-label visually-hidden">Your Email</label> {{-- Added accessible label --}}
                            <input type="email" name="email" id="emailInput" class="form-control" placeholder="Your Email" value="{{ old('email') }}" required aria-label="Your Email">
                            @error('email')<div class="text-danger mt-1">{{ $message }}</div>@enderror
                        </div>

                        <div class="col-md-12">
                            <label for="messageTextInput" class="form-label visually-hidden">Your Message</label> {{-- Added accessible label --}}
                            <textarea name="message_text" id="messageTextInput" class="form-control" rows="6" placeholder="Your Message" required aria-label="Your Message">{{ old('message_text') }}</textarea>
                            @error('message_text')<div class="text-danger mt-1">{{ $message }}</div>@enderror
                        </div>

                        <div class="col-md-12 text-center mt-4"> {{-- Increased top margin for button --}}
                            {{-- Messages and Button --}}
                            <div class="loading text-info mb-2 d-none">Sending Message...</div>
                            <div class="error-message alert alert-danger mb-2 d-none" role="alert"></div>
                            <div class="sent-message alert alert-success mb-2 d-none" role="alert"></div>
                            <button type="submit" class="btn btn-warning w-100 fw-bold">Send Message</button> {{-- Full width button on all screens --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const csrfTokenMeta = document.querySelector('meta[name="csrf-token"]');
    const csrfToken = csrfTokenMeta ? csrfTokenMeta.getAttribute('content') : '';

    if (contactForm) {
        const loadingDiv = contactForm.querySelector('.loading');
        const errorMessageDiv = contactForm.querySelector('.error-message');
        const sentMessageDiv = contactForm.querySelector('.sent-message');
        const submitButton = contactForm.querySelector('button[type="submit"]');

        contactForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            errorMessageDiv.classList.add('d-none');
            sentMessageDiv.classList.add('d-none');
            errorMessageDiv.innerHTML = '';
            sentMessageDiv.innerHTML = '';

            loadingDiv.classList.remove('d-none');
            submitButton.disabled = true; // Disable button during submission

            const formData = new FormData(this); // Get form data

            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': csrfToken // Use the retrieved token
                }
            })
            .then(response => {
                loadingDiv.classList.add('d-none'); // Hide loading spinner

                if (!response.ok) {
                    return response.json().then(errorData => {
                        throw errorData;
                    });
                }
                return response.json();
            })
            .then(data => {
                sentMessageDiv.innerHTML = data.message || 'Your message has been sent. Thank you!';
                sentMessageDiv.classList.remove('d-none'); // Show success message
                contactForm.reset(); // Clear the form fields
            })
            .catch(error => {
                console.error('Error:', error);
                let message = 'There was an error sending your message. Please try again.';

                if (error.errors) {
                    message = '<ul>';
                    for (let key in error.errors) {
                        message += `<li>${error.errors[key][0]}</li>`;
                    }
                    message += '</ul>';
                } else if (error.message) {
                    message = error.message;
                }

                errorMessageDiv.innerHTML = message;
                errorMessageDiv.classList.remove('d-none'); 
            })
            .finally(() => {
                submitButton.disabled = false; 
            });
        });
    }
});
</script>

@endsection