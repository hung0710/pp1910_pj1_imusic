<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin', 'as' => 'admin.'], function () {
    Route::group(['namespace' => 'Auth', 'as' => 'auth.'], function () {
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::get('/logout', 'LogoutController@logout')->name('logout');
    });

    Route::group(['namespace' => 'Album','as' => 'album.', 'prefix' => '/albums'], function () {
        Route::get('/', 'AlbumController@index')->name('index');
        Route::get('/create', 'AlbumController@create')->name('create');
        Route::post('/create', 'AlbumController@store');
        Route::get('/{album_id}/edit', 'AlbumController@edit')->name('edit');
        Route::post('/{album_id}/update', 'AlbumController@update')->name('update');
        Route::get('/{album_id}/delete', 'AlbumController@destroy')->name('delete');
    });

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/', 'HomeController@index')->name('index');
        Route::get('/index', 'HomeController@index')->name('index');
    });
}); 