<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
# Buy
Route::get('buy', ['as'=>'buy', 'uses'=>'BuyController@index']);
Route::post('buy', 'BuyController@buy');

#First Page Index, Home
Route::get('/', ['as'=>'home', 'uses'=>'PagesController@home']);

# System Routes
Route::resource('categories','CategoriesController');
Route::resource('borders','BordersController');
Route::resource('uploads','UploadsController');
Route::post('process',['as'=>'process', 'uses'=>'UploadsController@process']);
Route::get('control',['as'=>'control', 'uses'=>'ControlController@control']);
Route::get('loadimage/{border}',['as'=>'loadimage', 'uses'=>'UploadsController@loadimage']);
Route::get('deleteimage/{border}',['as'=>'deleteimage', 'uses'=>'UploadsController@deleteimage']);

# Cart
Route::get('cart',['as'=>'cart', 'uses'=>'CartController@index']);
Route::get('addtocart',['as'=>'addtocart', 'uses'=>'CartController@addtocart']);
Route::get('deletecart',['as'=>'deletecart', 'uses'=>'CartController@deletecart']);
Route::post('deleteitem',['as'=>'deleteitem', 'uses'=>'CartController@deleteitem']);
Route::post('additem', ['as'=>'additem', 'uses'=>'CartController@additem']);
Route::post('updateshipping', ['as'=>'updateshipping', 'uses'=>'CartController@updateshipping']);

# Authentication
Route::resource('sessions', 'SessionsController', ['only'=>['create', 'store', 'destroy']]);
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

# Registration
Route::get('/register', 'RegistrationController@create');
Route::post('/register', ['as'=>'registration.store', 'uses'=>'RegistrationController@store']);

# Orders
Route::resource('orders', 'OrdersController');

# Authentication
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
# Profile
Route::resource('profile', 'ProfilesController');
Route::get('/{profile}', 'ProfilesController@show');
Route::post('/{profile}', array(
    'as' => 'profile.store',
    'uses' => 'ProfilesController@store'
));
# Addresses
Route::get('addresses/{user}/create', ['as'=>'addresses.create', 'uses'=>'AddressesController@create']);
Route::post('addresses/{user}/store', ['as'=>'addresses.store', 'uses'=>'AddressesController@store']);
Route::get('addresses/{user}/show', 'AddressesController@show');
Route::get('addresses/{user}/edit',['as'=>'addresses.edit', 'uses'=>'AddressesController@edit'] );


# Products
Route::resource('products', 'ProductsController');
Route::get('/product/{id}', array('as'=>'product', 'uses'=>'ProductsController@show'));





