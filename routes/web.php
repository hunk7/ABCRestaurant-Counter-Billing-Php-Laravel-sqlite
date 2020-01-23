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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/p/create','Datascontroller@create');
Route::get('/p/report','Datascontroller@report');
Route::get('/p/transaction','Datascontroller@transaction');
Route::get('/p/line','Datascontroller@line');
Route::get('/p/pie','Datascontroller@pie');
Route::post('/p','Datascontroller@store');

Route::get('/ABCRestaurant/{user}', 'ABCRestaurantController@index')->name('ABCRestaurant.show');
