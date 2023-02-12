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

Route::group(['middleware'=>['auth','admin']], function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/role-register', 'Admin\DashboardController@registered');

    Route::get('/role-edit/{id}', 'Admin\DashboardController@registeredit');

    Route::put('/role-register-update/{id}', 'Admin\DashboardController@registerupdate');

    Route::delete('/role-delete/{id}' , 'Admin\DashboardController@registerdelete');

    Route::get('/abouts' , 'Admin\AboutusController@index');
    Route::post('/save-aboutus','Admin\AboutusController@store');
    Route::get('/about-us/{id}','Admin\AboutusController@edit');
    Route::put('/abouts/{id}', 'Admin\AboutusController@update');
    Route::delete('/abouts/{id}' , 'Admin\AboutusController@delete');

    Route::get('stock' , 'Admin\StockController@index');
    Route::get('profile'  ,'ProfileController@index');
    Route::get('groups' , 'GroupsController@index');
});


