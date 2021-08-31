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
    return view('auth.login');
});

Route::view('/staff', 'staff')->name('staff');
Route::view('/staffform', 'staffform')->name('staffform');

Route::view('/home', 'home')->middleware('auth')->name('home');
Route::group(['middleware' => 'auth:admin'], function () {
});

Auth::routes();
// ======================== avatar ======================== //
Route::post('profile', 'App\Http\Controllers\HomeController@update_avatar');

// -----------------------------login-----------------------------------------
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@authenticate');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// ------------------------------register---------------------------------------
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@storeUser')->name('register');

// -----------------------------forget password ------------------------------
Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail')->name('forget-password');
Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail')->name('forget-password');

Route::get('reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword');
Route::post('reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword');

// -----------------------------login facebook ------------------------------
Route::get('/redirect', 'App\Http\Controllers\FacebookController@redirect');
Route::get('/callback', 'App\Http\Controllers\FacebookController@callback');

// -----------------------------route infomation staff ------------------------------
Route::get('form/information-staff/new','App\Http\Controllers\informationStaffController@viewInformationStaff')->name('form/information-staff/new');

// -----------------------------route report ------------------------------
Route::get('report/new','App\Http\Controllers\reportController@viewReport')->name('report/new');
Route::get('schedule/new','App\Http\Controllers\reportController@viewReport')->name('schedule/new');

//---------------------------------- Contact --------------------------------------

Route::get('/contact', [ContactUsFormController::class, 'createForm']);

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');