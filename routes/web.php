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

Route::get('/', 'HomeController@home')->name('home');

Route::get('/news', 'NewsController@getNews')->name('news');

Route::get('/contact', 'MailController@getContact')->name('contact');
Route::post('/contact', 'MailController@postContact')->name('contact.save');

Route::get('/donate', 'DonationController@donate')->name('donate');

Route::get('/news/index', 'NewsController@getIndexNews')->name('news.index');
Route::get('/news/create', 'NewsController@getCreateNews')->name('news.create');
Route::post('/news/create', 'NewsController@postCreateNews')->name('news.create.post');
Route::get('/news/edit/{article}', 'NewsController@getEditNews')->name('news.edit');
Route::post('/news/edit/{article}', 'NewsController@postEditNews')->name('news.edit.post');
Route::delete('/news/delete{article}', 'NewsController@postDeleteNews')->name('news.delete');

Route::get('/pages', 'DashboardController@getIndexPages')->name('pages.index');
Route::get('/pages/create', 'DashboardController@getCreatePage')->name('pages.create');
Route::post('/pages/create', 'DashboardController@postCreatePage')->name('pages.create.post');
Route::get('/pages/edit/{page}', 'DashboardController@getEditPage')->name('pages.edit');
Route::post('/pages/edit/{page}', 'DashboardController@postEditPage')->name('pages.edit.post');
Route::delete('/pages/delete{page}', 'DashboardController@postDeletePage')->name('pages.delete');


Route::get('/news/{slug}', 'NewsController@getNewsDetail')->name('news.detail');
Route::get('/{slug}', 'PageController@getPage')->name('page');
