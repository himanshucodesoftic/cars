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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/page-login',function()
{
    return view('page-login');


});



// Route::post('login/{id}', 'App\Http\Controllers\AdminController@userPostLogin');



Route::get('dashboard',"App\Http\Controllers\DashboardController@dashboard");


Route::get('changepasswords',"App\Http\Controllers\DashboardController@changepassword");

Route::get('/admin/logout','App\Http\Controllers\AdminController@adminlogout');
Route::post('/admin/adminlogin/check', "App\Http\Controllers\AdminController@adminlogin");

Route::get('changepassword/{id}',"App\Http\Controllers\DashboardController@change_password_detail");
Route::post('/changepasswordhere/{id}', "App\Http\Controllers\DashboardController@update_password");

// Route::get('/changepassword',"App\Http\Controllers\DashboardController@change_id");

//ADD CAR
Route::get('/add_car' ,"App\Http\Controllers\DashboardController@AddCarHere");
Route::post('/add_car', "App\Http\Controllers\DashboardController@createcars");

//carlist


Route::get('car_list',"App\Http\Controllers\DashboardController@carlist");



Route::get('delete/{id}','App\Http\Controllers\DashboardController@destroy');

Route::view('car_edit',"car_edit");
Route::get('/car_edit/{id}',"App\Http\Controllers\DashboardController@edit_cars");

Route::post('todo_update/{id}',"App\Http\Controllers\DashboardController@update_cars")->name('todo.update');
