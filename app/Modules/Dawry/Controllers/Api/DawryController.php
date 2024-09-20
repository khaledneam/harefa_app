<?php

namespace Modules\Dawry\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\Dawry\Services\DawryServiceApi;
use App\Traits\ApiTraits;

use Modules\User\Services\UserServiceApi;

class DawryController extends Controller
{
    use ApiTraits;
    private DawryServiceApi $dawryService;

    public function __construct(DawryServiceApi $dawryService)
    {
        $this->dawryService = $dawryService;
    }


    public function index(){

        return $this->dawryService->index();

    }




}
