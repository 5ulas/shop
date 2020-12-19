<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{

  public function getData()
  {
    if (request()->has('sorter')) {
      switch (request()->get('sorter')) {
        case "name":
          $products = Product::orderBy('name', 'desc')->paginate(15);
          break;
        case "warranty":
          $products = Product::orderBy('warranty', 'desc')->paginate(15);
          break;
        case "price_descending":
          $products = Product::orderBy('price', 'desc')->paginate(15);
          break;
        case "price_ascending":
          $products = Product::orderBy('price', 'asc')->paginate(15);
          break;
        default:
          $products = Product::paginate(15);
          break;
      }
    } else {
      $products = Product::paginate(15);
    }

    return view('product.all', ['products' => $products]);
  }

  public function single($id)
  {
    $product = Product::find($id);
    return view('product.single',  ['product' => $product]);
  }

  public function create()
  {
    $data = request()->validate([
      'name' => 'string',
      'warranty' => 'integer',
      'description' => 'string',
      'specification' => 'string',
      'price' => 'numeric | min:0',
      'special_storing_terms' => 'boolean',
      'volume' => 'numeric | min:0',
      'weight' => 'numeric | min:0'
    ]);
    $data['stored_since'] = now();
    Product::create($data);
    return redirect('/products')->with('mssg', 'Thanks for your order!');
  }

  public function remove($id)
  {
    Product::findOrFail($id)->delete();

    return redirect('/products')->with('mssg', 'Product was removed');
  }

  public function index()
  {

    return view('product.create');
  }
}
