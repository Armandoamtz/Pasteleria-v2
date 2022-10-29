<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasteleriaController;

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

Route::get('/pasteleria/home', function () {
    return view('pastelero.main');
});

Route::resource('/pasteleria', PasteleriaController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [PasteleriaController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [PasteleriaController::class, 'index'])->name('home');
});
