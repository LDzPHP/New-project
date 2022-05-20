<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(): View
    {
        return view('customers.index', [
            'customers' => Customer::get(),
        ]);
    }

    public function create(): View
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();

        $customer = new Customer([
            'name' => $requestData['name'],
            'email' => $requestData['email'],
        ]);
        $customer->save();
        //$customer->name = $requestData['name'];
        //$customer->email = $requestData['email'];
        //$customer->save();

        return redirect()->route('customers.show', ['customer' => $customer]);
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

    public function update(Request $request, Customer $customer)
        {
        $requestData = $request->all();

        $customer->name = $requestData['name'];
        $customer->email = $requestData['email'];
        $customer->save();
        
        return redirect()->route('customers.show', ['customer' => $customer]);
        }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
