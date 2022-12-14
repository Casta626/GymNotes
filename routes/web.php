<?php

use App\Http\Controllers\AlimentosController;
use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\GestionPesoController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\MusculosController;
use App\Http\Controllers\RmMaxController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\UserController;
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

Route::group(['middleware' => ['can:ver-ejercicios']], function () {
    Route::get('/crear-ejercicios', [EjercicioController::class, 'getEjercicios']);
Route::post("/crear-ejercicios", [EjercicioController::class, 'postEjercicio']);
});



Route::get('/barcode_qr_reader', [ImageUploadController::class, 'prueba']);

Route::get('/alimentos', [AlimentosController::class, 'getAlimentos']);

Route::get('/calendario', [EjercicioController::class, 'calendario']);
Route::post('/calendario', [EjercicioController::class, 'postAgEj']);


Route::get('/rm-max', [RmMaxController::class, 'rmCalculator'])->name('rmmax.rmcalculator');
Route::get('/musculos', [MusculosController::class, 'musculos']);

Route::get('/gestion-peso', [GestionPesoController::class, 'getGestionPeso'])->name('gestionPeso.calculadora');

Route::get('/ejercicio', [EjercicioController::class, 'ejercicio']);

Route::get('/ejercicios', [SeriesController::class, 'getSeries']);
Route::post('/ejercicios', [SeriesController::class, 'postSeries']);

Route::get('/musculos2', [MusculosController::class, 'index']);

Route::post('/valor-alimentos', [ValorAlimentosController::class, 'getValorAlimentos']);

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

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
