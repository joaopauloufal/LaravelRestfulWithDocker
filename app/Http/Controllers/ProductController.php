<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest as Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){

        return Product::all();

    }

    public function store(Request $request){

        $data = $request->all();
        $data['user_id'] = \Auth::user()->id;
        return Product::create($data);

    }

    public function update(Request $request, Product $product){

        $product->update($request->all());

        return $product;

    }

    public function show(Product $product){

        return $product;

    }

    public function destroy(Product $product){

        $this->authorize('delete', $product);
        $product->delete();

        return $product;

    }
}
