<?php

namespace Modules\Hezma\Controllers;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Modules\Hezma\Services\HezmaService;

class HezmaController extends Controller
{

    private HezmaService  $hezmaService;

    public function __construct(HezmaService $hezmaService)
    {
        $this->hezmaService = $hezmaService;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->hezmaService->index();
        }else{
            return view('Hezma::index');
        }

    }

    public function create()
    {
        return view('Hezma::create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');

        $this->hezmaService->store($data);

        return redirect()->back()->with('success', 'تم إضافة الحزمة بنجاح');

    }

    public function destroy($id)
    {
        $this->hezmaService->destroy($id);
        return redirect()->back()->with('success', 'تم حذف الحزمة بنجاح');
    }

}
