<?php

namespace Modules\Hezma\Services;

use App\Traits\ApiTraits;
use Modules\Hezma\Repositries\HezmaRepositry;

class HezmaServiceApi
{
    use ApiTraits;

    private HezmaRepositry $hezmaRepositry;

    public function __construct(HezmaRepositry $hezmaRepositry)
    {
        $this->hezmaRepositry = $hezmaRepositry;
    }

    public function index()
    {
        return $this->returnSuccessResponseWithData($this->hezmaRepositry->indexPaginate());
    }



}
