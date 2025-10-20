<?php

use App\Livewire\Course\Show;
use App\Livewire\Pages\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class);

Route::prefix('course')->name('course.')->group(function () {
    Route::get('{slug}', Show::class)->name('show');
});
