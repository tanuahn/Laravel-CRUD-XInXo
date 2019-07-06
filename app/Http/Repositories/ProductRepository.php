<?php


namespace App\Http\Repositories;


interface ProductRepository
{
    public function getAll();
    public function findById($id);
    public function create($data);
    public function update($data);
    public function destroy($object);
}
