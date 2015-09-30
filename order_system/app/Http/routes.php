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
    return view('home');
});
//Ajax customer search routes
Route::post('customer/search', array('as' => 'customer.search', 'uses' =>
'CustomerController@search'));
//Login page route
//Temporary until controller is created, testing layout styles
Route::get('/login', function () {
    return view('login');
});

//temp route for order page creation
Route::get('/order/create', function () {
    return view('order');
});

//Admin panel Route
Route::resource('admin', 'AdminController');
Route::resource('menu', 'MenuController');
Route::resource('customers', 'CustomerController');
