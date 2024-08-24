<?php

namespace Modules\Visitor\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Visitor\Repositries\VisitorRepositry;
use Yajra\DataTables\DataTables;

class VisitorService
{

    private $VisitorRepository;

    public function __construct(VisitorRepositry $VisitorRepository)
    {

        $this->VisitorRepository = $VisitorRepository;

    }


    public function index()
    {
        $datas =  $this->VisitorRepository->index();

        return DataTables::of($datas)->make(true);


    }


    public function count()
    {

        return $this->VisitorRepository->count();

    }






}
