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

Route::get('/', function(){return view('guest.welcome');});

Route::get('/trip', 'GuestController@trip');
Route::get('/trip/order/{ray}/{id}', 'GuestController@orderTrip');
Route::post('/trip/order/{ray}/{id}', 'GuestController@saveOrderTrip');
Route::get('order-success/{id}', 'GuestController@orderSuccess');

Route::get('/private', 'GuestController@private');
Route::get('/private/order/{ray}/{id}', 'GuestController@orderPrivate');
Route::post('/private/order/{ray}/{id}', 'GuestController@saveOrderPrivate');

Route::get('/family', function(){return view('guest.coming_soon');});
Route::get('/island', function(){return view('guest.coming_soon');});
Route::get('/adventure', function(){return view('guest.coming_soon');});
Route::get('/about', function(){return view('guest.coming_soon');});
Route::get('/gallery', 'GuestController@gallery');

Auth::routes();

Route::get('admin', 'AdminController@index')->name('home');
Route::get('admin/notification','AdminController@notification');

Route::get('admin/order', 'AdminController@order');
Route::post('admin/order/take/{id}', 'AdminController@takeOrder');

Route::get('admin/payment', 'AdminController@payment');
Route::get('admin/payment/print/{id}', 'AdminController@printPayment');

Route::get('admin/driver', 'AdminController@driver');
Route::post('admin/driver/store', 'AdminController@storeDriver');
Route::post('admin/driver/update/{id}', 'AdminController@updateDriver');
Route::get('admin/driver/destroy/{id}', 'AdminController@destroyDriver');

Route::get('admin/travel', 'AdminController@travel');
Route::get('admin/travel/print/{id}', 'AdminController@printTravel');

Route::get('admin/gallery', 'AdminController@indexGallery');
Route::post('admin/gallery/store', 'AdminController@storeGallery');
Route::get('admin/gallery/destroy/{id}', 'AdminController@destroyGallery');
Route::post('admin/gallery/update/{id}', 'AdminController@updateGallery');
