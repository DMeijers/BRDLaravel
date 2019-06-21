<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Request $request){

        $products = Product::all();

        return view('product.product', ['products' => $products]);
    }

    public function singleproduct($name){
        dd($name);
    }
}
