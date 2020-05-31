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

\Illuminate\Support\Facades\Auth::routes();

Route::get('/', 'WelcomeController@home')->name('welcome');
Route::livewire('/projects', 'projects')->name('projects');
Route::resource('posts', 'PostController');
Route::livewire('/contact', 'contact')->name('contact');
//Route::get('/contact', 'WelcomeController@contact')->name('contact');
Route::get('/home', 'HomeController@index')->name('home');

