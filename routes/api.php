<?php

use App\Modules\Hezma\Controllers\Api\HezmaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Dawry\Controllers\Api\DawryController;
use Modules\User\Controllers\Api\UserController as UserControllerAlias;


// start user routes

Route::group(['middleware' => ['validate.app_key_api']], function () {
   // login api
   Route::post('user/login',[UserControllerAlias::class,'Login']);
   Route::post('user/register',[UserControllerAlias::class,'register']);
    // end login api

    // user routs
    Route::group(['prefix'=>'user','middleware'=>'auth:api'],function (){
        Route::get('/me',[UserControllerAlias::class,'me']);
        Route::put('/update',[UserControllerAlias::class,'update']);
        Route::post('/logout',[UserControllerAlias::class,'logout']);

    });

    // end user routs

    // dawries

    Route::get('/dawries',[DawryController::class,'index']);
    Route::get('/hezma',[HezmaController::class,'index']);




});


