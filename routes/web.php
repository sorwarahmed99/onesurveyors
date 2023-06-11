<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', 'App\Http\Controllers\PublicController@index')->name('index');
Route::get('/services', 'App\Http\Controllers\PublicController@services')->name('services');
Route::get('/projects', 'App\Http\Controllers\PublicController@projects')->name('projects');
Route::get('/news', 'App\Http\Controllers\PublicController@news')->name('news');
Route::get('/about-us', 'App\Http\Controllers\PublicController@aboutus')->name('aboutus');
Route::get('/contact-us', 'App\Http\Controllers\PublicController@contact')->name('contact');
// Route::get('/services/{service}', 'PublicController@service')->name('service');
