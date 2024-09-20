<?php

namespace App\Modules\Hezma\Controllers\Api;

use App\Http\Controllers\Controller;
use Modules\Hezma\Services\HezmaServiceApi;

class HezmaController extends Controller
{

    private HezmaServiceApi $hezmaService;

    public function __construct(HezmaServiceApi $hezmaService)
    {
        $this->hezmaService = $hezmaService;
    }

    public function index()
    {
        return $this->hezmaService->index();
    }


}
