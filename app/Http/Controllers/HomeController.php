<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(Request $request){

        $orderNumber = $request->get('ORDERNUMBER');
        $quantityOrdered = $request->get('QUANTITYORDERED');
        $priceEach = $request->get('PRICEEACH');
        $orderLine = $request->get('ORDERLINENUMBER');

        $sales = Sale::whereRaw('1=1');

        if ($request->has('ORDERNUMBER') && $orderNumber!=null) {
            $sales=$sales->where('ORDERNUMBER', $request->ORDERNUMBER);
        }

        if ($request->has('QUANTITYORDERED') && $quantityOrdered!=null) {
            $sales=$sales->where('QUANTITYORDERED', $request->QUANTITYORDERED);
        }

        if ($request->has('PRICEEACH') && $priceEach!=null) {
            $sales=$sales->where('PRICEEACH', $request->PRICEEACH);
        }

        if ($request->has('ORDERLINENUMBER') && $orderLine!=null) {
            $sales=$sales->where('ORDERLINENUMBER', $request->ORDERLINENUMBER);
        }

        $sales = $sales->paginate(15);

        return view('welcome', compact('sales', 'orderNumber', 'quantityOrdered', 'priceEach', 'orderLine'));
    }
}
