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

// Route::get('/', function () {
//     return view('layouts.login');
// });

Auth::routes();
Route::group(['prefix'=>'user','namespace'=>'users'],function(){
    Route::get('login', 'loginController@getLogin')->name('get.admin.login');
    // Route::post('login', 'LoginControllerAdmin@Login')->name('admin.login');
});



Route::get('Users/home', 'HomeController@index')->name('home');


