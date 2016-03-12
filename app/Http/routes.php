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

Route::group(['middleware' => ['web']], function () {

  Route::get('/', function () {
      return redirect('hotels');
  });


  Route::get('hotels', 'HotelsController@index');
  Route::get('hotels/{hotel}', 'HotelsController@show');
  Route::get('bedrooms/{bedroom}/edit', 'BedroomsController@edit');
  Route::patch('hotels/{bedroom}', 'BedroomsController@update');
  Route::delete('bedrooms/{bedroom}', 'BedroomsController@delete');
  Route::post('hotels/{hotel}', 'BedroomsController@store');
});
