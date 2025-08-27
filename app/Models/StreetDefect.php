<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StreetDefect extends Model
{
    use HasFactory;

    protected $fillable = [
        'defect_type',
        'location',
        'image',
        'status',
        'segment_id',
    ];

    public function roadSegment()
    {
        return $this->belongsTo(RoadSegment::class, 'segment_id');
    }
}
