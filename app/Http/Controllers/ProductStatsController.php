<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductStats;
use Illuminate\Http\Request;

class ProductStatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kazkokieduomenys = Product::all();
        $pricesum = 0;
        $kiekis = 0;
        foreach($kazkokieduomenys as $data){
            $pricesum += $data->price;
            $kiekis++;
        }
        return view('productStats.stats', ['pricesum' => $pricesum, 'kiekis' => $kiekis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

}
