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
        Route::get('/list', 'JobController@index')->name('jobs_list');
        Route::get('/check-view', 'JobController@checkView')->name('check_view');

        Route::get('/add', 'JobController@create')->name('jobs_add');
        Route::post('/add', 'JobController@store')->name('jobs_store');

        Route::get('/edit/{id}', 'JobController@edit')->name('jobs_edit');
        Route::post('/edit/{id}', 'JobController@update')->name('jobs_edit_store');

        Route::get('/delete/{id}', 'JobController@destroy')->name('jobs_delete');

        Route::post('/search', 'JobController@search')->name('search_jobs');
    });

    Route::prefix('category-jobs')->group(function () {
        Route::get('/list', 'CategoryController@index')->name('category_jobs_list');
        Route::get('/check-view', 'CategoryController@checkView')->name('check_cat_job_view');

        Route::get('/add', 'CategoryController@create')->name('category_jobs_add');
        Route::post('/add', 'CategoryController@store')->name('category_jobs_store');

        Route::get('/edit/{id}', 'CategoryController@edit')->name('category_jobs_edit');
        Route::post('/edit/{id}', 'CategoryController@update')->name('category_jobs_update');

        Route::get('/delete/{id}', 'CategoryController@destroy')->name('category_jobs_delete');
    });
});
