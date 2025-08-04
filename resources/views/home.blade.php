@extends('layouts.app')

@section('title','home')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

<section class="header-img  text-center d-flex align-items-center justify-content-center">
        <div class="overlay w-100 h-100 position-absolute"></div>
        <div class="container position-relative">
            <h1 class="display-5 fw-bold">Paving the Future, One Line at a Time</h1>
        </div>
    </section>

    <!-- Who We Are -->
    <section class="py-5 text-center my-5">
        <div class="container">
            <h2 class="mb-4 fw-bold">Who We Are</h2>
            <p class="lead text-muted">
            Massar is a Jordan-based robotics company specializing in autonomous road-painting technology. Our self-driving robot operates at night to avoid traffic, using GPS, cameras, and gyroscopes to deliver highly accurate lane markings. It works from a designated charging station, covering specific areas efficiently. Citizens receive mobile alerts during operation, and a live dashboard provides real-time updates on paint levels, battery status, work progress, and estimated completion time. Massar brings intelligent automation to road infrastructure—enhancing precision, efficiency, and transparency.            </p>
        </div>
    </section>

    <!-- Why Choose Massar -->
    <section class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bold mb-5">Why Choose Massar?</h2>
            <div class="row gy-4">
                <div class="col-md-4">
                    <h6 class="fw-bold">High-Precision Lane Marking</h6>
                    <p>using GPS, cameras, and gyroscopes</p>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold">Smart City Aligned</h6>
                    <p>supports Jordan’s modern infrastructure goals</p>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold">Operates at Night</h6>
                    <p>to avoid traffic and minimize disruption</p>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold">Mobile Alerts</h6>
                    <p>to keep citizens informed during operation</p>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold">Real-Time Tracking</h6>
                    <p>via dashboard (paint levels, battery, progress, ETA)</p>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold">Fully Autonomous Workflow</h6>
                    <p>from charging to job completion</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5 ">About Us</h2>

        <div class="row g-5 align-items-center">
            <!-- Image Column -->
            <div class="col-md-6">
                <img src="{{ asset('images/home-img.jpg') }}" alt="Massar Image" class="img-fluid rounded w-100">
            </div>

            <!-- Text Column -->
            <div class="col-md-6">
                <h4 class="fw-semibold mb-3 ">Our Core Value</h4>
                <p class="text-muted mb-4">
                    To revolutionize urban infrastructure maintenance through intelligent, autonomous solutions
                    that enhance road safety, reduce operational costs, and support the development of smart cities in Jordan and beyond.
                </p>

                <h4 class="fw-semibold mb-3 ">Our Mission</h4>
                <p class="text-muted">
                    To develop and deploy an AI-powered robotic system that automates road lane marking efficiently and safely during off-peak hours, ensuring accuracy, sustainability, and innovation in every painted line.
                </p>
            </div>
        </div>
    </div>
</section>


    <!-- Our Services -->
<section class="py-5 text-center bg-light">
    <div class="container">
        <h2 class="fw-bold mb-5">Our Services</h2>
        <div class="row justify-content-center g-4">
            
            <!-- Service Card 1 -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 p-3 text-start">
                    <div class="card-body d-flex flex-column flex-sm-row align-items-start gap-3">
                        <img src="{{ asset('images/robot-car.png') }}" class="pt-1" style="width: 50px;" alt="Robot Icon">
                        <div>
                            <h5 class="fw-bold">Autonomous Road Lane Marking</h5>
                            <p class="text-muted mb-0">Our robot operates automatically every night after midnight to mark and maintain road lanes accurately and efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Card 2 -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 p-3 text-start">
                    <div class="card-body d-flex flex-column flex-sm-row align-items-start gap-3">
                        <img src="{{ asset('images/web-icon.png') }}" class="pt-1" style="width: 50px;" alt="Dashboard Icon">
                        <div>
                            <h5 class="fw-bold">Web Dashboard Monitoring</h5>
                            <p class="text-muted mb-0">Track progress and completed roads, maintenance schedules and performance history.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <a href="#" class="services-btn mt-5 px-4 py-2">
            Learn More →
        </a>
        </div>
        
    </div>
</section>



<!-- Get Started With Massar -->
<section class="bg-dark text-white py-5 text-center">
  <div class="container">
    <h4 class="fw-bold mb-4 text-white">Get Started With Massar</h4>
    <p class="text-light mx-auto mb-4" style="max-width: 600px; font-size: 1.125rem; line-height: 1.6;">
      Ready to transform your road infrastructure with cutting-edge automation? Partner with Massar to experience precise, efficient, and cost-effective lane marking like never before.
    </p>
     <div class="text-center mt-5">
            <a href="#" class="services-btn mt-5 px-4 py-2">
            Learn More →
        </a>
        </div>
  </div>
</section>


@endsection

