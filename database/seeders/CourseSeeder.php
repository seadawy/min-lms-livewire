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
            $lessons = Lesson::factory()->count(5)->make([
                'course_id' => $course->id,
            ]);

            foreach ($lessons as $index => $lesson) {
                $lesson->order = $index + 1;
            }

            $course->lessons()->saveMany($lessons);
        });
    }
}
