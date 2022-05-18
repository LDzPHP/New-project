<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\View\View;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index(): View
    {
        return view('sales.index');
    }

    public function create(): View
    {
        return view('sales.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function show(Sale $sale): View
    {
            return view('sales.show', 
        [
            'sale' => $sale,
        ]);
    }

    public function edit(Sale $sale): View
    {
        return view('sales.edit',
        [
            'sale' => $sale,
        ]);
    }

        public function destroy()
    {

    }
}
