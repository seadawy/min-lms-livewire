<?php

namespace App\Actions\Course;

use App\Models\Course;
use DB;

final class EnrollCourse
{
    public function handel(Course $course, $user_id)
    {
        DB::transaction(function () use ($course, $user_id) {
            if (! $course->users()->where('user_id', $user_id)->exists()) {
                $course->users()->attach($user_id);
            }
        });
    }
}
