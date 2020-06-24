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
Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/homeAdmin', function () {
        return view('admin.homeAdmin');
    });

    Route::get('/role-users', 'Admin\HomeAdminController@registered');
    Route::get('/role-edit/{id}','Admin\HomeAdminController@inspedit');
    Route::put('/role-insp-update/{id}','Admin\HomeAdminController@inspupdate');
    Route::delete('/role-delete/{id}','Admin\HomeAdminController@inspdelete');
    Route::get('/inscriptionA' , 'Admin\HomeAdminController@Admin');

    Route::post('/inscriptionA' , 'Admin\CompteController@AddAdmin');
});
Route::group(['middleware' => ['auth','beneficiare']], function () {
    Route::get('/announce', function () {
        return view('beneficiare.announce');
    });

    Route::get('/homeBeneficiare', 'Beneficiare\HomeBeneficiareController@pubu');
});

Route::group(['middleware' => ['auth','donateur']], function () {
    Route::get('/homeDonateur', function () {
        return view('donateur.homeDonateur');
    });

    //Route::get('/homeDonateur', 'Donateur\HomeDonateurController@pubu');
});
Route::view('/about','about')->name('about');

//Route::view('/homeDonateur','donateur.homeDonateur')->middleware(['auth','donateur']);
//Route::view('/homeBeneficiare','beneficiare.homeBeneficiare')->middleware(['auth','beneficiare']);
Route::resource('/compte','CompteController');
