<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin', 'as' => 'admin.'], function () {
    Route::group(['namespace' => 'Auth', 'as' => 'auth.'], function () {
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::get('/logout', 'LogoutController@logout')->name('logout');
    });

    Route::group(['as' => 'album.', 'prefix' => '/albums'], function () {
        Route::get('/', 'AlbumController@index')->name('index');
        Route::get('/create', 'AlbumController@create')->name('create');
        Route::post('/create', 'AlbumController@store');
        Route::get('/{album_id}/edit', 'AlbumController@edit')->name('edit');
        Route::post('/{album_id}/update', 'AlbumController@update')->name('update');
        Route::get('/{album_id}/delete', 'AlbumController@destroy')->name('delete');
    });

    Route::group(['as' => 'category.', 'prefix' => '/category'], function () {
        Route::get('/', 'CategoryController@index')->name('index');
        Route::get('/create', 'CategoryController@create')->name('create');
        Route::post('/create', 'CategoryController@store');
        Route::get('/{category_id}/edit', 'CategoryController@edit')->name('edit');
        Route::post('/{category_id}/update', 'CategoryController@update')->name('update');
        Route::get('/{category_id}/delete', 'CategoryController@destroy')->name('delete');
    });

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/', 'HomeController@index')->name('index');
        Route::get('/index', 'HomeController@index')->name('index');
    });

    Route::group(['as' => 'song.', 'prefix' => '/songs'], function () {
        Route::get('/', 'SongController@index')->name('index');
        Route::get('/create', 'SongController@create')->name('create');
        Route::post('/create', 'SongController@store');
        Route::get('/{song_id}/edit', 'SongController@edit')->name('edit');
        Route::post('/{song_id}/update', 'SongController@update')->name('update');
        Route::get('/{song_id}/delete', 'SongController@destroy')->name('delete');
    });
}); 