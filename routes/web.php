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
    Route::get('/ec/{arg?}','EclabController@index');
});

Route::get('posts/{post?}/comments/{comment?}', 'App\Http\Controllers\PostCommentTest@pctest');

Route::middleware(['auth'])->group(function(){
});

Route::resource('posts', 'App\Http\Controllers\PostController');
