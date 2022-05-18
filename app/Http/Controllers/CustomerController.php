<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customers.index');
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store()
    {

    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.show', 
        [
            'customer' => $customer,
        ]);
    }

    public function edit($customer)
    {
        $customer = Customer::findOrFail($customer);

        return view('customers.edit',
        [
            'customer' => $customer,
        ]);
    }


       public function destroy()
    {

    }
}
