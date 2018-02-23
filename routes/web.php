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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', [
	'uses' => 'TestController@index'
	]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Dashboard section
Route::get('/dashboard', [
	'uses' => 'HomeController@getDashboard',
	'as' => 'dashboard',
	//'middleware' => 'auth'
	]);
Route::get('/subscriber', [
	'uses' => 'HomeController@getSubscriber',
	'as' => 'subscriber',
	'middleware' => 'auth'
	]);	
Route::post('/subscriber', [
	'uses' => 'HomeController@postSubscriber',
	'as' => 'subscriber',
	'middleware' => 'auth'
	]);		