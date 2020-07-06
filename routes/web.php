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

Route::get('/', function () {
    return redirect(route('login'));
});

Auth::routes();

// MAIN DASHBOARD ROUTE
Route::get('/dashboard', 'ShowDashboard')->name('dashboard');

// COURSES OVERVIEW
Route::get('/courses', 'CoursesController@index')->middleware('auth')->name('course.index');

// MODULES
Route::get('/modules', 'ModulesController@index')
    ->middleware('auth')
    ->name('module.index');

Route::get('/modules/{id}', 'ModulesController@show')->middleware('auth')->name('module.show');
Route::put('/modules/{module}', 'ModulesController@update')->middleware('auth')->name('module.update');
Route::get('/modules/fetch/{id}', 'ModulesController@fetchData');

// MARK ASSIGNMENT AS DONE
Route::put('/assignments/{assignment}', 'AssignmentsController@markAsDone');
