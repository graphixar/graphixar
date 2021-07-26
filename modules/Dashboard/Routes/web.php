<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin dashboard routes for your application.
| These routes are loaded by the AdminServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('web')->namespace('Modules\\Dashboard\\Http\\Controllers')->prefix('admin')->group(function (){
    Route::get('dashboard' , 'DashboardController@index');
});



