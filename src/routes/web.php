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

// welcomeページを表示
Route::view('/', 'welcome');

// Ageデータベースからageを取り出しドロップダウンメニューに反映。
Route::get('/front/index','FrontController@index');

Route::post('/front/index','FrontController@index_second');

Route::post('/front/confirm','FrontController@confirm');

// 勉強の為、下記をコマンドアウトした。
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
