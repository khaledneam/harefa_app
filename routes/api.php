<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\User\Controllers\Api\UserController as UserControllerAlias;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

//Route::get('/user', function (\App\Http\Requests\TestRequest $request) {
//    $user = $request->get('ddd');
//    return $user;
//})->middleware('validate.app_key_api');



Route::group(['middleware' => ['validate.app_key_api']], function () {
   // login api
   Route::post('user/login',[UserControllerAlias::class,'Login']);
   Route::post('user/register',[UserControllerAlias::class,'register']);
    // end login api

    // user routs
    Route::group(['prefix'=>'user','middleware'=>'auth:api'],function (){
        Route::get('/me',[UserControllerAlias::class,'me']);
        Route::put('/update',[UserControllerAlias::class,'update']);

    });

    // end user routs



});


