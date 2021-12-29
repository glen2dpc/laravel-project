<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function create()
    {
      return view('/create');
    }

    public function store(Request $request)
    {
       $sale = request()->except('_token');
       Sale::insert($sale);

       return redirect()->route('index');
    }

    public function edit()
    {

    }
}
