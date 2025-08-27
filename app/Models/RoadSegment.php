<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadSegment extends Model
{
    use HasFactory;

    protected $fillable = [
        'segment_name',
        'status',
        'line_type',
        'start_coordinates',
        'end_coordinates',
        'description',
        'project_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function streetDefects()
    {
        return $this->hasMany(StreetDefect::class, 'segment_id');
    }
}
