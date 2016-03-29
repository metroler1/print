<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/', function() {
//	return redirect('login');
//});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::auth();
	Route::get('/', 'DashboardController@index');
//	Route::get('/home', 'HomeController@index');

	Route::group(array('prefix' => 'printer'), function()
	{
		Route::get('show', 'PrinterController@index');
		Route::get('show/{id}', 'PrinterController@show');

//		Route::post('printerajax', 'PrinterController@moveElementsAjax');
	});
	Route::group(array('prefix' => 'catridge'), function()
	{
		Route::get('show', 'CatridgeController@index');
		Route::get('show/{id}', 'CatridgeController@show');

	});
//!!!!!!admin_panel!!!!!!!!!
	Route::group(array('prefix' => 'manager'), function()
	{
		Route::get('/', function() {
			return view('backend.index');
		});

		Route::get('add', 'TypeController@add');
		Route::post('add', 'TypeController@store');

		Route::get('addmanifacture', 'ManifactureController@add');
		Route::post('addmanifacture', 'ManifactureController@store');


		Route::get('addprinter', 'PrinterController@add');
		Route::post('addprinter', 'PrinterController@store');

		Route::get('addcatridge', 'CatridgeController@add');
		Route::post('addcatridge', 'CatridgeController@store');

		Route::group(array('prefix' => 'place'), function()
		{
			Route::get('add', 'PlaceController@add');
			Route::post('add', 'PlaceController@store');
		});

		Route::group(array('prefix' => 'master'), function()
		{
			Route::get('add', 'MasterController@add');
			Route::post('add', 'MasterController@store');
		});

	});

});
//Route::get('/home', 'HomeController@index');