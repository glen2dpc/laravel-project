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

    public function edit($id)
    {
        $sale = Sale::findOrFail($id);
        return view('edit', compact('sale'));
    }

    public function update(Request $request, $id)
    {
        $sale = request()->except(['_token']);
        Sale::where('id', '=', $id)->update($sale);

        return redirect()->route('index');
    }

    public function destroy(Sale $id)
    {
        $id->delete();
        return redirect()->route('index');
    }
}
