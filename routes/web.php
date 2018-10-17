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

Route::get('.well-known/acme-challenge/5XbncyfGkOAZizeedP7FW59qXddARJOqKKKT9NnwFnY', function () {
    return '5XbncyfGkOAZizeedP7FW59qXddARJOqKKKT9NnwFnY.afiEOhroSFWLh0vH7GO6GHJt3sWscU1IxaDZ1JLL6kU';
});
