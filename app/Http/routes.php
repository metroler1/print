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
        Route::resource('models', 'Backend\PrinterModelController');

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
		Route::get('check/show/{id}/{master}', 'CheckController@show');
		Route::get('check/add', 'CheckController@add');
		Route::post('check/add', 'CheckController@store');
		Route::patch('check/add', 'CheckController@giveData');
		
	});

    Route::group(array('prefix' => 'statistics'), function()
    {
//        Route::get('/', 'StatisticsController@index');
//        Route::post('/', 'StatisticsController@index');

        Route::post('price', 'StatisticsController@store');
        Route::get('price', 'StatisticsController@priceIndex');
        Route::get('price/api', 'StatisticsController@api');
        Route::get('paper', 'StatisticsController@paperIndex');
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
		

//		Route::get('manifacture', 'ManifactureController@add');
		Route::post('manifacture', 'Backend\ManifactureController@store');
		Route::get('manifacture', 'Backend\ManifactureController@index');

        Route::group(array('prefix' => 'printer'), function(){
            Route::resource('/', 'Backend\PrinterController');
            Route::get('{id}/edit', 'Backend\PrinterController@edit');
            Route::patch('show/{id}', 'Backend\PrinterController@update');
            Route::resource('models', 'Backend\PrinterModelController');
        });
//        Route::resource('printer', 'Backend\PrinterController');


        Route::group(array('prefix' => 'cartridge'), function(){
            Route::resource('/', 'Backend\CartridgeController');
            Route::get('{id}/edit', 'Backend\CartridgeController@edit');
            Route::patch('show/{id}', 'Backend\CartridgeController@update');
            Route::resource('service', 'Backend\TypeOfServiceOnCartridgeController');
            Route::resource('models', 'Backend\CartridgeModelController');
        });


		Route::group(array('prefix' => 'place'), function()
		{
			Route::get('add', 'PlaceController@add');
			Route::post('add', 'PlaceController@store');
		});

        Route::resource('master', 'Backend\MasterController');

        Route::group(array('prefix' => 'office'), function () {
            Route::resource('/', 'Backend\OfficeController');
//            Route::get('/{id}', 'Backend\OfficeController@show');
            Route::get('/{id}/rooms', 'Backend\RoomController@index');
            Route::get('/{id}/rooms/{room_id}', 'Backend\RoomController@show');
            Route::get('/{id}/rooms/{room_id}/edit', 'Backend\RoomController@edit');
            Route::post('/{id}/rooms', 'Backend\RoomController@store');
            Route::get('/{id}/edit', 'Backend\OfficeController@edit');
            Route::patch('/{id}/update', 'Backend\OfficeController@update');
        });


        Route::group(array('prefix' => 'papers'), function() {
            Route::get('xml', 'Backend\PaperCountersController@importExport');
            Route::post('importExcel', 'Backend\PaperCountersController@importExcel');
            Route::resource('/', 'Backend\PaperCountersController');
        });

        Route::group(array('prefix' => 'users'), function() {
            Route::get('/', 'Backend\UserController@index');
            Route::get('{id}/edit', 'Backend\UserController@edit');
            Route::patch('{id}', 'Backend\UserController@update');
            Route::get('create', 'Backend\UserController@create');
            Route::post('create', 'Backend\UserController@store');
        });

        Route::group(array('prefix' => 'printserver'), function() {
            Route::get('/', 'Backend\PrintServerController@index');
            Route::post('/', 'Backend\PrintServerController@store');
        });

        Route::get('systeminfo', function(){
           dd(phpinfo());
        });


	});

});
