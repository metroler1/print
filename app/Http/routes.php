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
	Route::get('/', function (){
        return redirect('/cartridge/show');
    });

	Route::group(array('prefix' => 'printer'), function()
	{
		Route::get('show', 'PrinterController@index');
		Route::patch('show', 'PrinterController@index');
		Route::get('show/{id}', 'PrinterController@show');
		Route::get('show/{id}/edit', 'PrinterController@edit');
		Route::patch('show/{id}', 'PrinterController@update');

	});

	Route::group(array('prefix' => 'cartridge'), function()
	{
		Route::get('show', 'CatridgeController@index');
        Route::patch('show', 'CatridgeController@index');
		Route::get('show/{id}', 'CatridgeController@show');
		Route::get('show/{id}/edit', 'CatridgeController@edit');
		Route::patch('show/{id}', 'CatridgeController@update');
		Route::post('show', 'CatridgeController@getCatridgesFromMaster');


		Route::get('check', 'CheckController@index');
		Route::get('check/show/{id}', 'CheckController@show');
		Route::get('check/add', 'CheckController@add');
		Route::post('check/add', 'CheckController@store');
		Route::patch('check/add', 'CheckController@giveData');
	});

    Route::group(array('prefix' => 'statistics'), function()
    {
        Route::get('/', 'StatisticsController@index');
        Route::post('/', 'StatisticsController@index');
    });

    Route::group(array('prefix' => 'wifi'), function()
    {
        Route::get('/', 'WifiController@index');
    });


//!!!!!!admin_panel!!!!!!!!!
	Route::group(array('prefix' => 'manager'), function()
	{
		Route::get('/', function() {
			return view('backend.index');
		});


        Route::resource('type', 'Backend\TypeController');
		

		Route::get('addmanifacture', 'ManifactureController@add');
		Route::post('addmanifacture', 'ManifactureController@store');

        Route::resource('printer', 'Backend\PrinterController');


        Route::group(array('prefix' => 'cartridge'), function(){
            Route::resource('/', 'Backend\CartridgeController');
            Route::resource('service', 'Backend\TypeOfServiceOnCartridgeController');
        });


		Route::group(array('prefix' => 'place'), function()
		{
			Route::get('add', 'PlaceController@add');
			Route::post('add', 'PlaceController@store');
		});

        Route::resource('master', 'Backend\MasterController');

        Route::group(array('prefix' => 'office'), function () {
            Route::resource('/', 'Backend\OfficeController');
            Route::get('/{id}', 'Backend\OfficeController@show');
            Route::get('/{id}/edit', 'Backend\OfficeController@edit');
        });


        Route::group(array('prefix' => 'papers'), function() {
            Route::get('xml', 'Backend\PaperCountersController@importExport');
            Route::post('importExcel', 'Backend\PaperCountersController@importExcel');
            Route::resource('/', 'Backend\PaperCountersController');
        });


	});

});
