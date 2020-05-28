<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin', 'as' => 'admin.'], function () {
    Route::group(['namespace' => 'Auth', 'as' => 'auth.'], function () {
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::get('/logout', 'LogoutController@logout')->name('logout');
    });

    Route::group(['as' => 'category.', 'prefix' => '/category'], function () {
        Route::get('/', 'CategoryController@index')->name('index');
        Route::get('/create', 'CategoryController@create')->name('create');
        Route::post('/create', 'CategoryController@store');
        Route::get('/{category_id}/edit', 'CategoryController@edit')->name('edit');
        Route::post('/{category_id}/update', 'CategoryController@update')->name('update');
        Route::get('/{category_id}/delete', 'CategoryController@destroy')->name('delete');
    });

    Route::group(['as' => 'song.', 'prefix' => '/song'], function () {
        Route::get('/', 'SongController@index')->name('index');
        Route::get('/create', 'SongController@create')->name('create');
        Route::post('/create', 'SongController@store');
        Route::get('/{song_id}/edit', 'SongController@edit')->name('edit');
        Route::post('/{song_id}/update', 'SongController@update')->name('update');
        Route::get('/{song_id}/delete', 'SongController@destroy')->name('delete');
    });

    Route::group(['as' => 'artists.', 'prefix' => '/artists'], function () {
        Route::get('/', 'ArtistsController@index')->name('index');
        Route::get('/create', 'ArtistsController@create')->name('create');
        Route::post('/create', 'ArtistsController@store');
        Route::get('/{artists_id}/edit', 'ArtistsController@edit')->name('edit');
        Route::post('/{artists_id}/update', 'ArtistsController@update')->name('update');
        Route::get('/{artists_id}/delete', 'ArtistsController@destroy')->name('delete');
    });

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/', 'HomeController@index')->name('index');
        Route::get('/index', 'HomeController@index')->name('index');
    });
}); 