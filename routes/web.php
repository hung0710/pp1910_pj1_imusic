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
Route::get('/', function(){
	return view('web.index');
});

Route::group(['namespace' => 'Auth'], function () {
    Route::get('/register', 'RegisterController@show')->name('register');
    Route::post('/register', 'RegisterController@register');
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::get('/logout', 'LogoutController@logout')->name('logout');
    Route::get('/changepassword', 'ChangePasswordController@index');
    Route::post('/changepassword', 'ChangePasswordController@ChangePassword')->name('changepassword');
});

Route::get('/', 'HomeController@index')->name('index');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::group(['namespace' => 'Web'], function () {
    Route::resource('/allsong','SongnewController');
    Route::group(['prefix' => '/artists', 'as' => 'artists.'], function () {
        Route::get('/', 'ArtistsController@index')->name('index');
        Route::get('/{artists_id}/songs', 'ArtistsController@songs')->name('songs');
    });
    Route::group(['prefix' => '/album', 'as' => 'album.'], function () {
        Route::get('/', 'AlbumController@index')->name('index');
        Route::get('/{album_id}/songs', 'AlbumController@songs')->name('songs');
    });
});
