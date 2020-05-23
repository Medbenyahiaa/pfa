<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/homeAdmin','admin.homeAdmin')->middleware(['auth','admin']);
Route::view('/homeDonateur','donateur.homeDonateur')->middleware(['auth','donateur']);
Route::view('/homeBeneficiare','beneficiare.homeBeneficiare')->middleware(['auth','beneficiare']);
Route::resource('/compte','CompteController');
