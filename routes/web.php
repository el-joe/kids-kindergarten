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

Route::get('/', 'HomeController@index')->name('index');


Route::get('about-us', 'mainController@about')->name('about');

Route::get('classes', 'mainController@class')->name('classes');

Route::get('teachers', 'mainController@teacher')->name('teachers');

Route::get('gallery', 'mainController@gallery')->name('gallery');

Route::get('contact', 'mainController@contactShow')->name('contact');
Route::post('contact', 'mainController@contactStore')->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
