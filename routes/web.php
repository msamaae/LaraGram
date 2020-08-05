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

Auth::routes();

// Home
Route::get('/home', 'HomeController@index')->name('home');

// Profile
Route::get('/profile/{user}', 'ProfilesController@show')->name('profile.show');

// Post 
Route::get('/post/create', 'PostsController@create')->name('post.create');
Route::patch('/post', 'PostsController@store')->name('post.store');