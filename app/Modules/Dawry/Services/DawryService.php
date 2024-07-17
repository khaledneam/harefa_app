<?php

namespace Modules\Dawry\Services;



use Modules\Dawry\Models\Dawry;
use Modules\Dawry\Repositries\DawryRepositry;
use Yajra\DataTables\DataTables;

class DawryService
{

    private $dawryRepository;

    public function __construct(DawryRepositry $dawryRepository)
    {
        $this->dawryRepository = $dawryRepository;
    }

    public function index()
    {
        $datas =  $this->dawryRepository->index();
//   <a href="' . route('admin.order.show',$data->id) . '"  class="dropdown-item">'.__("service.update").'</a>

        return Datatables::of($datas)

            ->addColumn('action', function(Dawry $data) {


                return '<div class="btn-group mb-1">
                             <a href="'.  route('dawry.destroy',$data->id).'" class="btn btn-danger">Delete</a>

                              </div>
                              <div class="btn-group mb-1">
                             <a href="'.  route('dawry.edit',$data->id).'" class="btn btn-warning">update</a>

                              </div>
                              ';
            })

            ->rawColumns(['id','action'])
            ->toJson();

    }

    public function store(array $data)
    {
        return $this->dawryRepository->store($data);
    }

    public function find($id)
    {
        return $this->dawryRepository->find($id);
    }

    public function update( array $data)
    {
        return $this->dawryRepository->update($data);
    }

    public function destroy($id)
    {

        return $this->dawryRepository->destroy($id);

    }

}
