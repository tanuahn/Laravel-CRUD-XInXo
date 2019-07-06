<?php


namespace App\Http\Repositories;


use App\Product;

class ProductRepsitoryImpl implements ProductRepository
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function getModel()
    {
        $model = Product::class;
        return $model;
    }

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        $result = $this->model->paginate(3);
        return $result;
    }

    public function findById($id)
    {
        $result = $this->model->findOrFail($id);
        return $result;
    }

    public function create($data)
    {
        return $data->save();
    }

    public function update($data)
    {
        return $data->save();
    }

    public function destroy($object)
    {
        $object->delete();
    }
}
