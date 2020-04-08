<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TasksController@index');
Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/create', 'TasksController@create');

Route::post('/tasks', 'TasksController@store');
