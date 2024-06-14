<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Service\WhatsappNotificationService;
use App\Http\Controllers\LedController;

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
    return view('layouts/dashboard.landing');
});

Route::get('/dashboard', function () {
    $data['title'] = 'Dashboard';
    $data['breadcrumbs'][] = [
        'title' => 'Dashboard',
        'url' => route('dashboard')
    ];
    $data['breadcrumbs'][] = [
        'title' => 'Users',
        'url' => route('users.index')
    ];


    return view('layouts.pages.dashboard', $data);
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('layouts/dashboar.coba');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('layouts/pengguna', function () {
    return view('layouts.pages.pengguna');
})->name('pengguna');

// Route::get('/led-control', function () {
//     return view('led-control');
// })->name('led-control');

// Route::get('/sensor', function () {
//     return view('layouts/sensor');
// })->name('sensor');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/whatsapp', function () {
        $target = request('target');
        $message = 'Ada kebocoran gas di rumah anda, segera cek dan perbaiki';
        $response = WhatsappNotificationService::sendMessage($target, $message);
        echo $response;
    });

    //Users
    Route::get('users', [UserController::class, 'index'])->name('users.index');

});


Route::controller(LedController::class)->group(function () {
    Route::get('/leds', 'index')->name('led.index');
    Route::post('/leds', 'store')->name('led.store');
});

require __DIR__ . '/auth.php';
