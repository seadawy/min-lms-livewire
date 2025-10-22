<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::factory()->count(10)->create()->each(function ($course) {
            $course->lessons()->saveMany(Lesson::factory()->count(5)->create(
                ['course_id' => $course->id]
            ));
        });
    }
}
