<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'video_url',
        'order',
        'duration_seconds',
        'is_free_preview',
        'course_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
