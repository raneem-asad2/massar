@extends('adminlte::page')

@section('title', 'Admin Dashboard')

@section('css')
{{-- Custom CSS for better visuals --}}
<style>
    .progress-bar-vertical {
        width: 100%;
        min-height: 60px;
        display: flex;
        align-items: flex-end;
        background-color: #e9ecef;
    }
    .progress-bar-vertical .progress-bar {
        width: 100%;
        height: 0;
        -webkit-transition: height 0.6s ease;
        -o-transition: height 0.6s ease;
        transition: height 0.6s ease;
    }
    .info-box .progress .progress-bar {
        width: 100%;
    }
</style>
    <link rel="stylesheet" href="{{ asset('css/custom-sidebar.css') }}">

@endsection
@section('content')
<div class="container-fluid ">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 my-4">Street Lining Robot Dashboard</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>

    <!-- Top Info Widgets -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Robots Online</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">4 / 10</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-robot fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Distance Painted (Today)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">148 KM</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-road fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks Progress</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">75%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tasks fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">System Alerts</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">2 Active</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Row -->
    <div class="row">
        <div class="col-lg-8">
            <!-- Daily Performance Line Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Daily Performance (Tasks Completed)</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area" style="height: 320px;">
                        <canvas id="dailyPerformanceChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Live Robot Fleet Status Table -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Live Robot Fleet Status</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Robot ID</th>
                                    <th>Status</th>
                                    <th>Battery</th>
                                    <th>Current Task</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Robot_01</td>
                                    <td><span class="badge badge-success">Painting</span></td>
                                    <td>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="85">85%</div>
                                        </div>
                                    </td>
                                    <td>Main Street - Section A</td>
                                    <td><a href="#" class="btn btn-sm btn-outline-primary">View Details</a></td>
                                </tr>
                                <tr>
                                    <td>Robot_02</td>
                                    <td><span class="badge badge-info">Charging</span></td>
                                    <td>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 45%;" aria-valuenow="45">45%</div>
                                        </div>
                                    </td>
                                    <td>Charging Bay 2</td>
                                    <td><a href="#" class="btn btn-sm btn-outline-primary">View Details</a></td>
                                </tr>
                                <tr>
                                    <td>Robot_03</td>
                                    <td><span class="badge badge-danger">Error</span></td>
                                    <td>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 22%;" aria-valuenow="22">22%</div>
                                        </div>
                                    </td>
                                    <td>Paint Tank Empty</td>
                                    <td><a href="#" class="btn btn-sm btn-outline-primary">View Details</a></td>
                                </tr>
                                <tr>
                                    <td>Robot_04</td>
                                    <td><span class="badge badge-warning">Idle</span></td>
                                    <td>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 77%;" aria-valuenow="77">77%</div>
                                        </div>
                                    </td>
                                    <td>Awaiting Task</td>
                                    <td><a href="#" class="btn btn-sm btn-outline-primary">View Details</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <!-- Fleet Overview Donut Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Fleet Overview</h6>
                </div>
                <div class="card-body">
                    <div class="chart-pie pt-4" style="height: 255px;">
                        <canvas id="robotStatusDonutChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2"><i class="fas fa-circle text-success"></i> Painting</span>
                        <span class="mr-2"><i class="fas fa-circle text-info"></i> Charging</span>
                        <span class="mr-2"><i class="fas fa-circle text-warning"></i> Idle</span>
                        <span class="mr-2"><i class="fas fa-circle text-danger"></i> Error</span>
                    </div>
                </div>
            </div>

            <!-- System Alerts -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">System Alerts</h6>
                </div>
                <div class="card-body">
                   <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-battery-quarter text-danger mr-2"></i>
                                <strong>Robot_03: Low Battery</strong>
                                <small class="d-block text-muted">22% remaining. Needs charging soon.</small>
                            </div>
                            <span class="badge badge-danger badge-pill">Critical</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-fill-drip text-warning mr-2"></i>
                                <strong>Robot_03: Paint Tank Empty</strong>
                                <small class="d-block text-muted">Error logged 1 hour ago.</small>
                            </div>
                            <span class="badge badge-warning badge-pill">High</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Chart.js Global Config
    Chart.defaults.font.family = "Nunito", "-apple-system,system-ui,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif";
    Chart.defaults.color = '#858796';

    // Daily Performance Line Chart
    const ctxLine = document.getElementById('dailyPerformanceChart').getContext('2d');
    const gradient = ctxLine.createLinearGradient(0, 0, 0, 300);
    gradient.addColorStop(0, 'rgba(78, 115, 223, 0.2)');
    gradient.addColorStop(1, 'rgba(78, 115, 223, 0)');

    new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Tasks Completed',
                data: [3, 5, 2, 6, 4, 8, 5],
                borderColor: '#4e73df',
                backgroundColor: gradient,
                fill: true,
                tension: 0.3,
                pointBackgroundColor: '#4e73df',
                pointRadius: 4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: "rgba(234, 236, 244, 1)",
                        zeroLineColor: "rgba(234, 236, 244, 1)",
                        drawBorder: false,
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    padding: 15,
                    displayColors: false,
                    caretPadding: 10,
                }
            }
        }
    });

    // Robot Status Donut Chart
    const ctxDonut = document.getElementById('robotStatusDonutChart').getContext('2d');
    new Chart(ctxDonut, {
        type: 'doughnut',
        data: {
            labels: ['Painting', 'Idle', 'Charging', 'Error'],
            datasets: [{
                data: [3, 1, 1, 1],
                backgroundColor: ['#1cc88a', '#f6c23e', '#36b9cc', '#e74a3b'],
                hoverBackgroundColor: ['#17a673', '#d4a637', '#2c9faf', '#c73e30'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '80%',
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    padding: 15,
                    displayColors: false,
                    caretPadding: 10,
                }
            }
        }
    });
});
</script>
@endsection