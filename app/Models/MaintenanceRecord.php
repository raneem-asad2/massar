<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'robot_id',
        'maintenance_date',
        'description',
        'cost',
    ];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function robot()
    {
        return $this->belongsTo(Robot::class);
    }
}
