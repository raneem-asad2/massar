@extends('adminlte::page')

@section('title', 'Admin Dashboard')

@section('css')
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
        transition: height 0.6s ease;
    }
    .info-box .progress .progress-bar {
        width: 100%;
    }
</style>
<link rel="stylesheet" href="{{ asset('css/custom-sidebar.css') }}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 my-4">Street Lining Robot Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Robots Online</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $robots->where('robot_status', '!=', 'Offline')->count() }} / {{ $robots->count() }}
                            </div>
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ number_format(collect($tasksCompletedPerDay)->sum() * 2, 0) }} KM
                            </div>
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
                                    @php
                                        $progress = round(collect($tasksCompletedPerDay)->sum() / (7*10) * 100);
                                    @endphp
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $progress }}%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ $progress }}%" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($systemAlerts) }} Active</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
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

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Live Robot Fleet Status</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" width="100%" cellspacing="0">
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
                                @foreach($robots as $robot)
                                <tr>
                                    <td>{{ $robot->serial_number }}</td>
                                    <td>
                                        @php
                                            $statusColor = match($robot->robot_status) {
                                                'Painting' => 'success',
                                                'Charging' => 'info',
                                                'Idle' => 'warning',
                                                'Error' => 'danger',
                                                default => 'secondary',
                                            };
                                        @endphp
                                        <span class="badge badge-{{ $statusColor }}">{{ $robot->robot_status }}</span>
                                    </td>
                                    <td>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar bg-{{ $statusColor }}" role="progressbar" 
                                                 style="width: {{ $robot->charge_level ?? 0 }}%;" 
                                                 aria-valuenow="{{ $robot->charge_level ?? 0 }}" aria-valuemin="0" aria-valuemax="100">
                                                 {{ $robot->charge_level ?? 0 }}%
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $robot->current_task?->name ?? 'Awaiting Task' }}</td>
                                    <td><a href="{{ route('admin.robots.show', $robot->id) }}" class="btn btn-sm btn-outline-primary">View Details</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Fleet Overview</h6>
                </div>
                <div class="card-body">
                    <div class="chart-pie pt-4" style="height: 255px;">
                        <canvas id="robotStatusDonutChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        @foreach($robotStatusCounts as $status => $count)
                            @php
                                $colorClass = match($status) {
                                    'Painting' => 'success',
                                    'Charging' => 'info',
                                    'Idle' => 'warning',
                                    'Error' => 'danger',
                                    default => 'secondary',
                                };
                            @endphp
                            <span class="mr-2"><i class="fas fa-circle text-{{ $colorClass }}"></i> {{ $status }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">System Alerts</h6>
                </div>
                <div class="card-body">
                   <ul class="list-group list-group-flush">
                        @foreach($systemAlerts as $alert)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <i class="{{ $alert['icon'] }} mr-2"></i>
                                <strong>{{ $alert['robot_id'] }}: {{ $alert['title'] }}</strong>
                                <small class="d-block text-muted">{{ $alert['details'] }}</small>
                            </div>
                            @php
                                $badgeColor = match(strtolower($alert['level'])) {
                                    'critical' => 'danger',
                                    'high' => 'warning',
                                    'medium' => 'info',
                                    default => 'secondary',
                                };
                            @endphp
                            <span class="badge badge-{{ $badgeColor }} badge-pill">{{ $alert['level'] }}</span>
                        </li>
                        @endforeach
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