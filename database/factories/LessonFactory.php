<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(4, true),
            'video_url' => 'https://youtu.be/Y3od1i_W3VE?si=YjHUrA_rbbRQy6Ux',
            'order' => fake()->numberBetween(1, 10),
            'duration_seconds' => fake()->numberBetween(60, 120),
            'is_free_preview' => fake()->boolean(),
            'course_id' => fake()->numberBetween(1, 10),
        ];
    }
}
