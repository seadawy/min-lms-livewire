<?php

namespace App\Livewire\Pages\Course;

use App\Actions\Course\EnrollCourse;
use App\Models\Course;
use Livewire\Component;
use Redirect;

class Show extends Component
{
    public Course $course;

    public function enroll(EnrollCourse $action)
    {
        if (auth()->guest()) {
            Redirect::setIntendedUrl(route('course.show', $this->course->slug));

            return redirect()->route('login');
        } else {
            $action->handel($this->course, auth()->user()->id);
        }
    }

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
