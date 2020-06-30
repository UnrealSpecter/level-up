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
    return View::component('Dashboard');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/dashboard', 'DashboardController@index')->name('dashboard-page');
// Route::get('/dashboard/modules/{id}', 'DashboardController@show')->name('module-page');

Route::get('/modules', 'ModulesController@index')->name('module.index');
Route::get('/modules/{id}', 'ModulesController@show')->name('module.show');
Route::put('/modules/{module}', 'ModulesController@update')->name('module.update');
Route::get('/modules/fetch/{id}', 'ModulesController@fetchData');

Route::get('/assignments/', 'AssignmentsController@index');
Route::get('/assignments/{id}', 'AssignmentsController@show');
Route::put('/assignments/{id}', 'AssignmentsController@update');
// Route::get('/events/create', 'EventsController@create');
// Route::post('/events', 'EventsController@store');
// Route::get('/events/{event}/edit', 'EventsController@edit');
// Route::delete('/events/{event}', 'EventsController@destroy');
