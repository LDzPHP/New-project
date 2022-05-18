<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(): View
    {
        return view('customers.index');
    }

    public function create(): View
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function show(Customer $customer): View
    {
    
        return view('customers.show', 
        [
            'customer' => $customer,
        ]);
    }

    public function edit(Customer $customer): View
    {
        return view('customers.edit',
        [
            'customer' => $customer,
        ]);
    }


       public function destroy()
    {

    }
}
