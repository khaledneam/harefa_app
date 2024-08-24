<?php

namespace Modules\Base\Repositries;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Modules\Base\Interface\BaseInterface;

class GeneralCurd implements BaseInterface
{
    private Model $model;

    public function getModel(): Model
    {
        return $this->model;
    }

    public function setModel(Model $model): void
    {
        $this->model = $model;
    }

    public function index()
    {
       return $this->model->orderBy('id','desc')->get();
    }
    public function indexPaginate()
    {
       return $this->model->orderBy('id','desc')->paginate(10);
    }


    public function count()
    {
       return $this->model->count();
    }

    public function store(array $data)
    {
       foreach ($data as $field => $value)
       {
           $this->model->{$field} = $value;
       }
       $this->model->save();
       return $this->model;
    }
    public function storeMulti(array $data)
    {
        $table = $this->model->getTable();
        return DB::table($table)->insert(
            $data
        );
        // Check if the array contains multiple records
//        if (isset($data[0]) && is_array($data[0])) {
//            $models = [];
//            foreach ($data as $record) {
//                $model = $this->store($record); // Save each record
//                $models[] = $model;
//            }
//            return $models;
//        } else {
//            // Save a single record
//            return $this->store($data);
//        }
    }
    public function update(array $data)
    {
        $model = $this->model->find($data['id']);
        if(!$model){
            return null;
        }
        //dd($model,$data);
       foreach ($data as $field => $value)
       {
           $model->{$field} = $value;
       }
       //dd($this->model);
       $model->save();
       return $model;
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function destroy($id)
    {
        return $this->model->destroy($id);
    }


    public function getLastCountByDays($days)
    {

        $daysAgo = Carbon::now()->subDays($days);


        return $this->model->where('created_at','>=', $daysAgo)->count();
    }




}
