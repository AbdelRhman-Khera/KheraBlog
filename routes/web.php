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

Route::get('/', 'IndexController@index')->name('home');
Route::get('/post/{id}', 'IndexController@show')->name('postshow');
Route::get('/carousel', 'IndexController@carousel')->name('carousel');
Route::get('/gallery', 'IndexController@gallery')->name('gallery');
Route::get('/category/{category_id}', 'IndexController@showcat')->name('catshow');
Route::any('/search results', 'IndexController@search')->name('search');
Route::group(['prefix' => 'admin'], function () {
	Voyager::routes();
});
Route::get('/a', function () {
	$carousel = \App\Carousel::orderby('id', 'asc')->get();
	return view('a', compact('carousel'));
});
Route::get('addlogo', function () {
	$img = Image::make('https://icdn.sempremilan.com/wp-content/uploads/2020/02/FC-Internazionale-v-AC-Milan-Serie-A-1581339224.jpg');

	$img->insert(public_path('storage/logo-2.png'), 'bottom-right', 10, 10);

	$img->save(public_path('images/1-new.png'));

	dd('saved image successfully.');
});
