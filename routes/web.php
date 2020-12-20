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


Route::get('/', function () {
    return view('home');
});

// accounts
Route::get('/accounts', 'AccountsController@index');
Route::get('/accounts/create', 'AccountsController@create');
// Route::get('/accounts/{product}', 'AccountsController@show');
Route::post('/accounts', 'AccountsController@store');
Route::delete('/accounts/{account}', 'AccountsController@destroy');
Route::get('/accounts/{account}/edit', 'AccountsController@edit');
Route::patch('/accounts/{account}', 'AccountsController@update');

// treasures
Route::get('/treasures', 'TreasuresController@index');
Route::get('/accounts/create', 'AccountsController@create');
// Route::get('/accounts/{product}', 'AccountsController@show');
Route::post('/accounts', 'AccountsController@store');
Route::delete('/accounts/{account}', 'AccountsController@destroy');
Route::get('/accounts/{account}/edit', 'AccountsController@edit');
Route::patch('/accounts/{account}', 'AccountsController@update');





//products
Route::get('/Submits', 'SubmitsController@index');
Route::get('/Submits/create', 'SubmitsController@create');
Route::get('/Submits/{product}', 'SubmitsController@show');
Route::post('/Submits', 'SubmitsController@store');
Route::delete('/Submits/{product}', 'SubmitsController@destroy');
Route::get('/Submits/{product}/edit', 'SubmitsController@edit');
Route::patch('/Submits/{product}', 'SubmitsController@update');