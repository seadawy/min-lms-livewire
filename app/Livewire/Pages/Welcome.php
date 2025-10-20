<?php

namespace App\Livewire\Pages;

use App\Models\Course;
use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        return view('livewire.pages.welcome', [
            'courses' => Course::with('level')->get(),
        ]);
    }
}
