<?php

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

Route::get('/', function () {
    return view('pages/wellcome');
});

Route::get('/registracija', function (){
    return view('auth/register');
});

Route::get('/prijava', function (){
    return view('auth/login');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



Auth::routes();

Route::get('/početna', 'HomeController@index')->name('home');
Route::get('/kreiranjePosla', 'JobsController@index')->name('job.index');
Route::post('/kreiranjePosla', 'JobsController@store')->name('job.store');
