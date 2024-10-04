<?php

use App\Http\Controllers\ApiChallengeController;
use App\Http\Controllers\ApiGeneralController;
use App\Modules\Base\Controller\ApiController;
use App\Modules\Hezma\Controllers\Api\HezmaController;
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

    // home/insights
    Route::get('home/insights',[ApiController::class,'getHomeInsights']);
    Route::post('home/support',[ApiController::class,'storeSupport']);

    // challenges
    Route::get('/challenges',[ApiGeneralController::class,'getchallenges']);
    Route::get('/challenges/type',[ApiGeneralController::class,'getchallengesType']);
    Route::post('challenges/according/type',[ApiGeneralController::class,'getchallengesAccordingType']);

    // start challenge
    Route::group(['prefix'=>'challenge','middleware'=>'auth:api'],function (){
        Route::post('/start',[ApiChallengeController::class,'startChallenge']);

    });
    // end challenge routes




});// end api key


