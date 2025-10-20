<?php

namespace App\Livewire\Course;

use Livewire\Component;

class Item extends Component
{
    public $course;

    public function mount($course)
    {
        $this->course = $course;
    }

    public function render()
    {
        return view('livewire.course.item');
    }
}
