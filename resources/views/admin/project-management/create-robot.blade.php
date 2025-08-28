@extends('adminlte::page')

@section('title', 'Create New Robot')

@section('content_header')
    <h1 class="mb-3">➕ Create Robot</h1>
@stop

@section('content')
    <div class="card shadow-sm border-0">
        <div class="card-header text-black">
            <h3 class="card-title mb-0"><i class="fas fa-robot mr-2"></i> New Robot Details</h3>
        </div>

        <form action="{{ route('admin.robots.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <!-- Robot Name -->
                    <div class="col-md-6 mb-3">
                        <label for="robot_name" class="form-label">Robot Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <input type="text" name="robot_name" id="robot_name"
                                   class="form-control @error('robot_name') is-invalid @enderror"
                                   value="{{ old('robot_name') }}" required>
                            @error('robot_name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Serial Number -->
                    <div class="col-md-6 mb-3">
                        <label for="serial_number" class="form-label">Serial Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                            </div>
                            <input type="text" name="serial_number" id="serial_number"
                                   class="form-control @error('serial_number') is-invalid @enderror"
                                   value="{{ old('serial_number') }}" required>
                            @error('serial_number')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="col-md-6 mb-3">
                        <label for="robot_status" class="form-label">Status</label>
                        <select name="robot_status" id="robot_status"
                                class="form-control @error('robot_status') is-invalid @enderror" required>
                            <option value="">Select Status</option>
                            <option value="Operational" {{ old('robot_status') == 'Operational' ? 'selected' : '' }}>Operational</option>
                            <option value="Charging" {{ old('robot_status') == 'Charging' ? 'selected' : '' }}>Charging</option>
                            <option value="Maintenance" {{ old('robot_status') == 'Maintenance' ? 'selected' : '' }}>Maintenance</option>
                            <option value="Disabled" {{ old('robot_status') == 'Disabled' ? 'selected' : '' }}>Disabled</option>
                        </select>
                        @error('robot_status')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Charge Level -->
                    <div class="col-md-6 mb-3">
                        <label for="charge_level" class="form-label">Charge Level (%)</label>
                        <input type="number" name="charge_level" id="charge_level"
                               class="form-control @error('charge_level') is-invalid @enderror"
                               value="{{ old('charge_level') }}" min="0" max="100">
                        @error('charge_level')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Paint Level -->
                    <div class="col-md-6 mb-3">
                        <label for="paint_level" class="form-label">Paint Level (%)</label>
                        <input type="number" name="paint_level" id="paint_level"
                               class="form-control @error('paint_level') is-invalid @enderror"
                               value="{{ old('paint_level') }}" min="0" max="100">
                        @error('paint_level')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Current Location -->
                    <div class="col-md-6 mb-3">
                        <label for="current_location" class="form-label">Current Location</label>
                        <input type="text" name="current_location" id="current_location"
                               class="form-control @error('current_location') is-invalid @enderror"
                               value="{{ old('current_location') }}">
                        @error('current_location')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Last Maintenance Date -->
                    <div class="col-md-6 mb-3">
                        <label for="last_maintenance_date" class="form-label">Last Maintenance Date</label>
                        <input type="date" name="last_maintenance_date" id="last_maintenance_date"
                               class="form-control @error('last_maintenance_date') is-invalid @enderror"
                               value="{{ old('last_maintenance_date') }}">
                        @error('last_maintenance_date')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route('admin.robots.index') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left mr-1"></i> Cancel
                </a>
                <button type="submit" class="btn btn-outline-primary">
                    <i class="fas fa-save mr-1"></i> Create Robot
                </button>
            </div>
        </form>
    </div>
@stop
