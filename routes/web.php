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


//Route::resource('views', 'PageController');

Route::resource('projects', 'ProjectsController');



Route::get('/', 'PageController@home');

Route::get('/about', 'PageController@about');

Route::get('/contact', 'PageController@contact');

Route::get('/projects/index', 'ProjectsController@index');

Route::get('/projects/create', 'ProjectsController@create');

Route::post('/projects', 'ProjectsController@store');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');

Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');
