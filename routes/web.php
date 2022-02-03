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


route::get('/loginadmin',function(){
    return view('Index');
});

Route::get('admin/login', 'admin\AdminLoginController@getLogin')->name('admin.login');
Route::post('admin/login', 'admin\AdminLoginController@postLogin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
