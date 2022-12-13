<?php

use App\Models\Cgy;
use App\Models\Article;
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

Route::resource('articles', 'App\Http\Controllers\ArticleController');
Route::resource('cgies', 'App\Http\Controllers\CgyController');




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


Route::get('/newcgy', function(){
    /* 方法一
    $cgy = new Cgy;

    $cgy->subject = '我的英雄學院';
    $cgy->desc = '我的英雄學院劇場版';
    $cgy->enabled = true;
    */

    //方法二
    //需搭配 app\Models\Cgy.php 設定黑白名單，
    //否則會報錯：Illuminate\Database\Eloquent\MassAssignmentException
    //Add [subject] to fillable property to allow mass assignment on [App\Models\Cgy].
    $cgy = new Cgy([
        'subject'=>'我的英雄學院2',
        'desc' => '我的英雄學院劇場版2',
        'enabled' => true
    ]);


    $cgy->save();
    
});


Route::get('/distinct',function(){
    // $data = Article::select('cgy_id')->get();
    // $data = Article::select('cgy_id')->distinct('cgy_id')->get();
    $data = Article::select(['id','subject','cgy_id'])->distinct('cgy_id')->get();
    // dd($data);
    return $data;
});

Route::get('/pluck',function(){
    // $data = Cgy::select(['id','subject'])->get();
    $data = Cgy::pluck('subject','id');
    return $data;
});


Route::get('/relation',function(){
    // $article = Article::find(1);
    // dd($article->cgy->subject);
    $cgy = Cgy::find(1);
    dd($cgy->articles()->where('enabled',1)->get());
});

Route::get('/changerelation',function(){
    // $article = Article::find(1);
    
    // $article->cgy_id = 5;
    // $cgy_4 = Cgy::find(4);
    // $article->cgy()->associate($cgy_4);
    // $article->save();
    // dd($article);

    $cgy = Cgy::find(1);
    $article = Article::where('cgy_id',5)->first();
    $cgy->articles()->save($article);
    dd(Article::find($article->id));
});



