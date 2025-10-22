<?php

namespace App\Livewire\Lessons;

use App\Models\Lesson;
use Livewire\Component;

class PreviewVideo extends Component
{
    public $isOpen = false;

    public $videoUrl = '';

    public $lessonTitle = '';

    protected $listeners = ['openPreview'];

    public function openPreview($lessonId)
    {
        $lesson = Lesson::with('course')->find($lessonId);

        if ($lesson && $lesson->is_free_preview) {
            $this->videoUrl = $lesson->video_url;
            $this->lessonTitle = $lesson->title;
            $this->videoUrl = '';
            $this->isOpen = true;
        }
    }

    public function closeDialog()
    {
        $this->isOpen = false;
        $this->videoUrl = '';
        $this->thumbnailUrl = '';
        $this->lessonTitle = '';
        $this->provider = 'html5';
        $this->videoId = '';
    }

    public function render()
    {
        return view('livewire.lessons.preview-video');
    }
}
