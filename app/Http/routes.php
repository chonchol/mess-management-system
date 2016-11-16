<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

	Route::auth();
// Check role in route middleware
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'roles'], 'roles' => 'admin'], function () {
	Route::get('/', 'Admin\AdminController@index');
	Route::get('/give-role-permissions', 'Admin\AdminController@getGiveRolePermissions');
	Route::post('/give-role-permissions', 'Admin\AdminController@postGiveRolePermissions');
	Route::resource('/roles', 'Admin\RolesController');
	Route::resource('/permissions', 'Admin\PermissionsController');
	Route::resource('/users', 'Admin\UsersController');
});

Route::group(['prefix' => 'meal', 'middleware' => ['auth', 'roles'], 'roles' => 'member'], function () {
	Route::get('/', 'Meal\MealController@index');
	Route::get('/add', 'Meal\MealController@create');
	Route::post('/save', 'Meal\MealController@store');


});

Route::get('/home', 'HomeController@index');

