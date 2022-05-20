<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\View\View;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index(): View
    {
        return view('sales.index', [
            'sales' => Sale::get(),
        ]);
    }

    public function create(): View
    {
        return view('sales.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();

        $sale = new Sale([
            'print_id' => $requestData['print_id'],
            'price' => $requestData['price'],
            'customer_id' => $requestData['customer_id'],
            'sum' => $requestData['sum'],
        ]);
        $sale->save();
        return redirect()->route('sales.show', ['sale' => $sale]);
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

    public function update(Request $request, Sale $sale)
    {
    $requestData = $request->all();

    $sale->print_id = $requestData['print_id'];
    $sale->price = $requestData['price'];
    $sale->customer_id = $requestData['customer_id'];
    $sale->sum = $requestData['sum'];
    $sale->save();

    return redirect()->route('sales.show', ['sale' => $sale]);
    }

    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()->route('sales.index');
    }
}
