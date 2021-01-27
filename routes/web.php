<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RestaurantController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->namespace('App\Http\Controllers')->group(function() {
    Route::get('Restaurants', 'Admin\RestaurantController@index')->name('restaurant.index');
    Route::get('Restaurants/new', 'Admin\RestaurantController@new')->name('restaurant.new');
    Route::post('Restaurants/store', 'Admin\RestaurantController@store')->name('restaurant.store');
    Route::get('Restaurants/edit/{restaurant}', 'Admin\RestaurantController@edit')->name('restaurant.edit');
    Route::post('Restaurants/update/{id}', 'Admin\RestaurantController@update')->name('restaurant.update');
    Route::get('Restaurants/delete/{id}', 'Admin\RestaurantController@delete')->name('restaurant.delete');
});
