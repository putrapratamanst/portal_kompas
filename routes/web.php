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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'ArticleController@indexDashboard')->name('home')->middleware('auth');;
Route::get('/', 'ArticleController@index')->name('blog');

Route::GET('article/{id}', 'ArticleController@detail')->middleware('auth');
Route::GET('article/edit/{id}', 'ArticleController@edit')->middleware('auth');
Route::PUT('article/update/{id}', 'ArticleController@update')->middleware('auth');;
Route::PATCH('article/change/{id}', 'ArticleController@changeStatus')->middleware('auth');;
Route::GET('article/create', 'ArticleController@create')->name('create')->middleware('auth');;
Route::POST('article/insert', 'ArticleController@insert')->middleware('auth');;
Route::DELETE('article/delete/{id}', 'ArticleController@delete')->middleware('auth');;

