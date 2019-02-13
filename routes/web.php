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

Route::get('/','RoomController@availableRooms')->name('available');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('allocations', 'AllocationController');
Route::resource('people', 'PersonController');
Route::get('people/{id}/allot','PersonController@allotRoom')->name('allot');
Route::resource('rooms', 'RoomController');
Route::get('/example',function (){
    return view('layouts.main');
});