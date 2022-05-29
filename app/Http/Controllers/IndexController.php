<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
 

class IndexController extends Controller

{
    public function index()
    {
        return view('index', [
            'customers' => Customer::get()
        ]);
    }

    public function show(Customer $customer)
    {
        return view('show', [
            'customer' => $customer,
        ]);
    }
}
