<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecommendController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\JohnController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\latestcontroller;
use App\Http\Controllers\rankcontroller;
use App\Http\Controllers\searchcontroller;
use App\Http\Controllers\UserController;

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
Route::get('/addmovie', 'MovieController@index');
Route::get('/', function () {
    return view('index');
});

Route::get('index', function () {
    return view('index');
});

Route::get('indexx', function () {
    return view('indexx');
});

Route::get('product', function () {
    return view('product');
});

Route::get('list', function () {
    return view('list');
});

Route::get('latest', function () {
    return view('latest');
});
Route::get('recsection', function () {
    return view('recsection');
});
Route::get('clock', function () {
    return view('clock');
});
Route::get('addmovie', function(){
    return view('addmovie');
});
Route::get('Spyxpage', function(){
    return view('Spyxpage');
});
Route::get('Kimetsupage', function(){
    return view('Kimetsupage');
});
Route::get('Stampedepage', function(){
    return view('Stampedepage');
});
Route::get('johnwick3page', function(){
    return view('johnwick3page');
});
Route::get('parabellum', function(){
    return view('parabellum');
});
Route::get('forfunpage', function(){
    return view('forfunpage');
});
Route::get('fightingpage', function(){
    return view('fightingpage');
});
Route::get('addlatest', function(){
    return view('addlatest');
});
Route::get('movierank', function(){
    return view('movierank');
});
Route::get('addrank', function(){
    return view('addrank');
});
Route::get('kknpage', function(){
    return view('kknpage');
});
Route::get('loreipsum', function(){
    return view('loreipsum');
});
Route::get('strangepage', function(){
    return view('strangepage');
});
Route::get('oncepage', function(){
    return view('oncepage');
});
Route::get('pachinkopage', function(){
    return view('pachinkopage');
});
Route::get('junvilepage', function(){
    return view('junvilepage');
});
Route::get('hillpage', function(){
    return view('hillpage');
});
Route::get('unchartedpage', function(){
    return view('unchartedpage');
});
Route::get('heropage', function(){
    return view('heropage');
});
Route::get('doctorpage', function(){
    return view('doctorpage');
});
Route::get('obipage', function(){
    return view('obipage');
});
Route::get('/product', [MovieController::class, 'search'])->name('product.search');


Route::resource('/recsection',RecommendController::class);
Route::resource('/johnwick3page',JohnController::class);
Route::resource('/addmovie',MovieController::class);
Route::resource('/product',MovieController::class);
Route::resource('/list',MovieController::class);
Route::resource('/latest',latestcontroller::class);
Route::resource('/addlatest',latestcontroller::class);
Route::resource('/addrank',rankcontroller::class);
Route::resource('/movierank',rankcontroller::class);


use Illuminate\Support\Facades\Auth;
Auth::routes();

Route::group(['middleware' => ['isAdmin','auth']], function(){
    Route::get('indexx', [App\Http\Controllers\HomeController::class, 'index'])->name('indexx');
});

Route::group(['prefix'=>'admin','middleware' => ['auth']], function(){
    Route::get('indexx', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.indexx');
    Route::get('addmovie', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.addmovie');
});

Route::group(['prefix'=>'user','middleware' => ['isUser','auth']], function(){
    Route::get('home', [App\Http\Controllers\AdminController::class, 'index'])->name('user.home');
});