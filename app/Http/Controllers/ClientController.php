<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function edit(User $user) {
        return view('client.update', compact('user'));
    }
    public function __construct(){
        $this->middleware('auth');
    }
    public function update(User $user){
        $data = request()->validate([
            'name' => '',
            'surname' => '',
            'age' => 'nullable|integer|between:14,200',
            'iban' => '',
            'address' => '',
            'postal_code' => ''
        ]);
        $user->client()->updateOrCreate($data);
        return redirect(route('profile.show', $user->id));
    }
    public function statistics(){
        $orders = Order::where('client_id', \Auth::id())->get();
        $count = $orders->count();
        $total_price = $orders->sum('price');
        $total_discount = $orders->sum('discount');
        $done_count = $orders->where('done', '=', true)->count();
        return view('client.statistics', ['count'=>$count, 'total_price'=>$total_price, 'total_discount'=>$total_discount, 'done_count'=>$done_count]);
    }
}
