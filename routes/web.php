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

Route::get('/' , 'publicController@index')->name('home');
Route::get('/back/featured' , 'publicController@featured')->name('featured');
Route::get('/back/breaking' , 'publicController@breaking')->name('breaking');

Route::post('/back/makefeatured' , 'publicController@make_featured')->name('makefeatured');
Route::post('/back/makebreaking' , 'publicController@make_breaking')->name('makebreaking');

Route::get('/new/{id}' , 'publicController@view_post')->name('new_details');




Route::get('/back' , 'BackController@GetHome')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout'); 


Route::resource('/member' , 'AdminController');
Route::resource('/section' , 'SectionController');
Route::resource('/ad' , 'AdController');


Route::resource('/post' , 'PostController');