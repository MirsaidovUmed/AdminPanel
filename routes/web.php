<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/points' , 'PointsController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth','admin']], function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/role-register', 'Admin\DashboardController@registered');
    Route::post('/role-register', 'Admin\DashboardController@registerstore');
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


      /// Department


    Route::get('department' , 'DepartmentController@index');
    Route::post('department', 'DepartmentController@store');
    Route::put('department/{id}' , 'DepartmentController@update');
    Route::get('department/{id}' , 'DepartmentController@edit');
    Route::delete('department/{id}' , 'DepartmentController@destroy');

    Route::get('employ' , 'EmployController@index');
    Route::post('employ', 'EmployController@store');
    Route::put('employ/{id}' , 'EmployController@update');
    Route::get('employ/{id}' , 'EmployController@edit');
    Route::delete('employ/{id}' , 'EmployController@destroy');

    Route::get('attendance', 'AttendanceController@index');
    Route::post('attendance', 'AttendanceController@store');

    Route::get('posts', [App\Http\Controllers\PostController::class,'index']);
    Route::get('add-post', [App\Http\Controllers\PostController::class,'create']);
    Route::post('add-post', [App\Http\Controllers\PostController::class,'store']);
    Route::get('edit-post/{id}', [App\Http\Controllers\PostController::class,'edit']);
    Route::put('update-post/{id}', [App\Http\Controllers\PostController::class,'update']);
    Route::get('delete-post/{id}', [App\Http\Controllers\PostController::class,'destroy']);
});



