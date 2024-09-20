<?php

namespace App\Modules\Dawry\Services;



use App\Traits\ApiTraits;
use Modules\Dawry\Models\Dawry;
use Modules\Dawry\Repositries\DawryRepositry;
use Yajra\DataTables\DataTables;

class DawryServiceApi
{
    use ApiTraits;

    private DawryRepositry $dawryRepository;

    public function __construct(DawryRepositry $dawryRepository)
    {
        $this->dawryRepository = $dawryRepository;
    }

    public function index()
    {
        return $this->returnSuccessResponseWithData($this->dawryRepository->indexPaginate());
    }



}
