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
    return view('front.index');
});

Route::get('front/organization','Admin\AdminController@organization')->name('admin.organization');
Route::get('front/rlifiles','Admin\AdminController@rlifiles')->name('admin.rlifiles');

Auth::routes();
Route::get('admin/login','Admin\AdminController@adminLogin')->name('admin.admin_login');
Route::post('admin/login','Admin\AdminController@login')->name('admin.login');

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>['admin']],function(){
    Route::get('admin/dashboard','Admin\AdminController@dashboard')->name('admin.dashboard');
    Route::get('admin/update-password','Admin\AdminController@updatePasswordForm')->name('admin.password.form');
});
