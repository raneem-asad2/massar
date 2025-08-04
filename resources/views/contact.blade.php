@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">

<section class="contact-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold ">Contact Us</h2>
      <p class="text-muted">Any question or remarks? Just write us a message!</p>
    </div>

    <div class="row contact-container">
    <!-- Left Side -->
<div class="col-md-5 contact-left d-flex flex-column justify-content-between ">
  <div>
    <h5 class="fw-semibold mb-3">Contact Information</h5>
    <p>Say something to start a live chat!</p>
    <ul class="ps-0">
      <li><i class="fas fa-phone me-2"></i> +962 0000 000</li>
      <li><i class="fas fa-envelope me-2"></i> demo@gmail.com</li>
      <li>
        <i class="fas fa-map-marker-alt me-2"></i>
        132 ### Street Jordan,<br>
        Amman 02156 Jordan
      </li>
    </ul>
  </div>

  <div class="position-relative mt-4">
    <div class="social-icons d-flex gap-2">
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-discord"></i></a>
    </div>

    <!-- Decorative circles -->
    <div class="decorative-circles">
      <div class="circle large"></div>
      <div class="circle small"></div>
    </div>
  </div>
</div>


      <!-- Right Side -->
      <div class="col-md-7 contact-right mt-4">
        <form action="" method="POST">
          @csrf
          <div class="row mb-3">
            <div class="col">
              <label class="form-label">First Name</label>
              <input type="text" name="first_name" class="form-control" placeholder="first name" required>
            </div>
            <div class="col">
              <label class="form-label">Last Name</label>
              <input type="text" name="last_name" class="form-control" placeholder="last name" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" placeholder="example@email.com" required>
            </div>
            <div class="col">
              <label class="form-label">Phone Number</label>
              <input type="tel" name="phone" class="form-control" placeholder="+962 0000 000">
            </div>
          </div>

          {{-- <div class="mb-3">
            <label class="form-label">Subject</label>
            <div class="d-flex gap-3 flex-wrap">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="subject" id="subject1" value="General Inquiry" required>
                <label class="form-check-label" for="subject1">General Inquiry</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="subject" id="subject2" value="Support">
                <label class="form-check-label" for="subject2">Support</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="subject" id="subject3" value="Feedback">
                <label class="form-check-label" for="subject3">Feedback</label>
              </div>
            </div>
          </div> --}}

          <div class="mb-4">
            <label class="form-label">Message</label>
            <textarea name="message" class="form-control" rows="4" placeholder="Write your message..." required></textarea>
          </div>

          <button type="submit" class=" btn-custom">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
