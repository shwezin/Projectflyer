<?php


Route::get('/', function () {
	return view('pages.home');
});

<<<<<<< HEAD

Route::group(['middleware' => ['web']], function () {
    Route::resource('flyers', 'FlyersController');

=======


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
	Route::resource('flyers','FlyerController');
>>>>>>> a90c3c10c32f413b18963fa6aa6f5e4029d48ca0
});
