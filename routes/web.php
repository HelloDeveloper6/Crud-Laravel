<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AplicacionController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('aplicacion', AplicacionController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [AplicacionController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/', [AplicacionController::class, 'index'])->name('home');
});

//Route::get('/aplicacion/create', [AplicacionController::class, 'create'] );

//Route::get('/apliacion', [AplicacionController::class, 'index']);

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
