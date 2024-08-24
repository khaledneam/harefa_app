<?php

use Illuminate\Support\Facades\Route;
use Modules\Dashboard\Controllers\DashboardController;
use Modules\Dawry\Controllers\DawryController;
use Modules\Hezma\Controllers\HezmaController;
use Modules\Question\Controllers\QuestionController;
use Modules\Visitor\Controllers\VisitorController;

Route::group(['middleware' => ['web', 'auth','admin']], function () {
    // Route::get('/admin',function (){
    //     return view('Dashboard::dashboard');
    //     // return view('Base::layout.dashboard.base');
    // })
    Route::get('/admin',[DashboardController::class,'index'])->name('admin.dashboard');

    // dawry routs
    Route::group(['prefix'=>'dawry'],function (){
        Route::get('/',[DawryController::class,'index'])->name('dawry.index');
        Route::get('/create',[DawryController::class,'create'])->name('dawry.create');
        Route::post('/store',[DawryController::class,'store'])->name('dawry.store');
        Route::get('/destroy/{id}',[DawryController::class,'destroy'])->name('dawry.destroy');
        Route::get('/edit/{id}',[DawryController::class,'edit'])->name('dawry.edit');
        Route::post('/update/{id}',[DawryController::class,'update'])->name('dawry.update');
    });

    // end dawry routs

    // start question modules
    Route::group(['prefix'=>'question'],function (){
        Route::get('/',[QuestionController::class,'index'])->name('question.index');
        Route::get('/create',[QuestionController::class,'create'])->name('question.create');
        Route::post('/store',[QuestionController::class,'store'])->name('question.store');
        Route::get('/destroy/{id}',[QuestionController::class,'destroy'])->name('question.destroy');
//        Route::get('/edit/{id}',[QuestionController::class,'edit'])->name('question.edit');
//        Route::post('/update/{id}',[QuestionController::class,'update'])->name('question.update');
    });
    // end start question modules
    // // start question modules
    Route::group(['prefix'=>'hezma'],function (){
        Route::get('/',[HezmaController::class,'index'])->name('hezma.index');
        Route::get('/create',[HezmaController::class,'create'])->name('hezma.create');
        Route::post('/store',[HezmaController::class,'store'])->name('hezma.store');
        Route::get('/destroy/{id}',[HezmaController::class,'destroy'])->name('hezma.destroy');
        Route::get('/edit/{id}',[QuestionController::class,'edit'])->name('hezma.edit');
        Route::post('/update/{id}',[QuestionController::class,'update'])->name('hezma.update');
    });
    // end start question modules


    // visitor routes

    Route::group(['prefix'=>'visitors'],function (){
        Route::get('/',[VisitorController::class,'index'])->name('visitors.index');

    });

    // end visitor routes



});


