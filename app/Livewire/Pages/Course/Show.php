<?php

namespace App\Livewire\Pages\Course;

use App\Models\Course;
use Livewire\Component;

class Show extends Component
{
    public Course $course;

    public function mount($slug)
    {
        $this->course = Course::with([
            'lessons' => function ($query) {
                $query->orderBy('order');
            },
            'level',
            'user',
        ]
        )->where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.pages.course.show');
    }
}
