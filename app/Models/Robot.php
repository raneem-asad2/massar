<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Robot extends Model
{
    use HasFactory;

    protected $fillable=[
        'robot_name',
        'charge_level',
        'paint_level',
        'robot_status',
        'current_location',
        'serial_number',
        'last_maintenance_date',   
    ];

    public function projects(){
        return $this->hasMany(Project::class,'robot_id');
    }

    public function maintenanceRecords(){
        return $this->hasMany(MaintenanceRecord::class);
    }
    public function roadSegments()
{
    return $this->hasMany(RoadSegment::class);
}

}
