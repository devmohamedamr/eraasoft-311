<?php

use App\Http\Controllers\home;
use App\Http\Controllers\user;
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

Route::group(['prefix'=>"category","middleware"=>"auth"],function(){
    Route::get('/',[home::class,"index"]);
    Route::get('create',[home::class,"create"])->middleware("admin");
    Route::post('store',[home::class,"store"]);
    Route::get('delete/{id}',[home::class,"delete"]);
    Route::get('edit/{id}',[home::class,"edit"]);
    Route::post('update',[home::class,"update"]);
});

Route::get('/login',[user::class,"login"])->name("login");

Route::post('/loginrequest',[user::class,"loginrequest"]);

Route::get('/logout',[user::class,"logout"]);

