@extends('adminlte::page')

@section('title', 'Robot Details')

@section('content_header')
    <h1 class="font-weight-bold text-dark">Robot Details</h1>
@stop

@section('content')
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white">
            <h3 class="card-title mb-0 text-primary">{{ $robot->robot_name }}</h3>
        </div>
        <div class="card-body">
            <dl class="row mb-0">
                <dt class="col-sm-4 text-muted">Robot Id:</dt>
                <dd class="col-sm-8">{{ $robot->id }}</dd>

                <dt class="col-sm-4 text-muted">Robot Name:</dt>
                <dd class="col-sm-8">{{ $robot->robot_name }}</dd>

                <dt class="col-sm-4 text-muted">Serial Number:</dt>
                <dd class="col-sm-8">{{ $robot->serial_number }}</dd>

                <dt class="col-sm-4 text-muted">Status:</dt>
                <dd class="col-sm-8">{{ $robot->robot_status }}</dd>

                <dt class="col-sm-4 text-muted">Charge Level:</dt>
                <dd class="col-sm-8">{{ $robot->charge_level ?? 'N/A' }}%</dd>

                <dt class="col-sm-4 text-muted">Paint Level:</dt>
                <dd class="col-sm-8">{{ $robot->paint_level ?? 'N/A' }}%</dd>

                <dt class="col-sm-4 text-muted">Current Location:</dt>
                <dd class="col-sm-8">{{ $robot->current_location ?? 'N/A' }}</dd>

                <dt class="col-sm-4 text-muted">Last Maintenance Date:</dt>
                <dd class="col-sm-8">
                    {{ $robot->last_maintenance_date ? \Carbon\Carbon::parse($robot->last_maintenance_date)->format('F d, Y') : 'N/A' }}
                </dd>
            </dl>

            {{-- Map --}}
            <div id="map" style="height: 400px; margin-top:20px;"></div>
        </div>

        <div class="card-footer d-flex justify-content-between bg-white">
            <a href="{{ route('admin.robots.index') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left mr-1"></i> Back
            </a>
            <a href="{{ route('admin.robots.edit', $robot->id) }}" class="btn btn-outline-warning">
                <i class="fas fa-edit mr-1"></i> Edit
            </a>
        </div>
    </div>
    console.log(segments);

@stop

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 400px;
            margin-top: 20px;
        }
    </style>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $robot->robot_name }}</h3>
        </div>

        <div class="card-body">
            {{-- Map --}}
            <div id="map"></div>
        </div>

        <div class="card-footer d-flex justify-content-between bg-white">
            <a href="{{ route('admin.robots.index') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left mr-1"></i> Back
            </a>
            <a href="{{ route('admin.robots.edit', $robot->id) }}" class="btn btn-outline-warning">
                <i class="fas fa-edit mr-1"></i> Edit
            </a>
        </div>
    </div>
@stop

@section('js')
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const mapEl = document.getElementById('map');
            if (!mapEl) return;

            let map = L.map('map').setView([31.95, 35.91], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            let segments = @json($robot->projects->flatMap->roadSegments);

            if (segments.length > 0) {
                let allCoords = [];

                segments.forEach(seg => {
                    if (seg.start_coordinates && seg.end_coordinates) {
                        let start = seg.start_coordinates.split(",").map(Number);
                        let end = seg.end_coordinates.split(",").map(Number);

                        let polyline = L.polyline([start, end], { color: 'blue' }).addTo(map);
                        polyline.bindPopup(seg.segment_name + " (" + seg.status + ")");
                        allCoords.push(start, end);
                    }
                });

                if (allCoords.length > 0) {
                    map.fitBounds(allCoords);
                }
            } else {
                // No segments: show popup in center
                L.popup()
                 .setLatLng([31.95, 35.91])
                 .setContent("<b>No road segments available</b>")
                 .openOn(map);
            }
        });
    </script>
@stop