<?php

namespace Modules\Visitor\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Visitor\Services\VisitorService;

class VisitorController extends Controller
{
    private VisitorService $visitorService;

    public function __construct(VisitorService $visitorService){
        $this->visitorService = $visitorService;
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->visitorService->index();
        } else {
        return view("Visitor::index");
        }
    }
}
