<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// dashboards routs
require base_path('app\Modules\Routes\dashboard.php');
// end dashboards routs

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


