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

Route::get('/', 'HomeController@home')->name('home');

Route::get('/jobs/{part_url}', 'JobController@showDetailJobs')->where(['part_url' => '[a-zA-Z0-9_-]+']);
Route::get('/jobs-category/{part_url}', 'JobController@showListsItemBySlug')->where(['part_url' => '[a-zA-Z0-9_-]+']);
Route::get('/search', 'SearchJobsController@searchShowResult')->name('search_jobs');