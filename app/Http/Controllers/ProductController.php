<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){

        return Product::all();

    }

    public function store(Request $request){

        return Product::create($request->all());

    }

    public function update(Request $request, Product $product){

        $product->update($request->all());

        return $product;

    }

    public function show(Product $product){

        return $product;

    }

    public function destroy(Product $product){

        $product->delete();

        return $product;

    }
}
