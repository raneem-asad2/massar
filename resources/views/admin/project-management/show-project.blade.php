@extends('adminlte::page')

@section('title', 'Project Details')

@section('content_header')
    <h1 class="font-weight-bold">{{ $project->project_name }}</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white">
            <h3 class="card-title">Project Information</h3>
        </div>
        <div class="card-body">
            <p><strong>Project ID:</strong> {{ $project->id }}</p>
            <p><strong>Robot:</strong> {{ $project->robot ? $project->robot->robot_name : 'N/A' }}</p>
            <p><strong>Staff:</strong> {{ $project->staff ? $project->staff->name : 'N/A' }}</p>
            <p><strong>Status:</strong> 
                @php
                    $statusClass = match($project->status) {
                        'In Progress' => 'badge-primary',
                        'Completed' => 'badge-success',
                        default => 'badge-secondary',
                    };
                @endphp
                <span class="badge {{ $statusClass }}">{{ $project->status }}</span>
            </p>
            <p><strong>Assignment Date:</strong> {{ $project->assignment_date }}</p>
            <p><strong>Completion Date:</strong> {{ $project->completion_date ?? 'N/A' }}</p>

            <h4>Street Defects</h4>
            <ul>
                @forelse ($streetDefects as $defect)
                    <li>{{ $defect->defect_type }} at segment 
                        {{ $defect->roadSegment ? $defect->roadSegment->segment_name : 'N/A' }}
                    </li>
                @empty
                    <li>No defects found.</li>
                @endforelse
            </ul>

            <div id="map" style="height: 400px; margin-top:20px;"></div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary btn-sm">Back to Projects</a>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
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

            let segments = @json($project->roadSegments);

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
                L.popup()
                 .setLatLng([31.95, 35.91])
                 .setContent("<b>No road segments available</b>")
                 .openOn(map);
            }
        });
    </script>
@stop
