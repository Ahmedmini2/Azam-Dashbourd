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

// Route::get('/', function () {
//     return view('dashboard');
// });


Route::view('/staff', 'staff')->name('staff');
Route::view('/staffSalary', 'staffSalary')->name('staffSalary');
Route::view('/staffSalaryShow', 'staffSalaryShow')->name('staffSalaryShow');
Route::view('/schedule', 'schedule')->name('schedule');
Route::view('/scheduledata', 'scheduledata')->name('scheduledata');
Route::view('/property', 'property')->name('property');
Route::view('/propertydata', 'propertydata')->name('propertydata');
Route::view('/schedulefinal', 'schedulefinal')->name('schedulefinal');
Route::view('/invoicelogo', 'invoicelogo')->middleware('auth')->name('invoicelogo');
Route::view('/invoicelogoshow', 'invoicelogoshow')->name('invoicelogoshow');
Route::view('/invoiceAdd', 'invoiceAdd')->name('invoiceAdd');
Route::view('/invoicesearch', 'invoicesearch')->name('invoicesearch');
Route::view('/invoiceData', 'invoiceData')->name('invoiceData');
Route::view('/invoiceCustom', 'invoiceCustom')->name('invoiceCustom');
Route::view('/invoiceCustomSearch', 'invoiceCustomSearch')->name('invoiceCustomSearch');
Route::view('/invoiceCustomData', 'invoiceCustomData')->name('invoiceCustomData');
Route::view('/invoiceAllData', 'invoiceAllData')->name('invoiceAllData');
Route::view('/home', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/expenses', 'expenses')->name('expenses');
Route::view('/showexpenses', 'showexpenses')->name('showexpenses');



Route::get('/', function () {
    return view('home');
});

Route::view('/dashboard', 'dashboard')->middleware('auth')->name('dashboard');
Route::group(['middleware' => 'auth:admin'], function () {
});



// -----------------------------user role-----------------------------------------
Route::get('userRole','App\Http\Controllers\HomeController@userRole')->name('userRole');
Route::get('dashboard','App\Http\Controllers\HomeController@index')->name('dashboard');
Route::get('dashboard','App\Http\Controllers\HomeController@report2')->name('dashboard');

// ======================== avatar ======================== //
Route::post('profile', 'App\Http\Controllers\HomeController@update_avatar')->name('profile');

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

// -----------------------------route form ------------------------------
Route::get('form/employee/new','App\Http\Controllers\employeeController@viewEmployee')->name('form/employee/new');
Route::post('form/employee/save','App\Http\Controllers\employeeController@save')->name('form/employee/save');
Route::get('report','App\Http\Controllers\employeeController@report')->name('report');
Route::get('schedule','App\Http\Controllers\sNameController@report')->name('schedule');





//------------------------------------ Staff Form ----------------------------------------------------

Route::post('staff/save','App\Http\Controllers\StaffController@save')->name('staff/save');
Route::get('StaffSalaryShow','App\Http\Controllers\sNameController@search')->name('StaffSalaryShow');

//------------------------------------ schedules Form ----------------------------------------------------

Route::get('scheduledata','App\Http\Controllers\ScheduleController@report')->name('scheduledata');

Route::post('scheduledata/save','App\Http\Controllers\ScheduleController@save')->name('scheduledata/save');

Route::get('schedulefinal/','App\Http\Controllers\ScheduleController@show')->name('schedulefinal/');
Route::get('schedulefinal','App\Http\Controllers\ScheduleController@search')->name('schedulefinal');

//---------------------------------------- Invoices ----------------------------------------------//
Route::post('invoice/save','App\Http\Controllers\InvoiceController@save')->name('invoice/save');
Route::post('invoiceCustom/save','App\Http\Controllers\SingleInvoiceController@save')->name('invoiceCustom/save');
Route::get('invoicelogo','App\Http\Controllers\ScheduleController@search2')->name('invoicelogo');
Route::get('invoicelogoshow','App\Http\Controllers\ScheduleController@search3')->name('invoicelogoshow');
Route::get('invoiceAdd','App\Http\Controllers\ScheduleController@report2')->name('invoiceAdd');
Route::get('invoiceCustomSearch','App\Http\Controllers\SingleInvoiceController@report')->name('invoiceCustomSearch');
Route::get('invoicesearch','App\Http\Controllers\ScheduleController@report3')->name('invoicesearch');
Route::get('invoiceData','App\Http\Controllers\InvoiceController@report')->name('invoiceData');
Route::get('invoiceCustomData','App\Http\Controllers\SingleInvoiceController@report2')->name('invoiceCustomData');
Route::get('invoiceAllData','App\Http\Controllers\SingleInvoiceController@report3')->name('invoiceAllData');
//------------------------------------ Property Form ----------------------------------------------------

Route::get('propertydata','App\Http\Controllers\PropertyController@report')->name('propertydata');

Route::post('property/save','App\Http\Controllers\PropertyController@save')->name('property/save');

// ----------------------------------------  Expenses ------------------------------------ //

Route::post('saveexpenses','App\Http\Controllers\ExpenseController@save')->name('saveexpenses');
Route::get('showexpenses','App\Http\Controllers\ExpenseController@report')->name('showexpenses');


// ------------------------ delete ------------------------- //
Route::post('report','App\Http\Controllers\employeeController@search')->name('search');

// ------------------------ delete ------------------------- //
Route::get('delete/{id}','App\Http\Controllers\employeeController@delete')->name('delete');
// ------------------------ update ------------------------ //
Route::post('update','App\Http\Controllers\employeeController@update')->name('update');

//------------------------------------- Contact us --------------------------------
Route::get('/contact','App\Http\Controllers\ContactUsFormController@createForm')->name('contact');

Route::post('/contact','App\Http\Controllers\ContactUsFormController@ContactUsForm')->name('contact.store');
