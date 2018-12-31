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

Route::get('test-public-channel', function(){
    broadcast(new \App\Events\ExampleEvent);
});
Route::get('test-private-channel', function(){
    broadcast(new \App\Events\PrivateEvent( \Auth()->user() ));
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
