@extends('adminlte::page')


@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Street Lining Robot Dashboard</h1>

    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Robots Online</span>
                    <span class="info-box-number">4/10</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Tasks Today</span>
                    <span class="info-box-number">10</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">KM Painted</span>
                    <span class="info-box-number">148</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Battery Alert</span>
                    <span class="info-box-number">2</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">Tasks Completed</h3>
                </div>
                <div class="card-body">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>

        
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">Robot Status (Donut)</h3>
                </div>
                <div class="card-body">
                    <canvas id="donutChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Robot Status (Pie)</h3>
                </div>
                <div class="card-body">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Battery Levels</h3>
                </div>
                <div class="card-body">
                    <canvas id="batteryChart"></canvas>
                </div>
            </div>
        </div>
    </div>
{{-- ////////////////////////////////////// --}}
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Recent Errors</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr><th>Robot ID</th><th>Error</th><th>Time</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Robot_01</td><td>Low battery warning</td><td>5 minutes ago</td></tr>
                            <tr><td>Robot_03</td><td>Paint tank empty</td><td>1 hour ago</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Recent Tasks</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr><th>Robot</th><th>Area</th><th>Distance</th><th>Completed</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Robot_01</td><td>Main Street</td><td>1.2 KM</td><td>10:30</td></tr>
                            <tr><td>Robot_02</td><td>Industrial Zone</td><td>2.5 KM</td><td>11:45</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    new Chart(document.getElementById('barChart').getContext('2d'), {
        type: 'bar',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
            datasets: [{
                label: 'Tasks Completed',
                data: [3, 5, 2, 6, 4],
                backgroundColor: 'rgba(54, 162, 235, 0.6)'
            }]
        },
        options: { responsive: true, maintainAspectRatio: false }
    });

    new Chart(document.getElementById('donutChart').getContext('2d'), {
        type: 'doughnut',
        data: {
            labels: ['Painting', 'Idle', 'Charging', 'Error'],
            datasets: [{
                data: [3, 1, 1, 1],
                backgroundColor: ['#28a745', '#ffc107', '#17a2b8', '#dc3545']
            }]
        },
        options: { responsive: true, maintainAspectRatio: false }
    });

    new Chart(document.getElementById('pieChart').getContext('2d'), {
        type: 'pie',
        data: {
            labels: ['Painting', 'Idle', 'Charging', 'Error'],
            datasets: [{
                data: [3, 1, 1, 1],
                backgroundColor: ['#28a745', '#ffc107', '#17a2b8', '#dc3545']
            }]
        },
        options: { responsive: true, maintainAspectRatio: false }
    });

    new Chart(document.getElementById('batteryChart').getContext('2d'), {
        type: 'bar',
        data: {
            labels: ['Robot_01', 'Robot_02', 'Robot_03', 'Robot_04'],
            datasets: [{
                label: 'Battery Level (%)',
                data: [85, 45, 22, 77],
                backgroundColor: ['#17a2b8', '#ffc107', '#dc3545', '#28a745']
            }]
        },
        options: { responsive: true, maintainAspectRatio: false }
    });
</script>
@endsection