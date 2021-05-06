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
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('create', 'Admin\GuitarController@add');
    Route::post('create', 'Admin\GuitarController@create');
    Route::get('mypage', 'Admin\GuitarController@mypage');
    Route::get('playing', 'Admin\GuitarController@playing');
});
// コードは誰でも見せられる
Route::get('admin/cord', 'Admin\GuitarController@cord');

// ホームページだからauth必要ない
Route::get('admin/home', 'Admin\GuitarController@home');

// メールから仮登録しているルーティング
Route::post('register/pre_check', 'Auth\RegisterController@pre_check')->name('register.pre_check');

// 本登録へ追加ルーティング
Route::get('register/verify/{token}', 'Auth\RegisterController@showForm');

// 本登録確認ルーティング
Route::post('register/main_check', 'Auth\RegisterController@mainCheck')->name('register.main.check');

// 本会員登録ができるルーティング
Route::post('register/main_register', 'Auth\RegisterController@mainRegister')->name('register.main.registered');

Route::get('/', function() {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
