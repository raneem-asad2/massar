@extends('layouts.app')

@section('content')

<div class="position-relative">
    <img src="{{ asset('images/services-main.jpg') }}" class="w-100 opacity-75" style="height: 500px; object-fit: cover;" alt="Services Banner">
    <div class="position-absolute top-50 start-50 translate-middle text-black  text-center">
        <h1 class="display-4 fw-bold">Our Services</h1>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4">
        <div class="col-md-6">
            <div class="d-flex border p-4 bg-light rounded shadow-sm h-100">
                <div class="me-3 flex-shrink-0">
                    <img src="/images/auto.png" alt="Icon 1" style="height: 50px;">
                </div>
                <div>
                    <h5 class="fw-bold">Fully Operator-Free Functionality</h5>
            <p class="mb-0">Our robot works completely autonomously without any human operator, leveraging advanced AI and sensors to perform tasks accurately and safely around the clock.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex border p-4 bg-light rounded shadow-sm h-100">
                <div class="me-3 flex-shrink-0">
                    <img src="/images/robot-car.png" alt="Icon 2" style="height: 50px;">
                </div>
                <div>
                    <h5 class="fw-bold">Autonomous Road Lane Marking</h5>
                    <p class="mb-0">Our robot operates autonomously every night after midnight to mark and maintain road lanes accurately and efficiently, minimizing traffic disruptions and ensuring safety.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex border p-4 bg-light rounded shadow-sm h-100">
                <div class="me-3 flex-shrink-0">
                    <img src="/images/gps.png" alt="Icon 3" style="height: 50px;">
                </div>
                <div>
                    <h5 class="fw-bold">GPS-Based Route Mapping</h5>
                    <p class="mb-0">Our robot operates autonomously every night after midnight to mark and maintain road lanes accurately and efficiently, minimizing traffic disruptions and ensuring safety.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex border p-4 bg-light rounded shadow-sm h-100">
                <div class="me-3 flex-shrink-0">
                    <img src="/images/motorway.png" alt="Icon 4" style="height: 50px;">
                </div>
                <div>
                    <h5 class="fw-bold">Street Width & Surface Analysis</h5>
                    <p class="mb-0">Our robot operates autonomously every night after midnight to mark and maintain road lanes accurately and efficiently, minimizing traffic disruptions and ensuring safety.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex border p-4 bg-light rounded shadow-sm h-100">
                <div class="me-3 flex-shrink-0">
                    <img src="/images/shield.png" alt="Icon 5" style="height: 50px;">
                </div>
                <div>
                    <h5 class="fw-bold">Smart Public Safety System</h5>
                    <p class="mb-0">Our robot operates autonomously every night after midnight to mark and maintain road lanes accurately and efficiently, minimizing traffic disruptions and ensuring safety.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex border p-4 bg-light rounded shadow-sm h-100">
                <div class="me-3 flex-shrink-0">
                    <img src="/images/web-icon.png" alt="Icon 6" style="height: 50px;">
                </div>
                <div>
                    <h5 class="fw-bold">Web Dashboard Monitoring</h5>
                    <p class="mb-0">Our robot operates autonomously every night after midnight to mark and maintain road lanes accurately and efficiently, minimizing traffic disruptions and ensuring safety.</p>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
