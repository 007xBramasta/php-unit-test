<?php

//BISNIS LOGIC

namespace Bramasta\Test;

class ProductService
{
    public function __construct(private ProductRepository $repository)
    {
        
    }

    public function register(Product $product): Product //REGISTER PRODUCT
    {
        if ($this->repository->findById($product->getId())!= null) {
            throw new \Exception("Product is already exist");
        }

        return $this->repository->save($product);
    }

    public function delete(string $id): void //DELETE PRODUCT
    {
        $product = $this->repository->findById($id);
        if ($product == null) {
            throw new \Exception("Product is not found");
        }

        $this->repository->delete($product);
    }

} 