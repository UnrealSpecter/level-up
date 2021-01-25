<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ShowLanding')
    ->middleware('guest')
    ->name('landing');

Route::get('login', 'LoginController@showLoginForm')
    ->name('login')
    ->middleware('guest');

Route::post('login', 'LoginController@login')
    ->name('login.attempt')
    ->middleware('guest');

Auth::routes();

Route::get('/dashboard', 'ShowDashboard')
    ->middleware('auth')
    ->name('dashboard');

Route::get('/courses', 'CoursesController@index')
    ->middleware('auth')
    ->name('course.index');


Route::get('/levels', 'LevelsController@index')
    ->middleware('auth')
    ->name('level.index');

Route::get('/modules/{id}', 'ModulesController@show')
    ->middleware('auth')
    ->name('module.show');

Route::get('/modules/fetch/{id}', 'ModulesController@fetchData')
    ->middleware('auth')
    ->name('module.fetch');

Route::put('/assignments/{assignment}', 'AssignmentsController@markAsDone')
    ->middleware('auth')
    ->name('assignment.complete');
