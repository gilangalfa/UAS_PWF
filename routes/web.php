<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;


Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Route::get('/', function () {
//     return view('welcome');
// });

// guest views
Route::get('/', [SeminarController::class, 'index']);
Route::get('/workshops', [WorkshopController::class, 'index']);
Route::get('/seminar/{seminar}', [SeminarController::class, 'show']);
Route::get('/workshop/{workshop}', [WorkshopController::class, 'show']);

Route::get('/seminar/{seminar}/registration', [SeminarController::class, 'create']);
Route::post('/seminar/{seminar}/registration', [SeminarController::class, 'store']);
Route::get('/workshop/{workshop}/registration', [WorkshopController::class, 'create']);
Route::post('/workshop/{workshop}/registration', [WorkshopController::class, 'store']);


// Route::get('/my_page', [MyPlaceController::class,'index']);
