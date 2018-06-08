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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[
	'as' => 'index',
	'uses' => 'PageController@index'
]);
Route::get('data',[
	'as' => 'data',
	'uses' => 'PageController@data'
]);
// Route::get('',[
// 	'as' => '',
// 	'uses' => ''
// ]);

// Catology
Route::resource('catelogy','CatelogyController');
// Product
Route::resource('product','ProductController');

// Route::get('addcatology',[
// 	'as' => 'add-catology',
// 	'uses' => 'CatologyController@create'
// ]);
// Route::post('storecatology',[
// 	'as' => 'store-catology',
// 	'uses' => 'CatologyController@store'
// ]);
// Route::get('editcatology',[
// 	'as' => 'update-catology',
// 	'uses' => 'CatologyController@edit'
// ]);
// Route::post('updatecatology',[
// 	'as' => 'update-catology',
// 	'uses' => 'CatologyController@update'
// ]);

// Product

// Route::get('addproduct',[
// 	'as' => 'add-product',
// 	'uses' => 'ProductController@create'
// ]);
// Route::post('storecatology',[
// 	'as' => 'store-product',
// 	'uses' => 'ProductController@store'
// ]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
