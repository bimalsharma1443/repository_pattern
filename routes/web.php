<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'CustomerController@index')->name('customer.list');
Route::get('/customer/{id}', 'CustomerController@getCustomer')->name('customer.view');
Route::get('/customer/{id}/edit', 'CustomerController@editCustomer')->name('customer.edit');
Route::get('/customer/{id}/delete', 'CustomerController@deleteCustomer')->name('customer.delete');
