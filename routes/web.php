<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('layouts/pages/sensor');
})->middleware(['auth', 'verified'])->name('sensor');

Route::get('/dashboard', function () {
    return view('layouts/pages/led-control');
})->middleware(['auth', 'verified'])->name('led-control');

Route::get('/dashboard', function () {
    return view('layouts/pages/Pengguna');
})->middleware(['auth', 'verified'])->name('pengguna');

// Route::get('/sensor', 'SensorController@index');

// Route::get('/sensor', function () {
//     return view('layouts/sensor'); // Halaman Sensor
// });

// Route::post('/led-control', function () {
//     return view('layouts/led-control'); // Halaman LED Control
// });

// Route::get('layouts/user', function () {
//     return view('layouts/user'); // Halaman Pengguna
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';