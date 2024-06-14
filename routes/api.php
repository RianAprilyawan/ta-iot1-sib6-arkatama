<?php

use App\Http\Controllers\Api\MqSensorController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController as ControllersUserController;
use App\Http\Controllers\Api\LedController;
use App\Http\Controllers\Api\Dht11SensorController;
use App\Http\Controllers\Api\RainSensorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/user', ProfileController::class);


Route::get('/user', [ProfileController::class, 'index']);

//CRUD
// Route::resource('users', UserController::class);

//route group name api
// route group name api
Route::group(['as' => 'api.'], function () {
    // resource route
    Route::resource('users', UserController::class)
        ->except(['create', 'edit']);


        Route::resource('sensors/mq', MqSensorController::class)
        ->names('sensors.mq');

        Route::resource('sensors/dht11', RainSensorController::class)
        ->names('sensors.dht11');

    Route::resource('sensors/rain', RainSensorController::class)
    ->names('sensors.rain');


});

Route::prefix('v1/leds')->name('leds.')->group(function () {
    Route::get('/', [LedController::class, 'index'])->name('index');
    Route::get('/{id}', [LedController::class, 'show'])->name('show');
    Route::post('/', [LedController::class, 'store'])->name('store');
    Route::put('/{id}', [LedController::class, 'update'])->name('update');
    Route::delete('/{id}', [LedController::class, 'destroy'])->name('destroy');
});


