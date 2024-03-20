<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\RefController;
use App\Http\Controllers\ReferenceController;
use App\Models\Person;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home')->middleware(['guest']);

Route::controller(AdminController::class)->group(function () {
    Route::post('login', 'login')->name('login')->middleware(['guest']);

    // ADMIN DASHBOARD
    Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware(['auth']);

    // LOGOUT FUNCTIONALITY
    Route::post('/logout', 'logout')->name('logout')->middleware(['auth']);
});



// REFERENCES CONTROLLER FOR ADMIN
Route::controller(RefController::class)->group(function () {
    // SHOW IMPORT FORM
    Route::get('/create', 'create')->name('create');

    // STORE IMPORTED DATA
    Route::post('/create', 'store');
});

Route::controller(PersonController::class)->group(function () {
    Route::get('add', 'create')->name('person.add');
    Route::post('post', 'show');
});
