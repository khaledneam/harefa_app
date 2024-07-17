<?php

use Illuminate\Support\Facades\Route;
use Modules\Dawry\Controllers\DawryController;


Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/admin',function (){
        return view('Dashboard::Dashboard');
        // return view('Base::layout.dashboard.base');
    })->name('admin.dashboard');

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


});


