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

Route::get('/', function () {
	return redirect('/login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->middleware('auth');
Route::get('/profile', 'HomeController@profile')->middleware('auth');

Route::group(['prefix' => 'employee'],function(){
	Route::any('/add-employee','backend\EmployeeController@create');
	Route::any('/view-employee','backend\EmployeeController@index');

});
