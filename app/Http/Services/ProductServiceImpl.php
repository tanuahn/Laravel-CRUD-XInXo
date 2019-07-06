<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;
use App\Product;

class ProductServiceImpl implements ProductService
{
    protected $productRepository;


    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAll()
    {
        $products = $this->productRepository->getAll();
        return $products;
    }

    public function findById($id)
    {
        $product = $this->productRepository->findById($id);
        return $product;
    }
//
    public function create($request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->producer = $request->producer;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $this->productRepository->create($product);

    }
//
    public function update($request, $id)
    {
        $oldProduct = $this->productRepository->findById($id);
        $oldProduct->name = $request->name;
        $oldProduct->producer = $request->producer;
        $oldProduct->price = $request->price;
        $oldProduct->quantity = $request->quantity;
        $oldProduct->description = $request->description;
        $this->productRepository->update($oldProduct);
    }
//
    public function destroy($id)
    {
        $product = $this->productRepository->findById($id);
        $this->productRepository->destroy($product);
    }

}
