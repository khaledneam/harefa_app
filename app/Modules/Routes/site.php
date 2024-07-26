<?php


use Illuminate\Support\Facades\Route;
use Modules\Site\Controllers\SiteController;

//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>''],function (){

    Route::get('/',[SiteController::class,'index'])->name('site.index');


});
