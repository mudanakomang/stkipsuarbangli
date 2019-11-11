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
    $slides=\App\Slider::where('status','=','1')->orderBy('created_at','desc')->limit(3)->get();
    $posts=\App\Post::orderBy('created_at','desc')->limit(6)->get();

    return view('main',['slider'=>$slides,'posts'=>$posts]);
});
Route::get('/visi-misi',function(){
    return view('visi_misi');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
