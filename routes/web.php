<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // add the authenticated routes here

    Route::get('create_assignment', [AssignmentController::class, 'create']);

    Route::resource('assignments', AssignmentController::class)->except('create');

    


    // Route::get('/create_assignment', function(){
    //     return []
    //     // return view('class_schedule');
    // });
    Route::get('/class_schedule', function(){
        return view('class_schedule');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
