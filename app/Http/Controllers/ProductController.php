<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{

    public function getData(){

      $products = Product::simplePaginate(15);

      return view('product.all', ['products' => $products]);
    }

    public function single($id){
        $product = Product::find($id);
        return view('product.single',  ['product' => $product]);
    }


    public function create() {

      $product = new Product();

      $product->name = request('name');
      $product->warranty = request('warranty');
      $product->description = request('description');
      $product->specification = request('specification');
      $product->stored_since = now();
      $product->price = request('price');
      $product->special_storing_terms = request('special_storing_terms');
      $product->volume = request('volume');
      $product->weight = request('weight');

      $product->save();
  
      return redirect('/products')->with('mssg', 'Thanks for your order!');
  
    }

    public function index() {

      return view('product.create');
    }
    
}