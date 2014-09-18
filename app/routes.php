<?php

// Route::get('/', function(){
//  $user = User::first();
// $user->assignRole(4);
//  return 'ok';
// });


// Route::get('/', function(){

	//return View::make('layouts.emailtest');

	// $user = Auth::user()->email;
	// dd($user);

// 	Mail::send('emails.test', [], function($message)
	
// 	{
// 	$message->to('muvera@gmail.com')->subject('Laracasts Email');
	// });


// $order = Order::findOrFail(2)->status()->attach(1);

// // $order = Order::first();


// // return $order->remove



//return $order->status()->first()->name;

// if($user->hasRole('')) return 'you are the owner';
// return 'you are not';

// });

// Route::get('reporting', function(){

// 	return 'secret place';

// })->before('role:root');

#First Page Index, Home
Route::get('/', ['as'=>'home', 'uses'=>'PagesController@home']);
Route::get('about', ['as'=>'about', 'uses'=>'PagesController@about']);
Route::get('contact', ['as'=>'contact', 'uses'=>'PagesController@contact']);
Route::get('policy', ['as'=>'policy', 'uses'=>'PagesController@policy']);
Route::get('halloween_2014', ['as'=>'halloween_2014', 'uses'=>'PagesController@halloween']);

# Administration
Route::get('admin', ['before' => 'role:owner', 'uses' => 'AdminController@index']);
Route::get('adminorderindex', ['before' => 'role:owner', 'as'=>'adminorderindex', 'uses' => 'AdminController@orderindex']);
Route::get('adminordershow/{id}', ['before' => 'role:owner', 'as'=>'adminordershow', 'uses' => 'AdminController@ordershow']);
Route::post('status', ['before' => 'role:owner', 'as'=>'status', 'uses' => 'AdminController@status']);
Route::get('printorder/{id}', ['before' => 'role:owner', 'as'=>'printorder', 'uses' => 'AdminController@printorder']);
//Route::resource('admin', 'AdminController');

Route::post('/', ['as'=>'changeRole', 'uses'=>'AdminController@changeRole']);


# Buy
Route::get('buy', ['as'=>'buy', 'uses'=>'BuyController@index']);
Route::post('buy', 'BuyController@buy');

# System Routes
Route::resource('categories','CategoriesController');
Route::resource('borders','BordersController');
Route::resource('uploads','UploadsController');
Route::post('process',['as'=>'process', 'uses'=>'UploadsController@process']);
# Control
Route::get('control/{id}',['as'=>'control', 'uses'=>'ControlController@control']);

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
Route::post('addresses/{user}/update', ['as'=>'addresses.update', 'uses'=>'AddressesController@update']);
Route::get('addresses/{user}/show', 'AddressesController@show');
Route::get('addresses/{user}/edit',['as'=>'addresses.edit', 'uses'=>'AddressesController@edit'] );


# Products
Route::resource('products', 'ProductsController');
Route::get('/product/{id}', array('as'=>'product', 'uses'=>'ProductsController@show'));







