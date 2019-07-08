<?php

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

Route::get('/', 'Site\IndexController@index')->name('site.index');
Route::get('/coming-soon', 'Site\IndexController@comingSoon')->name('site.coming-soon.index');
Route::get('/contacts', 'Site\IndexController@contacts')->name('site.contacts.index');
Route::get('/services', 'Site\IndexController@services')->name('site.services.index');
Route::get('/about', 'Site\IndexController@about')->name('site.about.index');

Route::post('/subscribe/store', 'Site\SubscribeController@store')->name('site.subscribe.store');
