<?php

namespace Modules\Site\Controllers;

use App\Http\Controllers\Controller;

class SiteController extends Controller
{

    public function index()
    {
        return view('Site::index');
    }

}
