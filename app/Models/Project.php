<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'status',
        'assignment_date',
        'completion_date',
        'robot_id',
        'staff_id',
    ];

    public function robot()
    {
        return $this->belongsTo(Robot::class, 'robot_id');
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function roadSegments()
    {
        return $this->hasMany(RoadSegment::class);
    }
}
