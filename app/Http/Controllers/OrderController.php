<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        switch($role=Auth::user()->role):
        case('client'):
            $userId = Auth::id();
            $orders = Order::where('client_id', $userId)->get();
            return view('order.index', ['orders' => $orders]);
            break;
        case('employee'):
            $orders=Order::all();
            return view('order.index',['orders'=>$orders]);
            break;
        case('manager'):
            $orders=Order::all();
            return view('order.index',['orders'=>$orders]);
            break;
        default:
            $orders=Order::all();
            return view('order.index',['orders'=>$orders]);
            break;
        endswitch;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id, $date, $period, $status, $done, $price )
    {
        $userId = Auth::id();

        $data = [
                'creation_date' => $date,
                'period' => $period,
                'status' => $status,
                'done' => $done,
                'delivery_address' => 'Adresas',
                'discount' => '10',
                'price' => $price,
                'client_id' => $userId,
                'employee_id' => 1
          ];
        $product = Product::findOrFail($id);
        $order = $product->order()->create($data);
        $product->update(['order_id' => $order->id]);
        $product->save();
        $order->save();
        return redirect('/orders')->with('mssg', 'Thanks for your order!');
    }

     /**
     * Payment window.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function pay($id)
    {
        return view('order.pay',  ['id' => $id]);
    }

    /**
     * Payment window with bank.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function bank($id)
    {
        return view('order.bank',  ['id' => $id]);
    }

    public function bankPay()
    {
        $order = Order::find(request('id'));
        $order->status = "Apmokėtas";
        $order->save();

        $userId = Auth::id();
        $orders = Order::where('client_id', $userId)->get();
        return view('order.index', ['orders' => $orders])->with('status', 'Apmokėta!');
    }
     /**
     * Payment window in debt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function debt($id)
    {
        $order = Order::find($id);
        $order->status = "Apmokėtas";
        $order->save();

        $userId = Auth::id();
        $orders = Order::where('client_id', $userId)->get();
        return view('order.index', ['orders' => $orders])->with('status', 'Apmokėta!');
    }


    /**
     * Display the specified resource.
     *
     * @param Order $order
     * @return Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        error_log($order);
        return view('order.single',  ['order' => $order, 'products' => Product::where('order_id', $order->id)->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Order $order
     * @return Response
     */
    public function edit($id)
    {
        return view('order.edit', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Order $order
     * @return Response
     */
    public function update()
    {
        $id = request('id');
        $order = Order::find($id);
        $order->status = request('status');
        $order->done = request('done');
        $order->discount = request('discount');
        $order->price = request('price');
        $order->save();

        $userId = Auth::id();
        $orders = Order::where('client_id', $userId)->get();
        return view('order.index', ['orders' => $orders]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Order $order
     * @return Response
     */
    public function destroy($id)
    {
        Order::findOrFail($id)->delete();

        $userId = Auth::id();
        $orders = Order::where('client_id', $userId)->get();
        return view('order.index', ['orders' => $orders]);
    }


    public function discount(){
        $amount=request('amount');
        $id=request('hidden_id');
        if(str_ends_with ($amount,"%")){
            $perc=substr($amount,0,-1);
            $ord=Order::where('id',$id)->first();
            $nprice=$ord->price;
            $dc=(float)$nprice*(float)$perc/100;
            $nprice-=$dc;
            if(!isset($ord->discount)){
                $ord->discount=$dc;
            }
            else{
                $ord->discount+=$dc;
            }
            $ord->price=$nprice;
            $ord->save();

        }
        else{
            $ord=Order::where('id',$id)->first();
            $nprice=$ord->price;
            $dc=(float)$amount;
            $nprice-=$dc;
            if(!isset($ord->discount)){
                $ord->discount=$dc;
            }
            else{
                $ord->discount+=$dc;
            }
            $ord->price=$nprice;
            $ord->save();
        }
        return redirect('/orders');
    }
}
