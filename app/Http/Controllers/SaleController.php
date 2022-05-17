<?php

namespace App\Http\Controllers;

use App\Models\Sale;

class SaleController extends Controller
{
    public function index()
    {
        $sale = Sale::find(1);
        dd($sale);        
    }
}
