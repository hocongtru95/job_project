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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index');

    Route::prefix('/jobs')->group(function () {
        Route::get('/list', 'JobsController@index')->name('jobs_list');

        Route::get('/add', 'JobsController@create')->name('jobs_add');
        Route::post('/add', 'JobsController@store')->name('jobs_store');

        Route::get('/edit', 'JobsController@edit')->name('jobs_edit');

    });
});
