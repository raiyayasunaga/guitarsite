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
    Route::get('home', 'Admin\GuitarController@home');
    // ルートの設定
    Route::post('create', 'Admin\GuitarController@create');
    Route::get('mypage', 'Admin\GuitarController@mypage');
    Route::get('playing', 'Admin\GuitarController@playing')->name('admin.playing');
    // ギターコードの表示設定
    Route::post('home', 'Admin\GuitarController@vue')->name('admin.vue');
    Route::get('delete', 'Admin\GuitarController@delete');
    Route::get('profile', 'Admin\GuitarController@profile');

    // 編集と更新
    Route::get('mypageedit', 'Admin\GuitarController@edit');
    Route::post('mypageedit', 'Admin\GuitarController@update');
});



// コードは誰でも見せられる
Route::get('admin/cord', 'Admin\GuitarController@cord');


// メールから仮登録しているルーティング
Route::post('register/pre_check', 'Auth\RegisterController@pre_check')->name('register.pre_check');

// 本登録へ追加ルーティング
Route::get('register/verify/{token}', 'Auth\RegisterController@showForm');

// 本登録確認ルーティング
Route::post('register/main_check', 'Auth\RegisterController@mainCheck')->name('register.main.check');

// 本会員登録ができるルーティング
Route::post('register/main_register', 'Auth\RegisterController@mainRegister')->name('register.main.registered');

Route::get('/', function() {
    return view('admin.cord');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
