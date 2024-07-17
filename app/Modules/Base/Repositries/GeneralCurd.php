<?php

namespace Modules\Base\Repositries;

use Illuminate\Database\Eloquent\Model;
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

    public function store(array $data)
    {
       foreach ($data as $field => $value)
       {
           $this->model->{$field} = $value;
       }
       $this->model->save();
       return $this->model;
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
}
