<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Order $order
     * @return Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Order $order
     * @return Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Order $order
     * @return Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Order $order
     * @return Response
     */
    public function destroy(Order $order)
    {
        //
    }


    public function discount($amount,$id){
        if(str_ends_with ($amount,"%")){
            $perc=substr($amount,0,-1);
            $ord=Order::where('id',$id)->first();
            $nprice=$ord->price;
            $dc=$nprice*$perc;
            $nprice-=$dc;
            $ord->discount=$dc;
            $ord->price=$nprice;
            $ord->save();

        }
        else{
            $ord=Order::where('id',$id)->first();
            $nprice=$ord->price;
            $dc=$amount;
            $nprice-=$dc;
            $ord->discount=$dc;
            $ord->price=$nprice;
            $ord->save();


        }

    }
}
