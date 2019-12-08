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
// Route::get('/front/index','FrontController@index');

Route::post('/front/index','FrontController@index_second');

Route::post('/front/confirm','FrontController@confirm');

// 勉強の為、下記をコマンドアウトした。
// Auth::routes();
Route::get('system/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('system/login', 'Auth\LoginController@login');
Route::post('system/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('system/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('system/register', 'Auth\RegisterController@register');

Route::get('system/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('system/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('system/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('system/password/reset', 'Auth\ResetPasswordController@reset');

Route::get('system/answer/index', 'AnswerController@index');

Route::get('/home', 'HomeController@index')->name('home');
