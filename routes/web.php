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

//Admin Login
Route::get('/admin/logout','App\Http\Controllers\AdminController@adminlogout');
Route::post('/admin/adminlogin/check', "App\Http\Controllers\AdminController@adminlogin");

//adminlogin Page
Route::get('page-login',"App\Http\Controllers\AdminController@Adminloginpage");
//dashboard
Route::get('dashboard',"App\Http\Controllers\DashboardController@dashboard");
//ADD CAR
Route::get('/add_car' ,"App\Http\Controllers\DashboardController@AddCarHere");
Route::post('/add_car', "App\Http\Controllers\DashboardController@createcars");
//carlist
Route::get('car_list',"App\Http\Controllers\DashboardController@carlist");
Route::get('delete/{id}','App\Http\Controllers\DashboardController@destroy');
Route::get('/car_edit/{id}',"App\Http\Controllers\DashboardController@edit_cars");
Route::post('todo_update/{id}',"App\Http\Controllers\DashboardController@update_cars")->name('todo.update');
// Route::view('show_customer_rides',"show_customer_rides");
Route::get('/show_customer_rides',"App\Http\Controllers\DashboardController@bookrideslist");
//changepassword
Route::get('changepasswords',"App\Http\Controllers\DashboardController@changepassword");



Route::get('changepassword',function()
{
return view('change_password');
});

Route::get('changepassword/{id}',"App\Http\Controllers\DashboardController@change_password_detail");
Route::post('/changepasswordhere/{id}', "App\Http\Controllers\DashboardController@update_password");


Route::view('car_edit',"car_edit");

//Home

// Route::view('index',"index");
Route::view('contactus',"ContactUs");

Route::view('BookRide',"BookRide");
// Route::view('cars',"cars");
Route::view('AboutUs',"AboutUs");
Route::view('TermsAndConditions',"TermsAndConditions");


Route::get('locale/{locale}',function($locale)
{
Session::put('locale',$locale);
return redirect()->back();
});

Route::post('emailsubmit',"App\Http\Controllers\EmailController@SubmitEmail");
Route::post('submitbookride',"App\Http\Controllers\HomeController@Submitbookride");

Route::get('cars',"App\Http\Controllers\HomeController@new");


Route::get('index',"App\Http\Controllers\HomeController@indexshow");
// Route::get('/send_email',function()
// {
// $details=[
//     'title'=>"Mail fron Red Auto Rent",
//     'body'=>"your ride is booked successfully"
// ];
// \Mail::to('humanshud950@gmail.com')->send(new \App\Mail\SendMail($details));
// echo "message has been sent succesfuly";

// });