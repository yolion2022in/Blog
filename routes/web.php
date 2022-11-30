<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;    //使用action路由必須

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

Route::get('/', function () {   //Closure Function
    return view('welcome');
});



Route::prefix('/users')->group(function(){
    Route::get('{id?}','App\Http\Controllers\UserController@show');
    Route::get('/','App\Http\Controllers\UserController@show');
});

/*
Route::get('posts/{post}/comments/{comment}', function($post,$comment){
    return "posts $post , comments $comment";
});
*/



Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('login/{id?}','SiteController@login');
    Route::get('/hello','SiteController@hello');
    Route::get('showGallery','SiteController@showGallery');
    Route::get('/demo', 'SiteController@demo');
});

Route::get('posts/{post?}/comments/{comment?}', 'App\Http\Controllers\PostCommentTest@pctest');

Route::middleware(['auth'])->group(function(){
});

Route::resource('posts', 'App\Http\Controllers\PostController');

Route::resource('items', 'App\Http\Controllers\ItemController');



//url路由實驗
Route::get('gy', function(){
    return view('gallery');
})->name('mygy');

Route::get('/url', function(){
    // return url('gy');   //method 1 一般路由
    // return url('mygy'); //method 2 名稱路由
    /*
        method 3 action路由，需 use App\Http\Controllers\SiteController; 
        ，否則會報錯：Action SiteController@demo not defined.
    */
    return action([SiteController::class, 'demo']);


    // return url()->current();
    // return url()->full();
    // return url()->previous();
});


// Route::post('/items', 'App\Http\Controllers\ItemController@store');