<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();


// dashboards routs
require base_path('app\Modules\Routes\dashboard.php');
// end dashboards routs

// routes site
require base_path('app\Modules\Routes\site.php');
// end routes site



