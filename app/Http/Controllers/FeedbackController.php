<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;

class FeedbackController extends Controller
{
    public function create($product_id)
    {
        $data = request()->validate([
            'rating' => 'required|numeric|between:1,5',
            'comment' => 'nullable|string'
        ]);
        $data['client_id'] = Auth::user()->client->id;
        $data['product_id'] = $product_id;
        Feedback::create($data);
        return redirect(route('products'));
    }
    public function create_view($product_id){
        return view('feedback.create', ['product_id' => $product_id]);
    }
    public function show($product_id){
        $product = Product::findOrFail($product_id);
        return view('feedback.all', ['feedbacks' => $product->feedbacks()->paginate(15)]);
    }
}
