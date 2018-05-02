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


Route::get('about-us', function(){
	$header = 'About Us';
	$headerContent = 'Welcome to Kids';
	return view('aboutUs',compact(['header','headerContent']));
})->name('about');

Route::get('classes', function(){
	$header = 'Our Programs';
	$headerContent = 'Popular Classes';
	$ourProgramsSubmit='';
	return view('classes',compact(['header','headerContent','ourProgramsSubmit']));
})->name('classes');

Route::get('teachers', function(){
	$header = 'Our Staff';
	$headerContent = 'Meet Teachers';
	return view('teachers',compact(['header','headerContent']));
})->name('teachers');

Route::get('gallery', function(){
	$header = 'Our Gallery';
	$headerContent = 'Moment from Kids';
	return view('gallery',compact(['header','headerContent']));
})->name('gallery');

Route::get('contact', 'mainController@contactShow')->name('contact');
Route::post('contact', 'mainController@contactStore')->name('contact');