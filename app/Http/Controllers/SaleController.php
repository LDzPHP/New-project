<?php

namespace App\Http\Controllers;

use App\Models\Sale;

class SaleController extends Controller
{
    public function index()
    {
        return view('sales.index');
    }

    public function create()
    {
        return view('sales.create');
    }

    public function store()
    {

    }

    public function show($id)
    {
        $sale = Sale::findOrFail($id);
        
        return view('sales.show', 
        [
            'sale' => $sale,
        ]);
    }

    public function edit($sale)
    {
        $sale = Sale::findOrFail($sale);

        return view('sales.edit',
        [
            'sale' => $sale,
        ]);
    }

        public function destroy()
    {

    }
}
