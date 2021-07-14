<?php

use Illuminate\Http\Request;
use App\Http\Middleware\CheckAge;
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
    Route::get('create', function(Request $request) {
        return view('admin.create');
    })->name('admin.create');
    Route::get('home', 'Admin\GuitarController@home')->name('admin.home');
    // ルートの設定
    Route::post('create', 'Admin\GuitarController@create');
    Route::get('mypage', 'Admin\GuitarController@mypage')->name('admin.mypage');
    Route::get('playing', 'Admin\GuitarController@playing')->name('admin.playing');
    // ギターコードの表示設定
    Route::get('delete', 'Admin\GuitarController@delete')->name('admin.delete');

    // 編集と更新
    Route::get('musicedit', 'Admin\GuitarController@edit')->name('admin.edit');
    Route::post('musicedit', 'Admin\GuitarController@update')->name('user.cord');

    // 公開と非公開
    Route::get('open', 'Admin\GuitarController@open');
    Route::get('close', 'Admin\GuitarController@close');

    // プロフィールに関する
    Route::get('profileedit', 'Admin\ProfileController@edit')->name('user.image');
    // 一部変更になるはず
    Route::post('profileedit', 'Admin\ProfileController@update');

    // お気に入り設定
    Route::get('favorite', 'Admin\GuitarController@favorite')->name('admin.favorite');
    Route::post('favoritecreate', 'Admin\GuitarController@favoritecreate')->name('admin.favorite.create');
    Route::post('favoriteclear', 'Admin\GuitarController@favoriteclear');
    
});

Route::get('admin/age', function(Request $request) {
    return view('admin.age');
})->middleware('age');

// コードは誰でも見せられる
Route::get('admin/cord', 'Admin\GuitarController@cord')->name('admin.cords');


// メールから仮登録しているルーティング
Route::post('register/pre_check', 'Auth\RegisterController@pre_check')->name('register.pre_check');

// 本登録へ追加ルーティング
Route::get('register/verify/{token}', 'Auth\RegisterController@showForm');

// 本登録確認ルーティング
Route::post('register/main_check', 'Auth\RegisterController@mainCheck')->name('register.main.check');

// 本会員登録ができるルーティング
Route::post('register/main_register', 'Auth\RegisterController@mainRegister')->name('register.main.registered');

Route::get('/', function() {
    return view('auth/login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
