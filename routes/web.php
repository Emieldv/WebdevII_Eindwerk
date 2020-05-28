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

// Route::get('/', function () { return view('layout');});

Route::get('/contact', 'MailController@getContact')->name('contact');
Route::post('/contact', 'MailController@postContact')->name('contact.save');

Route::get('/', 'PageController@home')->name('home');
Route::get('/news', 'PageController@news')->name('news');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/donate', 'PageController@donate')->name('donate');
Route::get('/privacy', 'PageController@privacy')->name('privacy');
