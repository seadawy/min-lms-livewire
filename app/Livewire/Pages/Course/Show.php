<?php

namespace App\Livewire\Pages\Course;

use App\Actions\Course\EnrollCourse;
use App\Models\Course;
use Livewire\Component;
use Log;
use Redirect;

class Show extends Component
{
    public Course $course;

    public $enrolled = false;

    public function enroll(EnrollCourse $action)
    {
        if (auth()->guest()) {
            Redirect::setIntendedUrl(route('course.show', $this->course->slug));

            return redirect()->route('login');
        } else {
            try {
                $action->handel($this->course, auth()->user()->id);
                $this->enrolled = true;
            } catch (\Throwable $th) {
                Log::error($th);
            }
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
        if (! auth()->guest()) {
            $this->enrolled = auth()->user()->courses()->where('course_id', $this->course->id)->exists();
        }
    }

    public function render()
    {
        return view('livewire.pages.course.show');
    }
}
