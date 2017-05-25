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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', ['as' => 'app.admin.users.index', 'uses' => 'VRUsersController@adminIndex']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'VRUsersController@adminShow']);
            Route::get('/edit', ['as' => 'app.admin.users.edit', 'uses' => 'VRUsersController@adminEdit']);
            Route::post('/edit', ['uses' => 'VRUsersController@adminUpdate']);
            Route::delete('/', ['as' => 'app.admin.users.showDelete', 'uses' => 'VRUsersController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'order'], function () {
        Route::get('/create', ['as' => 'app.user.create', 'uses' => 'VRUsersController@userCreate']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'VRUsersController@adminShow']);
            Route::get('/edit', ['as' => 'app.admin.users.edit', 'uses' => 'VRUsersController@adminEdit']);
            Route::post('/edit', ['uses' => 'VRUsersController@adminUpdate']);
            Route::delete('/', ['as' => 'app.admin.users.showDelete', 'uses' => 'VRUsersController@adminDestroy']);
        });
    });
});

