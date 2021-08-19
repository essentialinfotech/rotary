<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderController;

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
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [FrontController::class, 'index'])->name('index.home');
Route::match(['get','post'],'/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('index.dashboard');



//Slider
Route::get('admin/slider', [SliderController::class, 'index'])->name('admin.slider.index');
Route::get('admin/slider/create', [SliderController::class, 'create'])->name('admin.slider.create');
Route::get('admin/slider/edit/{id}', [SliderController::class, 'edit'])->name('admin.slider.edit');
Route::match(['get','post'],'admin/slider/insert', [SliderController::class, 'insert'])->name('admin.slider.insert');
Route::match(['get','post'],'admin/slider/edit/{id}', [SliderController::class, 'update'])->name('admin.slider.update');
Route::get('admin/slider/update-status/{id}/{status}', [SliderController::class, 'updateStatus']);
Route::match(['get','post'],'admin/delete-slider/{id}', [SliderController::class, 'delete'])->name('admin.delete-slider');
