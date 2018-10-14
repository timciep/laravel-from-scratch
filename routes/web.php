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

Route::get('/', 'PagesController@home');

Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');

Route::get('/projects', 'ProjectsController@index');
Route::post('/projects', 'ProjectsController@store');
Route::get('/projects/create', 'ProjectsController@create');

// Route::get('/projects/{project}', 'ProjectsController@show'); // get project by id
// Route::get('/projects/{project}/edit', 'ProjectsController@edit'); // edit a project
// Route::patch('/projects/{project}', 'ProjectsController@update'); // update existing project
// Route::delete('/projects/{project}', 'ProjectsController@destroy');