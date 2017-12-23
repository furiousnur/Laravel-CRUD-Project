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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function(){
// 	return view('pages.about');
// });


// Route::get('/users/{id}/{name}', function($id,$name){
// 	return "This is user id is ".$id." and name is ".$name;
// });

Route::get('/', 'pagesController@index');
// Route::get('/about', 'pagesController@about');
// Route::get('/services', 'pagesController@services');
Route::get('/contact',  'pagesController@contact');
Route::get('/publication', 'pagesController@publication');
// Route::get('/people', 'pagesController@research');
// Route::get('/research', 'pagesController@people');

Route::resource('posts', 'PostsController');
Route::resource('profiles', 'ProController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/profiledash', 'DashboardController@index2');
