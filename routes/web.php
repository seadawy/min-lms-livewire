<?php

use App\Livewire\Course\Show;
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

Route::prefix('course')->name('course.')->group(function () {
    Route::get('{slug}', Show::class)->name('show');
});
