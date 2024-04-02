<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\School\SchoolCreate;

Route::middleware('auth')->group(function () {
    Route::prefix('school')->group(function () {
        Route::name('school.')->group(function () {
            Route::view('create','app.school.create')->name('create');
        });
    });
});