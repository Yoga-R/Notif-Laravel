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

Route::get('/', [WelcomeController::class, 'show']);


Route::get('/loginadmin', [AdminController::class, 'loginAdmin']);

Route::get('admin/login', 'admin\AdminLoginController@getLogin')->name('admin.login');
Route::post('admin/login', 'admin\AdminLoginController@postLogin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/dashboard',function(){
//     return view('master');
// });

Route::get('/send-email/{id}','SendMailController@sendMail');

Route::resource('/tenagakerja', TenagaKerjaController::class);
Route::resource('/pekerjaan', PekerjaanController::class);
Route::get('/send-firebase/{title}/{pekerjaan}','PushNotifikasiController@sendFirebase');

Route::get('/kirim-notif', 'PushNotifikasiController@create')->name('notif.index');
Route::post('/kirim-notif', 'PushNotifikasiController@sendNotifFirebase')->name('notif.store');


Route::resource('/pekerjaan2', PekerjaanController::class);
Route::resource('/dashboard', PekerjaanController::class);

Route::post('/firebase/save-token', [PushNotifikasiController::class, 'saveToken'])->name('firebase.save-token');
