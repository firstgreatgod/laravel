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

/*

    GET /Projects(index)
    GET /Projects/create(create)
    GET /Projects/1(show)
    GET /Projects(store)
    GET /Projects/1/edit(edit)
    PATCH /Projects/1(update)
    DELETE/projects/1(destroy)
*/

use App\Repositories\UserRepository;


Route::get('/', function (UserRepository $users) {
    dd($users);
    return view('welcome');
});

Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks','ProjectTasksController@store');


Route::post('/completed-tasks/{task}','CompletedTasksController@store');
Route::delete('/completed-tasks/{task}','CompletedTasksController@destroy');
