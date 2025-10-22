<?php

namespace App\Livewire\Lessons;

use Livewire\Component;

class Listview extends Component
{
    public $lessons;

    public function render()
    {
        return view('livewire.lessons.listview');
    }
}
