<?php

namespace Modules\Hezma\Services;

use Modules\Dawry\Models\Dawry;
use Modules\Hezma\Models\Hezma;
use Modules\Hezma\Repositries\HezmaRepositry;
use Yajra\DataTables\DataTables;

class HezmaService
{

    private HezmaRepositry $hezmaRepositry;

    public function __construct(HezmaRepositry $hezmaRepositry)
    {
        $this->hezmaRepositry = $hezmaRepositry;
    }


    public function index()
    {
        $datas =  $this->hezmaRepositry->index();
//   <a href="' . route('admin.order.show',$data->id) . '"  class="dropdown-item">'.__("service.update").'</a>

        return Datatables::of($datas)

            ->addColumn('action', function(Hezma $data) {


                return '<div class="btn-group mb-1">
                             <a href="'.  route('hezma.destroy',$data->id).'" class="btn btn-danger">Delete</a>

                              </div>

                              ';
            })

            ->rawColumns(['id','action'])
            ->toJson();


    }

    public function all()
    {
        return $this->hezmaRepositry->index();
    }


    public function store(array $data)
    {
        return $this->hezmaRepositry->store($data);
    }

    public function destroy($id)
    {
        return $this->hezmaRepositry->destroy($id);
    }

    public function find($id)
    {
        return $this->hezmaRepositry->find($id);
    }

}
