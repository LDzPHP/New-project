<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerStoreRequest;
use App\Http\Requests\CustomerUpdateRequest;
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

    public function store(CustomerStoreRequest $customerStoreRequest)
    {   
        $validatedData = $customerStoreRequest->validated();

        $customer = new Customer([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
        ]);
        $customer->save();

        return redirect()->route('customers.index', ['customer' => $customer]);
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
        return redirect()->route('customers.index');
    }

    public function update(CustomerUpdateRequest $customerUpdateRequest, Customer $customer)
        {
        $validatedData = $customerUpdateRequest->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        
        $customer->name = $validatedData['name'];
        $customer->email = $validatedData['email'];
        $customer->save();
        
        return redirect()->route('customers.index');
        }
        
    public function destroy(Customer $customer)
        {
            $customer->delete();
            return redirect()->route('customers.index');
        }
}
