<?php
namespace App\Services;
use App\Product;
class ProductService{

    public function getAllProduct(){
        return Product::all();
    }

}