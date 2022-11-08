<?php

use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\MusculosController;
use App\Http\Controllers\RmMaxController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\ValorAlimentosController;
use App\Http\Livewire\Home;
use App\Http\Livewire\Prueba;
use App\Models\RmMax;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/barcode_qr_reader', 'App\Http\Controllers\ImageUploadController@page');
// Route::post('/barcode_qr_reader/upload', 'App\Http\Controllers\ImageUploadController@upload')->name('image.upload');
Route::get('/barcode_qr_reader', [ImageUploadController::class, 'prueba']);

Route::get('/ejercicios', [EjercicioController::class, 'index']);

// Route::get('/rm-max', [RmMaxController::class, 'index']);
Route::get('/rm-max', [RmMaxController::class, 'rmCalculator'])->name('rmmax.rmcalculator');

Route::get('/pruebas', [SeriesController::class, 'pruebas']);

Route::get('/musculos', [MusculosController::class, 'index']);

Route::get('/valor-alimentos', [ValorAlimentosController::class, 'index']);

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    // Route::get('/ejercicios', 'EjercicioController@index')->name('ejercicio.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
