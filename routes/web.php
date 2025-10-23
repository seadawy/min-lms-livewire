<?php

use App\Livewire\Pages\Course\Show as CourseShow;
use App\Livewire\Pages\Lesson\Show as LessonShow;
use App\Livewire\Pages\Login;
use App\Livewire\Pages\Register;
use App\Livewire\Pages\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class);

Route::middleware(['guest'])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', function () {
        Auth::logout();

        return redirect('/login');
    });
});

Route::prefix('courses')->name('course.')->group(function () {
    Route::get('{slug}', CourseShow::class)->name('show');
    Route::prefix('/{slug}/lessons/{lessonOrder?}')->name('lesson.')->group(function () {
        Route::get('/', LessonShow::class)->name('show');
    });
});
