<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleStoreRequest;
use App\Http\Requests\SaleUpdateRequest;
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

    public function store(SaleStoreRequest $saleStoreRequest)
    {
        $validatedData = $saleStoreRequest->validated();

        $sale = new Sale([
            'print_id' => $validatedData['print_id'],
            'price' => $validatedData['price'],
            'customer_id' => $validatedData['customer_id'],
            'sum' => $validatedData['sum'],
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

    public function update(SaleUpdateRequest $saleUpdateRequest, Sale $sale)
    {
    $validatedData = $saleUpdateRequest->validated();

    $sale->print_id = $validatedData['print_id'];
    $sale->price = $validatedData['price'];
    $sale->customer_id = $validatedData['customer_id'];
    $sale->sum = $validatedData['sum'];
    $sale->save();

    return redirect()->route('sales.show', ['sale' => $sale]);
    }

    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()->route('sales.index');
    }
}
