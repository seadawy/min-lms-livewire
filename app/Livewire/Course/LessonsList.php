<?php

namespace App\Livewire\Lessons;

use Livewire\Component;

class LessonsList extends Component
{
    public $lessons;

    public function startPreview($lessonId)
    {
        $this->dispatch('openPreview', lessonId: $lessonId);
    }

    public function render()
    {
        return view('livewire.course.lessons-list');
    }
}
